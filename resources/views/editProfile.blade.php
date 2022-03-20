@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="{{ route('profile.postEdit' , ['id' => $profile->id]) }}" enctype="multipart/form-data" method="post" id="postEdit">
                @csrf
                <p>
                    <label for="description">Description</label>
                    <br>
                    <textarea name="description" id="description" form="postEdit" >{{ $profile->description }}</textarea>
                </p>
                <p class="mt-3">
                    <label for="profilepic">Profile Picture</label>
                    <br>
                    <input type="file" name="profilepic" id="profilepic" value="{{ $profile->image }}">
                </p>
                <p class="mt-3">
                    <label for="headerpic">Profile Header</label>
                    <br>
                    <input type="file" name="headerpic" id="headerpic" value="{{ $profile->header_image }}">
                </p>

                <button class="btn btn-primary mt-3" type="submit">Update Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection
