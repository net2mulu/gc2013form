<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class Login extends Component
{

    public $kiot_id, $password , $full_name , $id_num , $dept , $status = 0;
    

    protected $rules = [
        'kiot_id' => 'required',
        'password' => 'required',
    ];

    public function check()
    {
        $this->validate();
        $user = User::where('kiot_id',$this->kiot_id)->first();
        if($user)
        {
            if($user->password = Hash::make($this->password) ) {
                $this->full_name = $user->full_name;
                $this->id_num = $user->kiot_id;
                $this->dept = $user->dept;        
                   // dd($this->full_name);                
                Auth::login($user);
                if($user->role == 'admin')
                    return redirect('/admin');
              else
              return redirect(RouteServiceProvider::HOME);
            } 
               else {
                 session()->flash('error', 'Post successfully updated.');
            }
           
        }
        else {
                 session()->flash('error', 'Post successfully updated.');
            }
    }

     

    public function render()
    {
        return view('livewire.login');
    }
}
