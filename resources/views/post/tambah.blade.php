@extends('layout.app')
@section('content')

<h4>Tambah</h4>
        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nama">
            </div>
            </div>

        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
            <input  class="form-control" type="text" name="umur">
            </div>
            </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">berat badan</label>
            <div class="col-sm-10">
            <input  class="form-control" type="text" name="berat">
            </div>
            </div>

        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">tinggi badan</label>
            <div class="col-sm-10">
            <input  class="form-control" type="text" name="tinggi">
            </div>
            </div>

        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Hobi</label>
            <div class="col-sm-10">
            <input  class="form-control" type="text" name="hobi">
            </div>
            </div>

            
            <button class="btn btn-success" type="submit">simpan</button>
            <a href ="{{url('/')}}" class="btn btn-primary">Batal</a>
        </form>
    </div>

    @endsection
