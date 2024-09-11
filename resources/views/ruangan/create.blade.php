@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Add Data Brand') }}</div>

                <div class="card-body">

                   <form action="{{route('ruangan.store')}}" method="POST">
                     @csrf
                    <div class="mb-3">
                        <label class="form-label" >Nama ruangan</label>
                        <input type="text" class="form-control" name="nama_ruangan">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Nama PIC</label>
                        <input type="text" class="form-control" name="nama_pic">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Jumlah komputer</label>
                        <input type="text" class="form-control" name="jml_komputer">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Jumlah leptop</label>
                        <input type="text" class="form-control" name="jml_leptop">
                    </div>
                    <button type="submit"class="btn btn-primary">save</button>
                   </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
