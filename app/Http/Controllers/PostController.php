<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller

{
    public function deletePost(Post $post){
        $post->delete();
        return redirect('/');
    }

    public function editPost(Post $post, Request $req){
            $data = $req -> validate([
                'title' => 'required',
                'body' => 'required'
            ]);
    
            $data['title'] = strip_tags($data['title']);
            $data['body'] = strip_tags($data['body']);

            $post->update($data);
        return redirect('/');
    }

    /*
    `$post` var params is from the url slug in the path 
    parameter at controller
    */
    public function editPostScreen(Post $post){
        return view('edit-post', ['post' => $post]);
    }
    
    public function createPost(Request $req){
        $data = $req->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $data['title'] = strip_tags($data['title']);
        $data['body'] = strip_tags($data['body']);
        $data['user_id'] = auth()->id();
        Post::create($data);
        return redirect('/');
    }
}
