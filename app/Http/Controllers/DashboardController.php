<?php

namespace App\Http\Controllers;

use App\Classes\Malaysiakini;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.index');
        $crawler = (new Malaysiakini)->scrapLink();

        dd('success');

    }
}
