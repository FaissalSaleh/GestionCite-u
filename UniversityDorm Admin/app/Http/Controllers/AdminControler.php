<?php

namespace App\Http\Controllers;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Models\User;
use App\Models\Residence;
use App\Models\Block;
use App\Models\Chambre;
use App\Models\Reservation;
use Livewire\WithPagination;

class AdminControler extends Controller
{
    use WithPagination;
    /**
     * Display a listing of theblock resource. 
     *
     * @return \Illuminate\Http\Response 
     */
    public function index(Request $request)
    {
        $user = $request->session()->get('user');
        $route = 'home'; 
        $users = User::all();  
         return view('index',compact('user','route','users'));
    }

    public function autocomplete(Request $request)
    {
        $nom = array();
        $term = $request->input('term');
        $data = User::where('name', 'LIKE', '%' . $term . '%')->get();
        foreach ($data as $c) {
        array_push($nom,$c->name);
    }
        return response()->json($nom);
    }

    public function chambre(Request $request)
    {
         $user = $request->session()->get('user');  
         $route = 'chambre';
         $blocks = Block::all();    
         $residences = Residence::all();    
         $chambres = Chambre::leftJoin('block',"block.id","=","chambre.block")
         ->leftJoin('residences',"residences.id","=","block.residence")
         ->get(["chambre.name as nom_chambre","residences.name as nom_residence","block.name as num_block","chambre.capacite as chambre_capacite","chambre.photo as chambre_photo"]);    
         return view('chambres',compact('user','route','blocks','residences','chambres'));
    }

      public function select_residence(Request $request)
    {
       
        $residence = Residence::where('id',$request->residence)->first();  
        return response()->json($residence);
    }

     public function login(Request $request)
    {
        $user = Admin::where('username',$request->email)->where('password',$request->passe)->first();
       if ($user) {
            $request->session()->put('my_session','my_session');
            $request->session()->put('user',$user);
           return response()->json(['success' => 'User created successfully.']);
       } else {
           return response()->json(['error' => 'User created successfully.']);
       }
       return $user;
    }

    /**
     * Show the form for creating a new  resource.
     *
     * @return \Illuminate\Http\Respon block 
     */
    public function Annuler(Request $request)
    {
        Reservation::where('id',$request->idr)->update(array('isApproved' => 2));
        return response()->json(['success' => 'User created successfully.']);
    }

     public function detail_user_reservation2(Request $request)
    {
       $user = User::leftJoin('reservations',"users.id","=","reservations.studentId")
              ->where('users.id',$request->id)
              ->first();
        return response()->json($user);
    }

     public function valider(Request $request)
    {
        Reservation::where('id',$request->idr)->update(array('isApproved' => 1));
        return response()->json(['success' => 'User created successfully.']);
    }

    public function detail_user_reservation(Request $request)
    {
      $r = Chambre::Join('block',"block.id","=","chambre.block")
         ->Join('residences',"residences.id","=","block.residence")
         ->Join('reservations',"chambre.id","=","reservations.room")
         ->Join('users',"users.id","=","reservations.studentId")
         ->where('users.id',$request->id)
         ->first(["chambre.name as nom_chambre","residences.name as nom_residence","block.name as num_block","chambre.capacite as chambre_capacite","chambre.photo as chambre_photo","block.id as id_block","chambre.id as id_chambre","reservations.isApproved as status","reservations.id as idr"]);

         if ($r->status == '2') {
             return '<h4>Demande Annuler pour cet Utilisateur</h4>';
         }else {
    return '<section class="rooms-section spad" style="position: relative;left:250px;">
        <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="http://127.0.0.1:8080/files/'.$r->chambre_photo.'" style="width: 100%;height:200px;" alt="">
                        <div class="ri-text">
                            <h4>Numero '.$r->id_chambre.'</h4>
                            <h3>'.$r->nom_chambre.' XAF<span>/Mois</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Capacites:</td>
                                        <td>'.$r->chambre_capacite.' plces</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Residence:</td>
                                        <td>'.$r->nom_residence.'</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Block:</td>
                                        <td>'.$r->num_block.'</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Occupants:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12" style="position: relative;left: -350px;">
                    <div class="room-pagination">
                       <a href="'.$r->idr.'" id="Annuler"> Annuler la demande   <i class="fa fa-long-arrow"></i></a>
                       <a href="'.$r->idr.'" id="valider">Valider la demande  <i class="fa fa-long-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>';
         }


    }

          public function valider_block(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'capacite' => 'required',
        ]);

             if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }

        $residence = Block::create([
            'name'=>$request->name,
            'capacite'=>$request->capacite,
            'message'=>$request->message,
            'residence'=>$request->residence,
            'photo'=>$request->file,
        ]);
        return response()->json(['success' => 'Residence created successfully.']);
    }

       public function valider_residence(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'capacite' => 'required',
        ]);

             if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }

        $residence = Residence::create([
            'name'=>$request->name,
            'capacite'=>$request->capacite,
            'message'=>$request->message,
            'photo'=>$request->file,
        ]);
        return response()->json(['success' => 'Residence created successfully.']);
    }

      public function block(Request $request)
    {
        $user = $request->session()->get('user');
        $route = 'residence'; 
        $users = User::all();  
         $residences = Block::all();
         $res = Residence::all();  
         return view('block',compact('user','route','users','residences','res'));
    }

     public function residence(Request $request)
    {
        $user = $request->session()->get('user');
        $route = 'residence'; 
        $users = User::all();  
        $residences = Residence::all();  
         return view('residence',compact('user','route','users','residences'));
    }

     public function submit_search(Request $request)
    {
       $user = User::where('name', $request->value)->get();
       return response()->json($user);
    }

    public function search_user(Request $request)
    {
       $users = User::where('name', 'like', '%' . $request->value. '%')->get();;
       return response()->json(['success' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function store(Request $request)
    {
        //
    }

    public function reservation(Request $request)
    {
          $user = $request->session()->get('user');
        $route = 'reservation'; 
        $users = User::all();  
         $reservations = Chambre::Join('block',"block.id","=","chambre.block")
         ->Join('residences',"residences.id","=","block.residence")
         ->Join('reservations',"chambre.id","=","reservations.room")
         ->Join('users',"users.id","=","reservations.studentId")
         ->get(["chambre.name as nom_chambre","residences.name as nom_residence","block.name as num_block","chambre.capacite as chambre_capacite","chambre.photo as chambre_photo","block.id as id_block","chambre.id as id_chambre","reservations.isApproved as status"]);
      
        return view('reservation',compact('user','route','reservations'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function destroy($id)
    {
        //valider_chambre
    }

        public function valider_chambre(Request $request)
    {
              $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'capacite' => 'required',
            'residence' => 'required',
            'block' => 'required',
        ]);

             if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }

        $chambre = Chambre::create([
            'name'=>$request->name,
            'capacite'=>$request->capacite,
            'message'=>$request->message,
            'photo'=>$request->file,
            'residence'=>$request->residence,
            'block'=>$request->block,
        ]);
        return response()->json(['success' => 'Residence created successfully.']);
    }

     public function select_residence_chambre(Request $request)
    {
        $blocks = Block::where('residence',$request->residence)->get();  
        return response()->json($blocks);
    }

    public function select_blocb_chambre(Request $request)
    {
        $blocks = Block::leftJoin('residences',"residences.id",'=','block.residence')->where('block.id',$request->block)->get(['block.name as nom','residences.name as name','block.photo as photo','block.capacite as capacite']);  
        return response()->json($blocks);
    }
}
