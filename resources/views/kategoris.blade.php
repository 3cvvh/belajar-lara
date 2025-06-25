@extends('layout.main')

@section('container')
@foreach($data as $kate)
<ul>
    <a href="/cate/{{ $kate->slug }}"><li> {{ $kate->name }} </li></a>
</ul>
@endforeach
@endsection