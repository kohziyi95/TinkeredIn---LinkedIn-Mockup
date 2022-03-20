@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row position-relative">
        <div class=" col-lg-3 text-center me-2 me-lg-3 p-0" >
            <div class="card p-3" style="min-width:250px">
                <div class="image-stack justify-content-center" >
                    <div class=" image-stack_item-bottom" >
                        @if (!empty($profile->header_image))
                        <img class="w-100 h-75" src="/storage/{{ $profile->header_image }}">
                        @else
                        <img class="w-100 h-75" src="{{ url('/images/defaultbg.jpg') }}">
                        @endif
                    </div>

                    <div class=" image-stack_item-top">
                        @if (empty($profile->image))
                            <img class="rounded-circle " width="100"
                                src="{{ url('/images/businessman.png') }}">
                        @else
                            <img class="rounded-circle border border-light border-2"
                                width="100" src="/storage/{{$profile->image}}">
                        @endif
                    </div>
                </div>

                <div class="p-3 pb-5">
                    <h3 class="mt-3"><strong style="text-transform:capitalize">
                        {{ $user->name }}</strong></h3>


                    @if ((empty($profile->description)) Or (empty($profile->image)))
                        <div class="pt-3"><a href="/profile/edit">
                            Complete your profile</a></div>
                    @endif

                    @if (!empty($profile->description))
                        <hr>
                        <div class="pt-3">{{ $profile->description}}</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-5 mt-3 mt-lg-0 ms-lg-3 me-lg-3 p-0 text-center">

                <div class="card w-100">
                    <div class="card-body">
                        <a class="btn btn-outline-primary rounded-pill w-75
                            p-2 mt-2 mb-2 ms-auto me-auto"
                            href="{{ route('post.create') }}">
                            Create A New Post</a>
                    </div>
                </div>
            @foreach ($posts as $post)
                <div class="card w-100 mt-3 p-3">
                    <div class="card-title fw-bold mt-1">{{ $post->title}}</div>
                    <div class="card-text mt-2 text-start">{{ $post->caption}}</div>
                    <div><img src="/storage/{{$post->image}}" class="w-100 mt-3"></div>
                    <div class="mt-3">
                        <a href="{{ route('post.edit' ,['id' => $post->id]) }}"
                            class="m-2 btn btn-outline-secondary w-30"
                            style="min-width:100px">Edit post</a>
                        <a href="{{ route('post.delete' ,['id' => $post->id]) }}"
                            class="m-2 btn btn-outline-secondary w-30"
                            style="min-width:100px">Delete post</a>
                    </div>
                    <div class="mt-2 card-text text-muted">Posted on {{ $post-> created_at }}</div>


                </div>
            @endforeach

        </div>

        {{-- <div class="col-md-3 mb-5 mt-3 mt-md-0 ms-md-3 me-md-3 p-0 text-center">
        </div> --}}
    </div>
</div>
@endsection


