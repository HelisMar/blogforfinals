@extends('layout')
@section('title', 'edit')
@section('content')

<br>

<a href="/blogs" class="btn btn-primary">Back to Blogs</a>

{{-- <form action="/edit/{{$blog->id}}" method="post"> --}}
    <form action="" method="POST">

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

@endsection
