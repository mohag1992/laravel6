<?php
namespace App\Http\Controllers;

class PostsController {
  public function show1($post){
    $posts=[
      'my-first-post' => 'Hello',
      'my-second-post' => 'thisis',

    ];
    if(! array_key_exists($post, $posts) )
    {
      abort(404,'Sorry, that post was not found');
    }
    return view('post',[
      'post' => $posts[$post]
    ]);
  }

  public function show(){
    $post = DB::table('posts')->where('slug',$slug)->first();

    if(!$post){
      abort(404);
    }

    return view('post',[
      'post' => $post
    ]);
  }
}

 ?>
