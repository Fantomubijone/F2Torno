<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Welcome!!';
        return view('include/header', $data).
        view('home').
        view("include/footer");
    }

    public function friend1(): string
    {
        $data['title'] = 'This is Sukuna';
        return view('include/header', $data).
        view('friend1').
        view('include/footer');
    }

    public function friend2(): string
    {
        $data['title'] = 'This is Gojo';
        return view('include/header', $data).
        view('friend2').
        view('include/footer');
    }

    public function friend3(): string
    {
        $data['title'] = 'This is Yuji';
        return view('include/header', $data).
        view('friend3').
        view('include/footer');
    }
}
