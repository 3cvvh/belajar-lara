@extends('layout.main')
@section('container')
    <h1> {{ $post->judul }} </h1>
    <p>By: {{ $post->author }}</p>
    <div>
{!! $post->body !!}
    </div>
@endsection