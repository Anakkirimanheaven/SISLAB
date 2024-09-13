@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Laporan Barang
                    <a href="{{route('lbarang.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('lbarang.update', $lbarang->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-2">
                            <label for="">ID Peminjam Barang</label>
                            <select class="form-control @error('id_pbarang') is-invalid @enderror" name="id_pbarang">
                                <option value="">Pilih ID</option>
                                @foreach ($pbarang as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_peminjam }}</option>
                                @endforeach
                            </select>
                            @error('id_pbarang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">ID Kondisi</label>
                            <select class="form-control @error('id_kondisi') is-invalid @enderror" name="id_kondisi">
                                <option value="">Pilih Kondisi</option>
                                @foreach ($kondisi as $data)
                                    <option value="{{ $data->id }}">{{ $data->kondisi }}</option>
                                @endforeach
                            </select>
                            @error('id_kondisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Dokumentasi</label>
                            <input type="file" name="dokumentasi"
                                class="form-control @error('dokumentasi') is-invalid @enderror">
                            @error('dokumentasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Keterangan</label>
                            <input type="text" name="keterangan"
                                class="form-control @error('keterangan') is-invalid @enderror">
                            @error('keterangan')
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
