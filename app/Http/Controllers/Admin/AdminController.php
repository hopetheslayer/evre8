<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
        //panel
    public function index()
    {
        return view('backend.Admin.admin-panel');
    }


}
