@extends('layout')
@section('title', 'Home page')
@section('content')

Esilehekülg
<ul>
 <div class="row row-cols-4">
    @foreach ($blogs as $blog)
        <div class="col">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title"><td scope></td><a href="./blog/{{$blog->id}}">{{$blog->title}}</a></h5>
                    <p class="card-text">{{$blog->body}}</p>

                </div>
            </div>
        </div>
    @endforeach
 </div>
</ul>

@endsection

