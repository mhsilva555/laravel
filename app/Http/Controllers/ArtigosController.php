<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use LaraDev\Models\Artigos;

class ArtigosController extends Controller
{
    public function GetAll() {
        $artigos = Artigos::getPosts();

        return view('artigos')->with('artigos', $artigos);
    }
}
