@extends('layout')
@section('title', 'Create')
@section('content')
<h1>New Post</h1>
<form method="POST" action="">

    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" id="title" name='title' type="text" placeholder="Insert title" required>
    </div>
    <div class="form-group">
        <label for="body">Text</label>
        <textarea class="form-control" id="body" name='body' placeholder="Insert text" required ></textarea>
    </div>
    <div class="control-group">
        <button type="submit" id="btn-submit" class="btn btn-secondary btn-md m-1">Post the post!</button>
    </div>
</form>
@endsection
