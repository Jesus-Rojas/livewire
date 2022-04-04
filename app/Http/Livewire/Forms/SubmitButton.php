<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;

class SubmitButton extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.forms.submit-button');
    }

    public function downloadFile()
    {
        dump("Download a file!");
        dd("Download a file!");
    }

    public function createArticle()
    {
        dump("Create an article with a title of " . $this->title);
        dd("Create an article with a title of " . $this->title);
    }
}
