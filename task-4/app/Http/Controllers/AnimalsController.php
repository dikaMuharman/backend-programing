<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public function index()
    {
        echo "Menampilkan semua data animal";
    }

    public function store(Request $request)
    {
        echo "Nama hewan: $request->nama";
        echo "<br>";
        echo "Menambahkan hewan baru";
    }

    public function update(Request $request, $id)
    {
        echo "Nama hewan: $request->nama";
        echo "<br>";
        echo "Mengupdate data hewan id $id";
    }

    public function destroy($id)
    {
        echo "Menghapus data hewan id $id";
    }
}
