<?php

use Illuminate\Support\Facades\Route;

use GuzzleHttp\Client;

Route::get('/', function () {



    $client = new Client([
        // Base URI is used with relative requests
        
        'base_uri' => 'https://jsonplaceholder.typicode.com',
        //'base_uri' => 'https://jsonplaceholder.typicode.com',
        //$path='../json/JSON1.json';
        // You can set any number of default request options.
        'timeout'  => 2.0,
    ]);

    $response = $client->request('GET', 'posts');

   
    $posts = json_decode( $response->getBody()->getContents() );

    return view('posts.index', compact('posts'));
});


