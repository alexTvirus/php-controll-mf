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
        return response('xoa', 200)
                  ->header('Content-Type', 'text/event-stream')
                  ->header('Connection', 'keep-alive')
                  ->header('Cache-Control', 'no-cache');
		//$cmd = User::first();
		//return $cmd->cmd;
    }
	
	public function add(Request $request)
    {
		$cmd = new User;
		$cmd->cmd = $request->cmd;
		$cmd->save();
		return $cmd;
    }


}
