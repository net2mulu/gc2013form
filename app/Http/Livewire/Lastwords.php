<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

use Livewire\Component;

class Lastwords extends Component
{
    public $lastword , $lastwordtoupdate;

     protected $rules = [
        'lastword' => 'required|max:30',
        
    ];
    public function insertLastWord()
    {
    // dd(Auth::user()->id);

        $this->validate();
       // dd($this->lastword);
        $chk = user::where('id', Auth::user()->id)->first();
        if($chk->lastword != null){
            $this->reset();
            return session()->flash('alreadyexist', 'updated.');
        }
        $user = Auth::user();
        $user->lastword = $this->lastword;
         $insert = $user->save();
       // $insert = user::where('id', Auth::user()->id)->update(['lastword' ,$this->lastword]);

        if($insert) {
           session()->flash('lastwordsent', 'Post successfully updated.');
        }
    }

    protected $messages = [
        'lastword.max' => 'maximum alowed character is 30',
    ];

    public function updated($lastword)
    {
        $this->validateOnly($lastword);
        
    }
    public function updateLastWord() {
       $chk = user::where('id', Auth::user()->id)->first();
      if($chk->lastword == $this->lastwordtoupdate){
          session()->flash('alreadyrecorded', 'Post successfully updated.');         
      } else {
          $update = user::where('id', Auth::user()->id)->update(['lastword'=> $this->lastwordtoupdate]);
          if($update){
              session()->flash('succussupdte', 'Post successfully updated.');
          }
      }
    } 

    public function render()
    {
      $chk = user::where('id', Auth::user()->id)->first();
      if($chk){
          $word = $chk->lastword; 
          $this->lastwordtoupdate = $word;
      } else {
          $word = null;
      }
     
        return view('livewire.lastwords' , [
          'finalword' => $word
        ]);
    }
}
