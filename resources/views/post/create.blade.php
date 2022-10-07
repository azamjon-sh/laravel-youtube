@extends('layouts.main')

@section('content')
    <h1 class="mb-4">This is Posts Create page</h1>
    <div>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea type="text" name="content" class="form-control" id="content" placeholder="Content"></textarea>
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="text" name="img" class="form-control" id="img" placeholder="Image">
            </div>
            <div class="form-group">
                <label for="likes">Likes</label>
                <input type="number" name="likes" class="form-control" id="likes" placeholder="Likes">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>
    </div>
@endsection
