<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\Tweet\CreateRequest;

class CreateController extends Controller
{
    public function b(createRequest $request){
        return view('tweet.create');
    }
}
