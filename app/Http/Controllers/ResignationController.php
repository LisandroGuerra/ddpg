<?php

namespace DDPG\Http\Controllers;

use Illuminate\Http\Request;

class ResignationController extends Controller
{
    public function index ()
    {
        return view('desligar');
    }
}
