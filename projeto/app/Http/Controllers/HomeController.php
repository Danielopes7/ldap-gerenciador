<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ldap\User;
use LdapRecord\Models\ActiveDirectory\Entry;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        /**
         * uso a classe Entry para pegar todos os dados de uma determinada OU
         */
        $objects = Entry::in('OU=Supervisão Informatica,OU=Defensoria,DC=dpema,DC=br')->get();
        return view('home', ['objects' => $objects, 'request' => $request->all] );
    }
}
