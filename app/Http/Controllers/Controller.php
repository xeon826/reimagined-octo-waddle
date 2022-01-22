<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function places()
    {
        return view('places');
    }

    public function wp_posts()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://wordpress.org/news/wp-json/wp/v2/posts');
        $posts = json_decode($res->getBody());
        return view('wp_posts', ['posts' => $posts]);
    }
}
