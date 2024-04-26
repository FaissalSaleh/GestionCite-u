<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{
    public $nom = '';
    public $password = '';
    public $error = null;

    public function render()
    {
        return view('livewire.login');
    }

    public function login() 
    {
        $prof = DB::table('profs')->where('nom',$this->nom)->first();
        //dd($prof);
        if($prof !== null){
            if (Hash::check($this->password, $prof->passe)) {
                 session(['prof' => $prof]);
            return redirect()->route('home');
    }else {
        $this->error = 'error';
    }
        }else {
            $this->error = 'error';
        }
    }
}
