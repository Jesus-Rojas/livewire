<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class HelloWorld extends Component
{
    public $users;
    
    protected $listeners = ['foo' => '$refresh'];

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.hello-world');
    }

    public function refreshChildren()
    {
        $this->emit('refreshChildren', 'Jesus');
        // $this->emit('refreshChildren');
    }
}
