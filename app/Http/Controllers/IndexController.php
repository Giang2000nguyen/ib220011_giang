<?php

namespace App\Http\Controllers;
use App\Models\Tweet;
use Illuminate\Http\Request;
use App\Services\TweetService;


class IndexController extends Controller
{
    public function a(Request $request, TweetService $tweetService){
        $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        $tweetService = new TweetService();
        $tweets = $tweetService->getTweets();

        return view('tweet.index')
        ->with('tweets', $tweets);


    }
}