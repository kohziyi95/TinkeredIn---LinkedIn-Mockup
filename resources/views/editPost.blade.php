@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 card">
                <div class="card-body">
                    <form action="{{ route('post.update', ['id' => $post->id]) }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="card-title h4 fw-bold mt-1 ">Edit Your Post</div>
                        <div class="form-group row fw-bold mt-3">
                            <label for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ $post->title }}">
                        </div>

                        <div class="form-group fw-bold row mt-3">
                            <label for="caption">Caption</label>
                            <input class="form-control" type="text" name="caption" id="caption" value="{{ $post->caption }}">
                        </div>

                        <div class="form-group fw-bold row mt-3">
                            <label for="postpic">Post a picture</label>
                            <input type="file" name="postpic" id="postpic" value="{{ $post->image }}">
                        </div>

                        <div class="form-group row mt-4 mb-2">
                            <button type="submit" class="btn btn-primary">Update!</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection




