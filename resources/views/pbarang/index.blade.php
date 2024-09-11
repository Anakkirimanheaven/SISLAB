@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <div class="card">
                <div class="card-header">Data Peminjaman Barang
                    <a href="{{ route('pbarang.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-reponsive">
                        <table class="table" id="table-baru">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Peminjam</th>
                                    <th>Email</th>
                                    <th>Instansi</th>
                                    <th>ID Barang</th>
                                    <th>ID Ruangan</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Keterangan</th>
                                    <th>ID Kondisi</th>
                                    <th>Dokumentasi</th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                                @foreach ($pbarang as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item ->nama_peminjam}}</td>
                                    <td>{{$item ->email}}</td>
                                    <td>{{$item ->instansi}}</td>
                                    <td>{{$item ->barang->id}}</td>
                                    <td>{{$item ->ruangan->id}}</td>
                                    <td>{{$item ->tanggal_peminjaman}}</td>
                                    <td>{{$item ->keterangan}}</td>
                                    <td>{{$item ->kondisi->id}}</td>
                                    <td>{{$item ->dokumentasi}}</td>
                                    <td>
                                        <form action="{{route('pbarang.destroy',$item->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('pbarang.edit',$item->id)}}"
                                                class="btn btn-sm btn-success">
                                                Edit
                                            </a>

                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
