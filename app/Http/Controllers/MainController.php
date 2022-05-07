<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $col = [
            ['Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', '[', ']'],
            ['A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', ';', '\''],
            ['Z', 'X', 'C', 'V', 'B', 'N', 'M', ',', '.', '/']
        ];
        
        return view('main', compact('col'));
    }
}
