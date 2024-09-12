@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <div class="card">
                <div class="card-header">Data Barang
                    <a href="{{ route('barang.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-reponsive">
                        <table class="table" id="table-baru">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>ID Merk</th>
                                    <th>Ruangan</th>
                                    <th>ID Kondisi</th>
                                    <th>Posisi</th>
                                    <th>Spek</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                                @foreach ($barang as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item ->nama_barang}}</td>
                                    <td>{{$item ->nama_merk}}</td>
                                    <td>{{$item ->ruangan}}</td>
                                    <td>{{$item ->kondisi}}</td>
                                    <td>{{$item ->posisi}}</td>
                                    <td>{{$item ->spek}}</td>
                                    <td>
                                        <form action="{{route('barang.destroy',$item->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('barang.edit',$item->id)}}"
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
