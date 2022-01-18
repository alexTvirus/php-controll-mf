<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\User;


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
    public function index(Request $request)
    {
		$cmd = User::first();
		return $cmd->cmd;
    }
	
	public function add(Request $request)
    {
		$cmd = new User;
		$cmd->cmd = $request->cmd;
		$cmd->save();
		return $cmd;
    }


}
