<?php

namespace App\Http\Controllers;

use App\Classes\Malaysiakini;
use App\Models\Malaysiakini as MK;

class MalaysiakiniCrawlerController extends Controller
{
    //
    public function index()
    {
        $site = 'Malaysiakini';

        return view('crawl.index', compact('site'));
    }

    public function create()
    {
        $crawler = (new Malaysiakini)->scrapLink();

        flash('Malaysiakini successfully scraped!')->success();
        return redirect('malaysiakini/1');
    }

    public function show()
    {
        $site    = 'Malaysiakini';
        $reports = MK::paginate(15);

        return view('crawl.show', compact('reports', 'site'));
    }
}
