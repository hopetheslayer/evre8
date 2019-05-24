<?php

namespace App\Http\Controllers\Psikolog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PsikologController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:psikolog');
    }

    public function index()
    {
        return view('backend.Psikolog.psikolog-panel');
    }




}
