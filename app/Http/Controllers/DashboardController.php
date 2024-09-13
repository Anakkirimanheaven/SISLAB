<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Example data, in real life, you fetch this from the database
        $data = [
            'total_komputer' => 0,
            'komputer_rusak' => 0,
            'barang_dipinjam' => 0,
            'ruangan_dipinjam' => 0,
        ];

        return view('dashboard', compact('data'));
    }
}
