@extends('layouts.main')

@section('content')
    <h1 class="mb-4">This is Posts Create page</h1>
    <div>
        <form action="{{route('post.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                       value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea type="text" name="content" class="form-control" id="content"
                          placeholder="Content">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="text" name="img" class="form-control" id="img" placeholder="Image" value="{{$post->img}}" >
            </div>
            <div class="form-group">
                <label for="likes">Likes</label>
                <input type="number" name="likes" class="form-control" id="likes" placeholder="Likes" value="{{$post->likes}}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>
    </div>
@endsection
