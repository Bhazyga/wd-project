@extends('layout.main')

@section('container')
<table>
    <tr>
        <td><h3>{{ $nama }}</h3></td>
        <td><h3>{{ $nama1 }}</h3></td>
        <td><h3>{{ $nama2}}</h3></td>
        <td><h3>{{ $nama3 }}</h3></td>
    </tr>
    <tr>
        <td><h4>{{$email}} </h4></td>
        <td><h4>{{$email1}}</h4></td>
        <td><h4>{{$email2}}</h4></td>
        <td><h4>{{$email3}}</h4></td>
    </tr>
    <tr>
        <td><img src="img/{{$image}}" alt="{{$nama}}" width=75%'></td>
        <td><img src="img/{{$image1}}" alt="{{$nama1}}" width='75%'></td>
        <td><img src="img/{{$image2}}" alt="{{$nama2}}" width='75%'></td>
        <td><img src="img/{{$image3}}" alt="{{$nama3}}" width='75%'></td>
    </tr>
</table>



@endsection
