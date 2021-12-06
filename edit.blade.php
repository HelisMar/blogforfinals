@extends('layout')
@section('title', 'edit')
@section('content')

{{-- <br>

<a href="/blogs" class="btn btn-primary">Back to Blogs</a>

{{-- <form action="/edit/{{$blog->id}}" method="post"> --}}
   {{--}} <form action="" method="POST">

        @method('PUT')
        <div class="row">
            <div class="control-group col-12">
                <label for="title">Title</label>
                <input type="text" id="title" class="form-control" name="title" placeholder="Insert title" value="{{ $blog->title }}" required>
            </div>
            <div class="control-group col-12 mt-2">
                <label for="body">Text</label>
                <textarea id="body" class="form-control" name="body" placeholder="Insert text" rows="5" required>{{ $blog->body }}</textarea>
             </div>
        </div>
        <div class="row mt-2">
            <div class="control-group col-12 text-center">
                <button id="btn-submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>

</form>

@endsection --}}


{{-- @section('title', 'Edit Post')
@section('action', route('posts.create'))
@extends('layout')

@section('content') --}}

<h1 class="title">Edit: {{ $blog->title }}</h1>

<form method="post" action="">

    @csrf
    @method('PUT')

    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input type="text" name="title" value="{{ $blog->title }}" class="input" placeholder="Title" minlength="5" maxlength="100" required />
        </div>
    </div>

    <div class="field">
        <label class="label">Content</label>
        <div class="control">
            <textarea name="content" class="textarea" placeholder="Content" minlength="5" maxlength="2000" required rows="10">{{ $blog->body }}</textarea>
        </div>
    </div>
{{--
    <div class="field">
        <label class="label">Category</label>
        <div class="control">
            <div class="select">
                <select name="category" required>
                    <option value="" disabled selected>Select category</option>
                    <option value="html" {{ $post->category === 'html' ? 'selected' : null }}>HTML</option>
                    <option value="css" {{ $post->category === 'css' ? 'selected' : null }}>CSS</option>
                    <option value="javascript" {{ $post->category === 'javascript' ? 'selected' : null }}>JavaScript</option>
                    <option value="php" {{ $post->category === 'php' ? 'selected' : null }}>PHP</option>
                </select>
            </div>
        </div>
    </div> --}}

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link is-outlined">Update</button>
        </div>
    </div>

</form>

@endsection
