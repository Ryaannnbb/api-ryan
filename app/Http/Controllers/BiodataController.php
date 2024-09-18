<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $biodata = [
        //     'nama'=>"Blitaryan Endi Pratama",
        //     'kelas'=>"XII RPL 1",
        //     'alamat'=>"Duren",
        //     'no hp'=>"085778428774",
        //     'hobi'=>"CoDinG",
        //     'moto'=>"Embrace Challenges, Achieve Greatness.",
        // ];
        $biodata = Biodata::all();
        return response()->json($biodata, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Biodata::insert([
            "nama_lengkap"=> $request->nama_lengkap,
            "nama_panggilan"=> $request->nama_panggilan,
            "tanggal_lahir" => $request->tanggal_lahir,
            "umur" => $request->umur,
            "alamat" => $request->alamat,
            "kelas" => $request->kelas,
            "no_hp" => $request->no_hp,
            "hobi" => $request->hobi,
            "moto" => $request->moto,
        ]);

        return response()->json([
            "pesan" => "Biodata berhasil ditambahkan"
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
