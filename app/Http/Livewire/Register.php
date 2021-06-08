<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\user;
use Illuminate\Support\Facades\Hash;


class Register extends Component
{
    public $full_name, $kiot_id, $password, $password_confirmation ,$dept, $log;

    protected $rules = [
        'full_name' => 'required',
        'kiot_id' => 'required|unique:users',
        'password' => 'required|confirmed',
        'dept' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

       $insert =  User::create([
            'full_name' => $this->full_name,
            'kiot_id' => $this->kiot_id,
            'password' => Hash::make($this->password),
            'dept' => $this->dept,
        ]);

        if($insert) {
            $this->reset();
            session()->flash('registerd', 'Post successfully updated.');
            $this->log = 1;
        }
    }
    public function render()
    {
        return view('livewire.register');
    }
}
