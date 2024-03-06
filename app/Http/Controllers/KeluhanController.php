<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Keluhan::all();
        return view('admin.peges.keluhan.index', compact('datas'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            // 'isi_paket' => 'required',
        ]);

        $data = $request->all();

        if ($image = $request->file('gambar')) {
            $destinationPath = 'image/';
            $imageName = $request->file('gambar')->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $data['gambar'] = $imageName;
        }

        Keluhan::create($data);
        return redirect('/kegiatans')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Keluhan $keluhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keluhan $keluhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Keluhan $keluhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keluhan $keluhan)
    {
        //
    }
}
