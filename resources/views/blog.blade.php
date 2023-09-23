
@extends('layout.main')


@section('container')

@foreach ($blog as $postingan)
<h1>{{$postingan ["title"]}}</h1>
<p>By :{{$postingan ["author"]}}</p>
<p>{{$postingan ["body"]}} </p>
    
@endforeach
    @endsection