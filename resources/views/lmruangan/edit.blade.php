@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Laporan Maintenance Ruangan
                    <a href="{{route('lmruangan.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('lmruangan.update', $lmruangan->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-2">
                            <label for="">Laporan Maintenance Ruangan</label>
                            <input type="text" class="form-control @error('id_mruangan') is-invalid @enderror"
                                name="id_mruangan">
                            @error('id_mruangan')
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
