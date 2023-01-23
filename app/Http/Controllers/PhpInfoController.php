<?php

namespace App\Http\Controllers;

use Auth;

class PhpInfoController extends Controller
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
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 管理者権限チェック
        if (!auth()->user()->hasRole("admin")) {
            return redirect()->route('wave.home');
        }

        return view('theme::phpinfo');
    }
}
