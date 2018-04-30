<?php
namespace app\Classes;

use Goutte\Client;

class Scraper
{
    public static function scrap()
    {
        $client  = new Client;
        $crawler = $client->request('GET', 'https://www.malaysiakini.com/news/422258');

        return $crawler;
    }
}
