@extends('layout')
@section('title', 'Home page')
@section('content')

<button type="button" class="btn btn-primary"><a href="/newBlog">New post</a></button>
    <ul>
        <table class="table table-striped">
            <table class="table">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th scope="col">Actions</th>
                  </tr>
                <tbody>
                    @foreach ($blogs as $blog )
                    <tr>
                      <th scope="row">{{$blog->id}}</th>
                      <td scope><a href="/blog">{{$blog->title}}</a></td>
                      <td>{{$blog->created_at}}</td>
                      <td>{{$blog->updated_at}}</td>
                      <td>
                          <button type="button" class="btn btn-primary"><a href="/blog">View</a></button>
                          <button type="button" class="btn btn-warning"><a href="/editBlog">Edit</a></button>
                          <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </table>

    </ul>
@endsection



