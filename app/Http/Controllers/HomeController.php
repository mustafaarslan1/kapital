<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    public function index()
    {
        $response = Http::get('https://reqres.in/api/users?page=2');

        $data =  $response['data'];

        return view('home', compact('data'));
    }
}
