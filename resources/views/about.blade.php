@extends('layout.main')

@section('container')

  <style>
table, th, td{

}
  img {
    display: block;
    border-radius: 50%;
    margin-left: auto;
  margin-right: auto;
  }</style>
<table style="width:100%">
    <tr >
        <td style="text-align: center"><h3>{{ $nama }}</h3></td>
        <td style="text-align: center"><h3>{{ $nama1 }}</h3></td>
        <td style="text-align: center" ><h3>{{ $nama2}}</h3></td>
        <td style="text-align: center"><h3>{{ $nama3 }}</h3></td>
    </tr>
    <tr>
        <td style="text-align: center"><h4>{{$email}} </h4></td>
        <td style="text-align: center"><h4>{{$email1}}</h4></td>
        <td style="text-align: center"><h4>{{$email2}}</h4></td>
        <td style="text-align: center"><h4>{{$email3}}</h4></td>
    </tr>
    <tr>
        <td><img src="img/{{$image}}"  alt="{{$nama}}"   width="150px" height="150px" ></td>
        <td><img src="img/{{$image1}}" alt="{{$nama1}}" width="150px" height="150px" ></td>
        <td><img src="img/{{$image2}}" alt="{{$nama2}}" width="150px" height="150px"> </td>
        <td><img src="img/{{$image3}}" alt="{{$nama3}}" width="150px" height="150px"></td>
    </tr>
</table>



@endsection
