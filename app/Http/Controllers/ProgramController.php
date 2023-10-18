<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = ['php', 'java', 'c', 'javascript', 'dart'];
        return view('programs', compact('programs'));
    }
    
}

?>
