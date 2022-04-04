<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;

class Checkbox extends Component
{
    public $hobbies = ['sailing'];

    public function render()
    {
        return view('livewire.forms.checkbox');
    }
}
