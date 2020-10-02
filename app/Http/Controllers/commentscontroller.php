<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class commentscontroller extends Controller
{
    public function index($url)
    {
        $comments = comment::where('url', base64_decode($url))
        ->whereNull('respond_to_id')
        ->paginate(3);

        return $comments;
    }

    public function store(){
        request()->validate([
            'body'=>['required'],
            'nom'=>['required'],
            'url'=>['required'],
            

        ]);

       return Comment::create([
           'respond_to_id' =>request('respond_to_id'),
            'nom'=>request('nom'),
            'url'=>request('url'),
            'body'=>request('body'),

        ])->setRelation('children', collect());
        
      
    }
}
