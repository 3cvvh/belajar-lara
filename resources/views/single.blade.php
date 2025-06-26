@extends('layout.main')
@section('container')
    <h1> {{ $post->judul }} </h1>
    <p>By: {{ $post->User->name }}</p>
    <p>kategori: <a href="/cate/{{ $post->kategori->slug }}">{{ $post->kategori->name }}</a></p>
    <div>
{!! $post->body !!}
    </div>
@endsection