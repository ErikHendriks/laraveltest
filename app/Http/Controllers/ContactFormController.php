<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactFormController extends Controller
{
    // public function index() {
    //     return view('contact');
    // }
    public function index()
    {
        $users = DB::select('select * from users where active = ?', [1]);

        return view('home', ['users' => $users]);
    }
}
