<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function page(){
        return view('pages.blogs');
    }

    function blogsData(){
        return Post::get(); 
    }


    function details($id){

     
        $post= Post::findOrFail($id);

        $comments=Comment::where('post_id',$id)->get();
        // echo"<pre>";
        // print_r($comments);
        // exit();
        return view('pages.details',compact('post','comments'));

        

    }

    function storeComment(Request $request){

        $res =  Comment::insert([
            'post_id'=> $request->post_id,          
            'content' => $request->content
    
        ]);
     
        return  redirect()->back();
     
    }

    function getCommentData($id){

       return Comment::where('post_id',$id)->get();

    }










}
