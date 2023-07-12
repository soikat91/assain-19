<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{



   function getComment(Request $request){

  // return Comment::with('post')->where('id',$request->id)->get();
   // return Post::with('comments')->where('id',$request->id)->get();
   //return Comment::with('post')->get();
   // print_r($comments);
   // exit();
   // return view('componants.comments',compact('comments'));

   }
}
