@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card-body">
                <form action="{{ route('profile.postCreate') }}" enctype="multipart/form-data" method="post" id="createPost">
                    @csrf
                    <div class="card-title h4 mt-1 fw-bold">Complete Your Profile!</div>
                    <div class="form-group row mt-3 fw-bold">
                        <label for="description">Description</label>
                        <br>
                        <textarea name="description" id="description" form="createPost" ></textarea>
                        {{-- <input class="form-control" type="text" name="description" id="description"> --}}
                    </div>

                    <div class="form-group row mt-3 fw-bold">
                        <label for="profilepic">Profile Picture</label>
                        <br>
                        <input type="file" name="profilepic" id="profilepic">
                    </div>

                    <div class="form-group row mt-3 fw-bold">
                        <label for="headerpic">Profile Header</label>
                        <br>
                        <input type="file" name="headerpic" id="headerpic">
                    </div>

                    <div class="form-group row mt-4 mb-2">
                        <button class="btn btn-primary mt-3" type="submit">Create Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
