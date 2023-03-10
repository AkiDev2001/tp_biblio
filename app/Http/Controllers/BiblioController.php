<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BiblioController extends Controller
{
    public function index() {

        $documents = Document::all('name', 'path');

        return view('biblio')->with('documents', $documents);
    }
}
