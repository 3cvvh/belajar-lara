@extends('layout.main')
@section('container')
<h1>category: {{ $title }} </h1>
    @foreach($post as $post)
        <h1> 
            <a href="/posts/{{ $post->slug }} ">{{ $post->judul }}</a></h1>
        <h2> {{ $post->author }} </h2>
        <p> {{ $post->sedikit }} </p>
    @endforeach
@endsection