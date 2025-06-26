@extends('layout.main')
@section('container')
<h1>user: {{ $judul }} </h1>
    @foreach($data as $post)
        <h1> 
            <a href="/posts/{{ $post->slug }}">{{ $post->judul }}</a></h1>
        <h2> {{ $post->author }} </h2>
        <p> {{ $post->sedikit }} </p>
    @endforeach
@endsection