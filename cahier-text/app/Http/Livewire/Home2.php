<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cahier;

class Home2 extends Component
{
    public function render()
    {
        $value = session('prof');
        $cahiers = Cahier::where('id_p',$value->id)->get();
        //dd($cahiers);
        return view('livewire.home2',compact('cahiers'));
    }
}
