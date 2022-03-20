@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 card">
                <div class="card-body">
                    <form action="{{ route('post.share') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="card-title h4 mt-1 fw-bold">Create Your Post</div>
                        <div class="form-group row mt-3 fw-bold">
                            <label for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="title">
                        </div>

                        <div class="form-group row mt-3 fw-bold">
                            <label for="caption">Caption</label>
                            <input class="form-control" type="text" name="caption" id="caption">
                        </div>

                        <div class="form-group row mt-3 fw-bold">
                            <label for="postpic">Post a picture</label>
                            <input type="file" name="postpic" id="postpic">
                        </div>

                        <div class="form-group row mt-4 mb-2">
                            <button type="submit" class="btn btn-primary">Post!</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection




