@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Edit Data Ruangan') }}</div>

                <div class="card-body">

                   <form  action="{{route('ruangan.update',$ruangan->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" >Nama Ruangan</label>
                        <input type="text" class="form-control" name="nama_ruangan" value="{{$ruangan->nama_ruangan}}" >
                    </div>
                     <div class="mb-3">
                        <label class="form-label" >Nama_PIC</label>
                        <input type="text" class="form-control" name="nama_pic" value="{{$ruangan->nama_pic}}" >
                    </div>
                     <div class="mb-3">
                        <label class="form-label" >Jumlah Komputer</label>
                        <input type="text" class="form-control" name="jml_komputer" value="{{$ruangan->jml_komputer}}" >
                    </div>
                     <div class="mb-3">
                        <label class="form-label" >Jumlah Leptop</label>
                        <input type="text" class="form-control" name="jml_leptop" value="{{$ruangan->jml_leptop}}" >
                    </div>
                     <button type="submit"class="btn btn-primary">Edit</button>
                   </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
