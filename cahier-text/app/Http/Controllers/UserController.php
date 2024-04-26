<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Residence;
use App\Models\Block;
use App\Models\Chambre;
use App\Models\Reservation;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

        public function selectblock(Request $request)
    {
        $html='';
        $blocks = Block::where('residence',$request->residence)->get();
        $residence = Residence::where('id',$request->residence)->first();

        $html .= '<div class="col-lg-12" style=""><div class="blog-item set-bg" data-setbg=""> <img style="width: 100%;height:100%" src="http://127.0.0.1:8080/files/'.$residence->photo.'"><div class="bi-text"><span class="b-tag">'.$residence->capacite.'</span><h4><a href="detail-block/'.$residence->id.'">'.$residence->name.'</a></h4><div class="b-time"><i class="icon_clock_alt"></i> '.$residence->created_at.'</div></div></div></div>';
        return response()->json(['residence' => $html,'blocks'=>$blocks]);
    }

    public function add_reservation(Request $request)
    {
        $user = $request->session()->get('user');
        $reservation = Reservation::create([
            'room' => $request->chambre,
            'studentId' => $user->id,
        ]);

         return response()->json($reservation);
    }

        public function show_block_residence(Request $request)
    {
        $blocs = Block::where('residence',$request->id_residence)->get();
        return response()->json($blocs);
    }

     public function detail_chambre(Request $request,$id)
    {
       $user = $request->session()->get('user');
        $route = 'chambre';
        $users = User::all();
        $block = Block::where('id',$id)->first();
          $chambres = Chambre::leftJoin('block',"block.id","=","chambre.block")
         ->leftJoin('residences',"residences.id","=","block.residence")
         ->where('block',$id)
         ->get(["chambre.name as nom_chambre","residences.name as nom_residence","block.name as num_block","chambre.capacite as chambre_capacite","chambre.photo as chambre_photo","block.id as id_block","chambre.id as id_chambre"]);
         return view('chambre-detail',compact('user','route','users','chambres','block'));
    }

    public function residence(Request $request)
    {
        $user = $request->session()->get('user');
        $route = 'residence';
        $users = User::all();
        $residences = Residence::all();
        return view('residences',compact('user','route','users','residences'));
    }


      public function reservation(Request $request)
    {
        $user = $request->session()->get('user');
        $route = 'reservation';
        $users = User::all();
        $blocks = Block::all();
        $residences = Residence::all();
         $chambres = Chambre::Join('block',"block.id","=","chambre.block")
         ->Join('residences',"residences.id","=","block.residence")
         ->Join('reservations',"chambre.id","=","reservations.room")
         ->Join('users',"users.id","=","reservations.studentId")
         ->where('users.id',$user->id)
         ->get(["chambre.name as nom_chambre","residences.name as nom_residence","block.name as num_block","chambre.capacite as chambre_capacite","chambre.photo as chambre_photo","block.id as id_block","chambre.id as id_chambre","reservations.isApproved as status","users.name as nom_user"]);
         return view('reservations',compact('user','route','users','chambres','residences','blocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

      public function block(Request $request)
    {
         $user = $request->session()->get('user');
         $route = 'block';
         $users = User::all();
         $residences = Block::all();
         $res = Residence::all();
         return view('block',compact('user','route','users','residences','res'));
    }

         public function detail_block(Request $request,$idr)
    {
         $user = $request->session()->get('user');
         $route = 'block';
         $users = User::all();
         $residences = Block::where('id',$idr)->get();
         $res = Residence::all();
         return view('block',compact('user','route','users','residences','res'));
    }

    /**
     * Store a newly created responseJSON.message "SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'photo' at row 1 (SQL: insert into `users` (`name`, `tel`, `sexe`, `photo`, `email`, `filiere`, `password`, `updated_at`, `created_at`) values (orionis mah, 652105979, F, 1711976837_Logo-UY1-removebg-preview.png, mahvale@gmail.com, ict401, 123456789, 2024-04-01 13:07:31, 2024-04-01 13:07:31))"
 resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|min:5',
            'sexe' => 'required',
            'tel' => 'required|min:9|unique:users',
            'email' => 'required|unique:users',
            'filiere' => 'required',
            'passe' => 'required|min:8',
        ]);

             if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }

        $user = User::create([
            'name'=>$request->nom,
            'tel'=>$request->tel,
            'sexe'=>$request->sexe,
            'photo'=>$request->file,
            'email'=>$request->email,
            'filiere'=>$request->filiere,
            'password'=>$request->passe,
        ]);
        $request->session()->put('my_session','my_session');
        $request->session()->put('user',$user);
        return response()->json(['success' => 'User created successfully.']);
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

     public function login(Request $request)
    {
       $user = User::where('email',$request->email)->where('password',$request->passe)->first();
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

     public function select_residence_chambre(Request $request)
    {
        $blocks = Block::where('residence',$request->residence)->get();
        return response()->json($blocks);
    }

    /**
     * Remove destroy the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search_room(Request $request,$idr,$idb)
    {
        $user = $request->session()->get('user');
        $route = 'chambre';
        $residences = Residence::all();
        $blocks = Block::all();

        $chambres = Chambre::leftJoin('block',"block.id","=","chambre.block")
         ->leftJoin('residences',"residences.id","=","block.residence")
         ->where('block.id',$idb)
         ->where('residences.id',$idr)
         ->get(["chambre.name as nom_chambre","residences.name as nom_residence","block.name as num_block","chambre.capacite as chambre_capacite","chambre.photo as chambre_photo","block.id as id_block","chambre.id as id_chambre"]);
         return view('chambre',compact('user','route','chambres','residences','blocks'));
    }

    public function chambre(Request $request)
    {
        $user = $request->session()->get('user');
        $route = 'chambre';
        $residences = Residence::all();
        $blocks = Block::all();
        $chambres = Chambre::leftJoin('block',"block.id","=","chambre.block")
         ->leftJoin('residences',"residences.id","=","block.residence")
         ->get(["chambre.name as nom_chambre","residences.name as nom_residence","block.name as num_block","chambre.capacite as chambre_capacite","chambre.photo as chambre_photo","block.id as id_block","chambre.id as id_chambre"]);
    return view('chambre',compact('user','route','chambres','residences','blocks'));
    }

    public function logout(Request $request)
    {
        $request->session()->remove('my_session');
        $request->session()->remove('user');
       // $request->session()->clear();
        return view('login');
    }

    public function uploadFile(Request $request){

         $data = array();

         $validator = Validator::make($request->all(), [
              'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
         ]);

         if ($validator->fails()) {

              $data['success'] = 0;
              $data['error'] = $validator->errors()->first('file');// Error response

         }else{
              if($request->file('file')) {

                   $file = $request->file('file');
                   $filename = time().'_'.$file->getClientOriginalName();

                   // File extension
                   $extension = $file->getClientOriginalExtension();

                   // File upload location
                   $location = 'files';

                   // Upload file
                   $file->move($location,$filename);

                   // File path
                   $filepath = url('files/'.$filename);

                   // Response
                   $data['success'] = 1;
                   $data['message'] = 'Uploaded Successfully!';
                   $data['filepath'] = $filepath;
                   $data['extension'] = $extension;
              }else{
                   // Response
                   $data['success'] = 2;
                   $data['message'] = 'File not uploaded.';
              }
         }

         return $filename;
    }
}
