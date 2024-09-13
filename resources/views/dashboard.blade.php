@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Dashboard</h1>
    <div class="row">
        <!-- Total Komputer -->
        <div class="col-md-3">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <h2>{{ $data['total_komputer'] }}</h2>
                    <p>Total Komputer</p>
                </div>
            </div>
        </div>

        <!-- Komputer Rusak -->
        <div class="col-md-3">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <h2>{{ $data['komputer_rusak'] }}</h2>
                    <p>Komputer Rusak</p>
                </div>
            </div>
        </div>

        <!-- Barang Dipinjam -->
        <div class="col-md-3">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">
                    <h2>{{ $data['barang_dipinjam'] }}</h2>
                    <p>Barang Dipinjam</p>
                </div>
            </div>
        </div>

        <!-- Ruangan Dipinjam -->
        <div class="col-md-3">
            <div class="card bg-purple text-white mb-4" style="background-color: #6f42c1;">
                <div class="card-body">
                    <h2>{{ $data['ruangan_dipinjam'] }}</h2>
                    <p>Ruangan Dipinjam</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
