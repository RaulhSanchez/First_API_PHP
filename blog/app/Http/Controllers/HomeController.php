<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        $users = DB::table("users")->get();
        return $users;
        return view('user.idex' , ["users" => $users]);
    }
}
