<?php

namespace App\Http\Controllers\Danisman;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DanismanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:danisman');
    }

    public function index()
    {
        return view('backend.Danisman.danisman-panel');
    }
}
