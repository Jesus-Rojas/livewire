<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function downloadFile()
    {
        dump("Download a file!");
    }

    public function createArticle()
    {
        dump("Create an article with a title of '" . request()->get('title') . "'");
    }
}
