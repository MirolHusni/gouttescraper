<?php
namespace app\Classes;

use App\Classes\ScrapInterface;
use Goutte\Client;

class Malaysiakini implements ScrapInterface
{
    public function scrapLink($url = 0)
    {
        $url = 'https://www.malaysiakini.com/my/news.rss';
        // $url = 'https://www.malaysiakini.com/my/tag/pru14';
        // $url     = 'https://www.symfony.com/blog/';
        $client  = new Client;
        $crawler = $client->request('GET', $url);

        $crawler->filter('item > link')->each(function ($node) {
            print $node->text() . "<br>";
        });
        dd($crawler);

        return $crawler;
    }

    public function scrapContent()
    {
        return;
    }
}
