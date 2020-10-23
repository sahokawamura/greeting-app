<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function show($type) 
    {
      $greeting = ['朝のあいさつ', '昼のあいさつ','夕方のあいさつ', '夜のあいさつ', 'ランダムなメッセージ','表示できません'];
      $comments = ['おはようございます', 'こんにちは', 'こんばんは', 'おやすみ'];

      if ($type == 'morning') {
        return view('comments.show', ['type' => $greeting[0], 'comments' => $comments[0]]);
      } elseif ($type == 'afternoon') {
        return view('comments.show', ['type' => $greeting[1], 'comments' => $comments[1]]);
      } elseif ($type == 'evening') {
        return view('comments.show', ['type' => $greeting[2], 'comments' => $comments[2]]);
      } elseif ($type == 'night') {
        return view('comments.show', ['type' => $greeting[3], 'comments' => $comments[3]]);
      } elseif ($type == 'random') {
        $notes = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        shuffle($notes);
        foreach ($notes as $note);
        return view('comments.show', ['type' => $greeting[4],'comments' => $note]);
      } else {
        return view('comments.show', ['type' => $greeting[5]]);
      }
    }

    public function freeword($type, $comments)
    {
      if ($type == 'freeword') {
        return view('comments.show', ['type' => '自由なメッセージ', 'comments' => $comments]);
      }  
    }
} 