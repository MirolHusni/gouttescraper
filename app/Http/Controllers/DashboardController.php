<?php

namespace App\Http\Controllers;

use App\Classes\Malaysiakini;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $crawler = (new Malaysiakini)->scrapLink();

        dd($crawler);

    }
}
