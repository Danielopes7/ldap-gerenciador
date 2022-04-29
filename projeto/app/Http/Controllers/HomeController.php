<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function index()
    {
        /**
         * uso a classe Entry para pegar todos os dados de uma determinada OU
         */
        $dn = Auth::user()->exploded_dn;
        $objects = Entry::in($dn)->get();
        return view('home', ['objects' => $objects] );
    }

    public function show(Request $request)
    {
        $dn = Auth::user()->exploded_dn;
        $objects = Entry::in($dn)->get();
        return json_encode($objects[$request->id]);
    }
}
