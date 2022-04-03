<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SayHi extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.say-hi');
    }

    public function mount(User $user)
    {
        $this->user = $user;
    }
}
