@extends('layouts.main')

@section('content')
    <h1>This is Single Post page</h1>
    <div>
        <div>{{$post->id}}. {{$post->title}}</div>
        <div>{{$post->content}}</div>
    </div>
    <div>
        <a href="{{route('post.index')}}" class="btn btn-outline-primary">All posts</a>
        <a href="{{route('post.edit', $post->id)}}" class="btn btn-outline-warning mx-2">Edit</a>
        <div>
            <form action="{{route('post.delete', $post->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger my-2">Delete</button>
            </form>
        </div>
    </div>
@endsection
