@extends('layout')
@section('title', 'Posts')
@section('content')

@foreach ($blogs as $blog )

Siin peaks paistma blogi postitused ükshaaval

@endforeach

@endsection
