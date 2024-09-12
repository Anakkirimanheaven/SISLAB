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
                <div class="card-header">Data Laporan Peminjaman Barang
                    <a href="{{ route('lbarang.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-reponsive">
                        <table class="table" id="table-baru">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Peminjam Barang</th>
                                    <th>Kondisi</th>
                                    <th>Dokumentasi</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                                @foreach ($lbarang as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item ->pbarang->id}}</td>
                                    <td>{{$item ->kondisi->id}}</td>
                                    <td>{{$item ->dokumentasi}}</td>
                                    <td>{{$item ->keterangan}}</td>
                                    <td>
                                        <form action="{{route('lbarang.destroy',$item->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('lbarang.edit',$item->id)}}"
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
