<?php

namespace App\Http\Controllers;

use App\Classes\Scraper;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $crawler = Scraper::scrap();

        // $crawler->filter('h2 > a')->each(function ($node) {
        //     print $node->text() . "\n";
        // });
        dd($crawler);

    }
}
