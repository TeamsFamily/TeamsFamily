<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    function index(){
        $data = array(
            'content' => 'index'
        );

        return view('layout.base', $data);
    }
}
