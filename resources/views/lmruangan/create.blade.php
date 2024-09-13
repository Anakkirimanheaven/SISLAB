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
                    <form action="{{route('lmruangan.store')}}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="">Laporan Maintenance Ruangan</label>
                            <select class="form-control @error('id_mruangan') is-invalid @enderror" name="id_mruangan">
                                <option value="">Pilih Maintenance Ruangan</option>
                                @foreach ($mruangan as $data)
                                    <option value="{{ $data->id }}">{{ $data->id }}</option>
                                @endforeach
                            </select>
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
