<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\LogActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminpsilogController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function myTestAddToLog()
    {
        LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logActivity()
    {
        $logs = LogActivity::logActivityLists();
        return view('logActivity',compact('logs'));
    }
}
