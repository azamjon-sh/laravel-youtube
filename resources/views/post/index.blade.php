@extends('layouts.main')

@section('content')
    <h1>This is posts page</h1>

    <div class="my-2">
        <a href="{{route('post.create')}}" class="btn btn-outline-success">New post</a>
    </div>

    <div>
        @foreach($posts as $post)
            <div><a href="{{route('post.show', $post->id)}}">{{$post->id}}. {{$post->title}}</a></div>
        @endforeach
    </div>
@endsection
