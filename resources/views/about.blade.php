@extends('layout.main')

@section('container')
<h3>{{ $nama }}></h3>
<h4>{{$email}}</h4>

    
<img src="img/{{$image}}" alt="{{$nama}}" width='600'>

@endsection