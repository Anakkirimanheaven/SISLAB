@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Maintenance Ruangan
                    <a href="{{route('mruangan.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('mruangan.store')}}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="">ID Ruangan</label>
                            <select class="form-control @error('id_ruangan') is-invalid @enderror" name="id_ruangan">
                                <option value="">Pilih Ruangan</option>
                                @foreach ($ruangan as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_ruangan }}</option>
                                @endforeach
                            </select>
                            @error('id_ruangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Jenis Perbaikan</label>
                            <input type="text" class="form-control @error('jenis_perbaikan') is-invalid @enderror"
                                name="jenis_perbaikan">
                            @error('jenis_perbaikan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Waktu Pengerjaan</label>
                            <input type="text" class="form-control @error('waktu_pengerjaan') is-invalid @enderror"
                                name="waktu_pengerjaan">
                            @error('waktu_pengerjaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">ID Kondisi</label>
                            <select class="form-control @error('kondisi') is-invalid @enderror" name="kondisi">
                                <option value="">Pilih Kondisi</option>
                                @foreach ($kondisi as $data)
                                    <option value="{{ $data->id }}">{{ $data->kondisi }}</option>
                                @endforeach
                            </select>
                            @error('kondisi')
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
