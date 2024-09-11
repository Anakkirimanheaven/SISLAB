@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Merk
                    <a href="{{route('merk.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('merk.update', $merk->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Merk</label>
                            <input type="text" class="form-control @error('nama_merk') is-invalid @enderror"
                                name="nama_merk">
                            @error('nama_merk')
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
