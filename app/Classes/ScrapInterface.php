<?php

namespace app\Classes;

interface ScrapInterface
{
    public function scrapLink();

    public function scrapAndSave($url);

}
