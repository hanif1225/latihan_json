@extends('layout.app')
@section('content')

<h1>tambah data</h1>
<br>
<br>
<a href="{{route('create')}}" class="btn btn-success" data-toggle="modal">Tambah Data Operator</a>
<br>
<br>
<table class="table table-striped table-hover">

<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama</th>
      <th scope="col">detail</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
@foreach($data2 as $hasil)
    <tr>
      <th>#</th>
      <th>#</th>
      <th>{{$hasil['detail']['berat']}}</th>

    </tr>
@endforeach
</table>


@endsection



