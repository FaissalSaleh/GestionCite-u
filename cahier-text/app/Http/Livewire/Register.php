<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Prof;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class Register extends Component
{
    public $name = '';
    public $pass = '';
    public $email = '';
    public $erreur = null;
    public $re_pass = '';

        protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'pass' => 'required|min:6',
    ];

    public function render()
    {
        return view('livewire.register');
    }

    public function register()
    {
        $this->validate();
        if ($this->pass == $this->re_pass) {
            $profse = Prof::create([
                'nom'=>$this->name,
                'email'=>$this->email,
                'passe'=>Hash::make($this->pass)
            ]);
            $prof = DB::table('profs')->where('nom',$this->name)->first();
            session(['prof' => $prof]);
            return redirect()->route('home');
        } else {
            $this->erreur = 'Verifier Vos Champs';
        }
    }
}
