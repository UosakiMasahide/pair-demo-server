<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{


    public function index(Request $reqest)
    {
        dd($reqest, '簡単なAPIのテスト index');
    }

    public function store(Request $reqest)
    {
        dd($reqest, '簡単なAPIのテスト store');
    }

    public function show(Request $reqest)
    {
        dd($reqest, '簡単なAPIのテスト show');
    }

    public function update(Request $reqest)
    {
        dd($reqest, '簡単なAPIのテスト update');
    }
}
