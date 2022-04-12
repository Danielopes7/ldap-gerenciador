<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ldap\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users2 = User::find('CN=Lucas Laerte Santos da Silva,OU=Civelefazenda,OU=Defensoria,DC=dpema,DC=br');
        dd($users2);
        return view('home');
    }
}
