<?php

namespace App\Http\Controllers;
use Auth;
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
        $dn = Auth::user()->dn;
        $explode_dn = explode(',',$dn);
        array_shift($explode_dn);
        $explode_dn = implode(',', $explode_dn);
        // dd($explode_dn);
        $objects = Entry::in($explode_dn)->get();
        return view('home', ['objects' => $objects, 'request' => $request->all] );
    }
}
