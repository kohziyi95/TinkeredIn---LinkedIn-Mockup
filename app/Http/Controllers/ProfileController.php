<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index() {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $posts = \App\Models\Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('profile', [
            'user' => Auth::user(),
            'profile' => $profile,
            'posts' => $posts,
        ]);
    }

    public function create(){
        return view('createProfile');
    }

    public function postCreate(){
        $data = request()->validate([
            'profilepic' => 'image',
            'headerpic' => 'image'
        ]);
        $user = Auth::user();
        $profile = new Profile();
        $profile->user_id = $user->id;
        if (request()->has('description')) {
            $profile->description = request('description');
        }

        if (request()->has('profilepic')) {
            $imagePath = request('profilepic')->store('uploads', 'public');
            $profile->image = $imagePath;
        }

        if (request()->has('headerpic')) {
            $headerPath = request('headerpic')->store('uploads', 'public');
            $profile->header_image = $headerPath;
        }

        $saved = $profile->save();

        if ($saved) {
            return redirect('/profile');
        }
    }

    public function edit(){
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        return view('editProfile', [
            'profile' => $profile
        ]);
    }

    public function postEdit($id){
        $data = request()->validate([
            'description' => 'required',
            'profilepic' => ['image'],
            'headerpic' => ['image']
        ]);


        $user = Auth::user();
        $profile = Profile::find($id);

        if(empty($profile)){
            $profile = new Profile();
            $profile->user_id = $user->id;
        }

        $profile->description = request('description');

        if (request()->has('profilepic')) {
            $imagePath = request('profilepic')->store('uploads', 'public');
            $profile->image = $imagePath;
        }

        if (request()->has('headerpic')) {
            $headerPath = request('headerpic')->store('uploads', 'public');
            $profile->image = $headerPath;
        }
      ;
        $saved = $profile->save();

        if ($saved) {
            return redirect('/profile');
        }
    }

}
