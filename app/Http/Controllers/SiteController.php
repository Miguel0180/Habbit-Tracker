<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {

        $name = 'Miguel';
        $habbits = ['ler', 'correr','estudar'];
        return view('home', [
            'name' => $name,
            'habbits' => $habbits
        ]);
    }
}
