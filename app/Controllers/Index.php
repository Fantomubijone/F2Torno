<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function index(): string
    {
        return view('include/header').
        view('home').
        view("include/footer");
    }
}
