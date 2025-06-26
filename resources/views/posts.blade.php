@extends('layout.main')
@section('container')
    @foreach($blog as $post)
        <h1> 
            <a class="text-decoration-none text-black" href="/posts/{{ $post->slug }} ">{{ $post->judul }}</a></h1>
        <p>by <a href="/userpost/{{ $post->User->email }}">{{ $post->User->name }}</a> in  <a class="text-decoration-none text-black" href="cate/{{ $post->kategori->slug }}">{{ $post->kategori->name }}</a> </p>
        <p> {{ $post->sedikit }} </p>
    @endforeach
@endsection