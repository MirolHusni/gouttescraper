<?php
namespace app\Classes;

use App\Classes\ScrapInterface;
use App\Models\Malaysiakini as MK;
use Goutte\Client;

class Malaysiakini implements ScrapInterface
{
    public function scrapLink($url = 0)
    {
        $crawler = (new Client)->request('GET', config('app.malaysiakini', 'https://www.malaysiakini.com/my/news.rss'));

        $crawler->filter('item > link')->each(function ($node) {
            $this->scrapAndSave($node->text());
        });
    }

    public function scrapAndSave($url)
    {
        $crawler = (new Client)->request('GET', $url);

        MK::updateOrCreate(
            ['url' => $url],
            [
                'title'          => $crawler->filter('title')->text(),
                'content'        => $crawler->filter('p')->eq(1)->parents()->text(),
                'url'            => $url,
                'date_published' => $crawler->filter('time')->text(),
            ]);
    }
}
