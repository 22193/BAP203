@extends('layouts.master')

@section('content')
@foreach ($links as $links)
    <h1>{{ $links->title }}</h1>
    <a href="{{ $links->url }}">Link</a>
    <p>{{ $links->description }}</p>
@endforeach
@endsection