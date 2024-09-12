@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Brand') }}</div>

                <div class="card-body">
                    <a href="{{route('ruangan.create')}}"class="btn btn-primary" style="float: right">Add Data</a>

                    <table class="table caption-top">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">Nama ruangan</th>
                                <th scope="col">Nama PIC</th>
                                <th scope="col">Jumlah komputer</th>
                                <th scope="col">Jumlah laptop</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no =1;
                            @endphp
                            @foreach ( $ruangan as $data )
                             <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$data->nama_ruangan}}</td>
                                <td>{{$data->nama_pic}}</td>
                                <td>{{$data->jml_komputer}}</td>
                                <td>{{$data->jml_leptop}}</td>
                                <form action="{{route('ruangan.destroy',$data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <td>
                                   <a href="{{route('ruangan.edit',$data->id)}}"><button type="button" class="btn btn-sm btn-outline-success">Edit</button></a>
                                   <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </td>
                                </form>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
