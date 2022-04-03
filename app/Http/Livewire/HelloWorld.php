<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Rojas';
    public $hooksCustom = [];

    public function render()
    {
        array_push($this->hooksCustom, 'render');
        return view('livewire.hello-world');
    }

    public function mount($name)
    // public function mount(Request $request, $name)
    {
        array_push($this->hooksCustom, 'mount');
        $this->name = $name;
        // $this->name = $request->input('name', $name);
    }

    public function updatedName($name) // esta funcion va deacuerdo a la propiedad publica
    // public function updated($name)
    // public function updated()
    {
        $this->name = strtoupper($name);
        // $this->name = 'updated';
        array_push($this->hooksCustom, 'updated');
    }

    public function hydrate()
    {
        array_push($this->hooksCustom, 'hydrated');
        $this->name = 'hydrated';
    }
}
