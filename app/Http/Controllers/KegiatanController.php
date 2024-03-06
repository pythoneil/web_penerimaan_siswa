<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Kegiatan::all();
        return view('admin.peges.kegiatan.index', compact('datas'));
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
            'judul' => 'required',
            // 'isi_paket' => 'required',
            'gambar' => 'required |image'
        ]);

        $data = $request->all();

        if ($image = $request->file('gambar')) {
            $destinationPath = 'image/';
            $imageName = $request->file('gambar')->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $data['gambar'] = $imageName;
        }

        Kegiatan::create($data);
        return redirect('/kegiatans')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.peges.kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        if (empty($request->file('gambar'))) {
            $data = $request->all();

            if ($image = $request->file('gambar')) {
                $destinationPath = 'image/';
                $imageName = $request->file('gambar')->getClientOriginalName();
                $image->move($destinationPath, $imageName);
                $data['gambar'] = $imageName;
            } else {
                unset($data['gambar']);
            }

            $kegiatan->update($data);
            return redirect('/kegiatans')->with('message', 'Data berhasil diupdate');
        } else {
            $data = $request->all();
            Storage::delete($kegiatan->gambar);

            if ($image = $request->file('gambar')) {
                $destinationPath = 'image/';
                $imageName = $request->file('gambar')->getClientOriginalName();
                $image->move($destinationPath, $imageName);
                $data['gambar'] = $imageName;
            } else {
                unset($data['gambar']);
            }

            $kegiatan->update($data);
            return redirect('/kegiatans')->with('message', 'Data berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return redirect('/kegiatans')->with('message' , 'data berhasil di hapus');
    }
}
