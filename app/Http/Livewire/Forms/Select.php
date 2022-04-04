<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;

class Select extends Component
{
    public $extras = [];
    public $size;

    public function render()
    {
        return view('livewire.forms.select');
    }
}
