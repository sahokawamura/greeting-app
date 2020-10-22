<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function show($type) 
    {
      if ($type == 'morning') {
        return view('comments.show', ['type' => $type = '朝のあいさつ', 'comments' => 'おはようございます']);
      } elseif ($type == 'afternoon') {
        return view('comments.show', ['type' => $type = '昼のあいさつ', 'comments' => 'こんにちは']);
      } elseif ($type == 'evening') {
        return view('comments.show', ['type' => $type = '夕方のあいさつ', 'comments' => 'こんばんは']);
      } elseif ($type == 'night') {
        return view('comments.show', ['type' => $type = '夜のあいさつ', 'comments' => 'おやすみ']);
      } elseif ($type == 'random') {
        $comments = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        shuffle($comments);
        foreach ($comments as $comment);
        return view('comments.show', ['type' => $type = 'ランダムなメッセージ', 'comments' => $comment]);
      } else {
        return view('comments.show', ['type' => $type = '表示できません']);
      }
    }

    public function showmore($type, $comments)
    {
      if ($type == 'freeword') {
        return view('comments.show', ['type' => $type = '自由なメッセージ', 'comments' => $comments]);
      }  else {
        return view('comments.show', ['type' => $type = '表示できません']);
      }
    }
}
