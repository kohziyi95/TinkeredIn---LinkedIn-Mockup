<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function create()
    {
        return view('createPost');

    }


    public function share()
    {
        $data = request()->validate([
            'title' => 'required',
            'caption' => 'required',
            'postpic' => ['required','image'],
        ]);
        $user = Auth::user();

        $post = new Post();
        $post-> id = $post-> id;
        $post-> title = request('title');
        $post-> caption = request('caption');
        $imagePath = request('postpic')->store('uploads', 'public');
        $post-> image = $imagePath;
        $post-> user_id = $user -> id;

        $saved = $post -> save();
        if ($saved) {
            return redirect('/profile');
        }
    }


    public function edit($id)
    {
        $user = Auth::user();
        $post = Post::where('id', $id)->first();
        return view('editPost', [
            'post' => $post
        ]);
    }


    public function update($id)
    {

        $user = Auth::user();

        $post = Post::find($id);

        $post-> id = $post-> id;
        $post-> title = request('title');
        $post-> caption = request('caption');

        if (request()->has('postpic')) {
            $imagePath = request('profilepic')->store('uploads', 'public');
            $post->image = $imagePath;
        }

        $saved = $post -> save();
        if ($saved) {
            return redirect('/profile');
        }
    }


    public function delete($id)
    {

        DB::table('posts')->where('id', '=', $id)->delete();
        return redirect('profile');
    }
}
