<?php

function localUrl($url) {
    return sprintf("/%s/%s", app()->getLocale(), ltrim($url, '/'));
}

function transUrl($url) {
    $url = str_start($url, '/');
    if(starts_with($url, ['/en/', '/zh/'])) {
        $url = mb_substr($url, 4);
    }


    if(app()->getLocale() === 'en') {
        return '/zh/' . $url;
    }

    return '/en/' . $url;
}