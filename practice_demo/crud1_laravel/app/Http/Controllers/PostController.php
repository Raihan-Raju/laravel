<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class PostController extends Controller
{
    public function create(){
        return view('create');
    }
    public function home(){
        $homes = Post::all();
        return view('home', compact('homes'));
     
    }
    public function filestore(Request $request){

        // $imagefile = $request->image;
        // $request->image->move(public_path('images'), $imagefile);

        $post = new Post;
        $post->name = $request->name;
        $post-> description= $request->description;
        $post->image = $request->image;
         
        $post->save();
        // return Redirect::to('home');
        return redirect()->route('home')->with('success','your post has been created!');


    }
}
