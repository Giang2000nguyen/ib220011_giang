<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Services\TweetService;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


class DeleteController extends Controller
{
    public function e(Request $request, TweetService $tweetService)
    {
        $tweetId =(int) $request->route('tweetId');
        if (!$tweetService->checkownTweet($request->user()->id, $tweetId)){
            throw new AccessDeniedHttpException();
        }
        $tweets =Tweet::where('id',$tweetId)->firstOrFail();
        $tweets->delete();
        return redirect()
        ->route('tweet.index')
        ->with('feedback.success',"つぶやきを削除しました");

    }
}
