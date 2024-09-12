@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Peminjaman Barang
                    <a href="{{route('pbarang.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('pbarang.update')}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Peminjam</label>
                            <input type="text" class="form-control @error('nama_peminjam') is-invalid @enderror"
                                name="nama_peminjam">
                            @error('nama_peminjam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Instansi</label>
                            <input type="text" class="form-control @error('instansi') is-invalid @enderror"
                                name="instansi">
                            @error('instansi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">ID Barang</label>
                            <select class="form-control @error('id_barang') is-invalid @enderror" name="id_barang">
                                <option value="">Pilih Barang</option>
                                @foreach ($barang as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                                @endforeach
                            </select>
                            @error('id_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
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
                            <label for="">Tanggal Peminjaman</label>
                            <input type="date" class="form-control @error('tanggal_peminjaman') is-invalid @enderror"
                                name="tanggal_peminjaman">
                            @error('tanggal_peminjaman')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Keterangan</label>
                            <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                                name="keterangan">
                            @error('keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">ID Kondisi</label>
                            <select class="form-control @error('id_kondisi') is-invalid @enderror" name="id_kondisi">
                                <option value="">Pilih Ruangan</option>
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
                            <input type="text" class="form-control @error('dokumentasi') is-invalid @enderror"
                                name="dokumentasi">
                            @error('dokumentasi')
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
