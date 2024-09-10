@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Barang
                    <a href="{{route('barang.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('barang.store')}}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Barang</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                name="nama_barang">
                            @error('nama_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">ID Merk</label>
                            <input type="text" class="form-control @error('id_merk') is-invalid @enderror"
                                name="id_merk">
                            @error('id_merk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="dropdown">
                            <label for="ruangan">Ruangan</label>
                            <select class="form-control" name="ruangan">
                                <option value=""></option>
                                <option value="lab2.1">Lab 2.1</option>
                                <option value="lab2.2">Lab 2.2</option>
                                <option value="lab2.3">Lab 2.3</option>
                                <option value="lab2.4">Lab 2.4</option>
                                <option value="lab3.1">Lab 3.1</option>
                                <option value="lab3.2">Lab 3.2</option>
                                <option value="lab3.3">Lab 3.3</option>
                                <option value="lab3.4">Lab 3.4</option>
                                <option value="lab3.5">Lab 3.5</option>
                                <option value="lab3.6">Lab 3.6</option>
                                <option value="lab3.7">Lab 3.7</option>
                                <option value="lab4.1">Lab 4.1</option>
                                <option value="lab4.2">Lab 4.2</option>
                                <option value="lab4.3">Lab 4.3</option>
                                <option value="lab4.4">Lab 4.4</option>
                                <option value="lab4.5">Lab 4.5</option>
                            </select>
                            @error('ruangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">ID Kondisi</label>
                            <input type="text" class="form-control @error('id_kondisi') is-invalid @enderror"
                                name="id_kondisi">
                            @error('id_kondisi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Posisi</label>
                            <input type="text" class="form-control @error('posisi') is-invalid @enderror"
                                name="posisi">
                            @error('posisi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Spek</label>
                            <input type="text" class="form-control @error('spek') is-invalid @enderror"
                                name="spek">
                            @error('spek')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
