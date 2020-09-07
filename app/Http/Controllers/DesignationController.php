<?php

namespace DDPG\Http\Controllers;

use DDPG\Models\Centrals;
use DDPG\Models\Programs;
use DDPG\Models\Species;
use DDPG\Models\Types;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function create ()
    {
        $centrals = Centrals::all();
        $programs = Programs::all();
        $species = Species::all();
        $types = Types::all();

        return view('designar',
            compact('centrals', 'programs', 'species', 'types'));
    }
}
