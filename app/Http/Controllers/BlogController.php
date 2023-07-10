<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function page(){
        return view('pages.blogs');
    }

    function blogsData(){
return Post::with('user')->get(); 
// //dd($posts);;
//       foreach($posts as $post){

//         echo "Post: " . $post->title . "\n";

//         foreach($post->user as $user){
//             echo "User: " . $user->name . "\n";
//         }
//       }



// $usersWithPosts = User::with('posts')->get();

// foreach ($usersWithPosts as $user) {
//     echo "User: " . $user->name . "\n";
    
//     foreach ($user->posts as $post) {
//         echo "Post: " . $post->title . "\n";
//     }
// }



    }


    function details($id){


        //return Comment::with('comments')->first();
        return Post::where('id',$id)->first();

        

    }
}
