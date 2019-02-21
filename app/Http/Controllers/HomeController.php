<?php


namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    public function super_admin()
    {

        return view('super_admin');
    }

    public function add_admin()
    {
        return view('add_admin');
    }


    public function admin()
    {
        return view('admin');

    }

    public function register_test(Request $request)
    {
        echo $request->role;

    }


}
