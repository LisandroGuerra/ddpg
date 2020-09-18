<?php

namespace DDPG\Http\Controllers;

use Illuminate\Http\Request;
use Adldap\Laravel\Facades\Adldap;

class LdapController extends Controller
{
        public function index()
    {
        // Finding a user:
        $user = Adldap::search()->users()->find('lisandro.pires');
        echo $user;

        // Searching for a user:
        $search = Adldap::search()->where('cpf', '=', '62839160072')->get();
        echo $search;
    }

}
