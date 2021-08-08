<?php


namespace EhsanDastras\CurrentsNews;


use Illuminate\Support\Facades\Http;

class Currentsnews
{
    public static function getNews()
    {
        $client=Http::get('https://api.currentsapi.services/v1/latest-news',[
            "apiKey" =>config('currentsnews.api_key')
        ]);

        return $client->json()['news'];
    }
}
