@extends('layout')
@section('title', 'Posts')
@section('content')

@foreach ($blogs as $blog )

Siin peaks paistma blogi postitused ükshaaval. Kuidas ma saan onepost tööle?

@endforeach

@endsection
