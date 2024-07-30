<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
       // echo "A soma de $p1 e $p2 é = ".($p1+$p2);
       // return view('site.teste', ['valor1' => $p1, 'valor2' => $p2]); //array associatvio
        return view('site.teste', compact('p1', 'p2')); //compact

    }
}
