<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Cahier;

class Home extends Component
{

     use WithFileUploads;
 
    public $photo;

    public function render()
    {
        $value = session('prof');
        $cahiers = Cahier::where('id_p',$value->id)->get();
        //dd($cahiers);
        return view('livewire.home',compact('cahiers'));
    }

    public function mount()
    {
       
    }

    public function savePhoto()
    {
        
    }
}
