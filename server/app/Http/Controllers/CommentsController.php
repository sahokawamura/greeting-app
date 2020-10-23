<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function show($type, $comments = null)
    {
      if ($comments == null) {
        if ($type == 'morning') {
          $greeting = '朝のあいさつ'; $msg = 'おはようございます';
        } elseif ($type == 'afternoon') {
          $greeting = '昼のあいさつ'; $msg = 'こんにちは';
        } elseif ($type == 'evening') {
          $greeting = '夕方のあいさつ'; $msg = 'こんばんは';
        } elseif ($type == 'night') {
          $greeting = '夜のあいさつ'; $msg = 'おやすみ';
        } elseif ($type == 'random') {
          $notes = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
          shuffle($notes);
          foreach ($notes as $note);
          $greeting = 'ランダムなメッセージ'; $msg = $note;
        } else {
          $greeting = '表示できません';
        } 
      } else {
        if ($type == 'freeword') {
        $greeting = '自由なメッセージ'; $msg = $comments;
      } else {
        $greeting = '表示できません';
      }
      }
      return view('comments.show', ['type' => $greeting, 'comments' => $msg]);
    }
}