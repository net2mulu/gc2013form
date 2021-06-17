<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\user;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Hash;


class Register extends Component
{
    public $full_name,$phone, $kiot_id, $kiot_full_id, $password, $password_confirmation, $dept, $log, $batch;

    protected $rules = [
        'full_name' => 'required',
        'kiot_id' => 'required|unique:users|min:4|max:4',
        'password' => 'required|confirmed',
        'dept' => 'required',
        'phone' => 'required',
        'batch' => 'required'
    ];

    public function submit()
    {
       //  dd($this->kiot_full_id);
        $this->validate();
       // Execution doesn't reach here if validation fails.
           $insert =  User::create([
                'full_name' => $this->full_name,
                'phone' => $this->phone,
                'kiot_id' => $this->kiot_full_id,
                'password' => Hash::make($this->password),
                'dept' => $this->dept,            
            ]);

            if($insert) {
                $this->reset();
                session()->flash('registerd', 'Post successfully updated.');
                $this->log = 1;
            }
    }
   
    public function updated($kiot_id)
    {
        $this->validateOnly($kiot_id);
        $this->kiot_full_id = 'WOUR/'.$this->kiot_id.$this->batch;
    }

    public function render()
    {
        return view('livewire.registration');
    }
}
