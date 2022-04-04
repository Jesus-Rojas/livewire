<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;

class Radio extends Component
{
    public $answer;
    
    public function render()
    {
        return view('livewire.forms.radio');
    }
}
