<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AirtimeController extends Controller
{
    //
    public function airtime () {

        //
        $post = User::find(Auth::user()->id);

        return view('airtime')->with('post',$post);

    }
}


//$post = Post::find($id);
//
////check for correct user
//if (auth()->user()->id !== $post->user_id) {
//    return redirect('/posts')->with('error','Unauthorized Page');
//}
//
//return view('posts.edit')->with('post', $post);