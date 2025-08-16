<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'author' => 'nullable|string',
            'year' => 'nullable|integer',
            'coverId' => 'nullable|integer',
        ]);

        $peminjaman = Peminjaman::create($validated);

        return response()->json([
            'message' => 'Buku berhasil dipinjam',
            'data' => $peminjaman
        ], 201);
    }
}
