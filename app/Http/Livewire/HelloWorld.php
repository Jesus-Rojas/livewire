<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class HelloWorld extends Component
{
    public $names = ['Rojas', 'Jesus'];
    public $users;
    public $customEloquent;
    
    public function mount()
    {
        $this->customEloquent = User::whereEstadoUser(0)->first();
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.hello-world');
    }

    public function removeUser($id)
    {
        $user = User::findOrFail($id);
        if ($user) {
            $user->delete();
            $this->users = User::all();
        }
    }
}
