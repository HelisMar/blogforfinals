@extends('layout')
@section('title', 'Blogs')
@section('content')
<br>
<button type="button" class="btn btn-primary"><a href="/admin"> New post </a></button>
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
                      <td scope><a href="./blog/{{$blog->id}}">{{$blog->title}}</a></td>
                      <td>{{$blog->created_at}}</td>
                      <td>{{$blog->updated_at}}</td>
                      <td>
                          <button type="button" class="btn btn-primary"><a href="./blog/{{$blog->id}}">View</a></button>
                          <button type="button" class="btn btn-warning"><a href="./edit/{{$blog->id}}">Edit</a></button>

                            <form method="POST" action="/admin/{{$blog->id}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <div class="form-group">
                                    <input type="submit" class="btn btn-danger delete-user" value="Delete">
                                </div>
                            </form>
                        </td>
                        <td>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </table>

    </ul>
@endsection



