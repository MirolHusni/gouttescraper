<?php

use Jenssegers\Date\Date;

if (!function_exists('format_date_ymd')) {
    function format_date_ymd($date)
    {
        return date('Y-m-d', strtotime(str_replace('/', '-', $date)));
    }
}

if (!function_exists('format_date_dmy')) {
    function format_date_dmy($date)
    {
        return Date::parse($date)->format('d/m/Y');
    }
}

if (!function_exists('format_date_dfy')) {
    function format_date_dfy($date)
    {
        return Date::parse($date)->format('d F Y');
    }
}
