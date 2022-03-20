@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="{{ route('profile.postCreate') }}" enctype="multipart/form-data" method="post">
                @csrf
                <p>
                    <label for="description">Description</label>
                    <br>
                    <input type="text" name="description" id="description">
                </p>
                <p class="mt-3">
                    <label for="profilepic">Profile Picture</label>
                    <br>
                    <input type="file" name="profilepic" id="profilepic">
                </p>
                <p class="mt-3">
                    <label for="headerpic">Profile Header</label>
                    <br>
                    <input type="file" name="headerpic" id="headerpic">
                </p>

                <button class="btn btn-primary mt-3" type="submit">Create Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection
