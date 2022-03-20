@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card-body">
                <form action="{{ route('profile.postEdit', ['id' => $profile->user_id]) }}" enctype="multipart/form-data" method="post" id="postEdit">
                    @csrf
                    <div class="card-title h4 mt-1 fw-bold">Update Your Profile!</div>
                    <div class="form-group row mt-3 fw-bold">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" form="postEdit" >{{ $profile->description }}</textarea>
                    </div>
                    <div class="form-group row mt-3 fw-bold">
                        <label for="profilepic">Profile Picture</label>
                        <input type="file" name="profilepic" id="profilepic" value="{{ $profile->image }}">
                    </div>
                    <div class="form-group row mt-3 fw-bold">
                        <label for="headerpic">Profile Header</label>
                        <input type="file" name="headerpic" id="headerpic" value="{{ $profile->header_image }}">
                    </div>
                    <div class="form-group row mt-4 mb-2">
                        <button class="btn btn-primary mt-3" type="submit">Update Profile</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
