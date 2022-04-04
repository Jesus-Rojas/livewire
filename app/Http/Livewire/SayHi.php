<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SayHi extends Component
{
    public $user;

    protected $listeners = ['foo' => '$refresh'];
    // protected $listeners = ['refreshChildren' => '$refresh'];
    // protected $listeners = ['refreshChildren'];
    // protected $listeners = ['refreshChildren' => 'refreshMe'];

    public function refreshChildren($value)
    // public function refreshMe($value)
    {
        //
    }

    public function render()
    {
        return view('livewire.say-hi');
    }

    public function mount(User $user)
    {
        $this->user = $user;
    }
}
