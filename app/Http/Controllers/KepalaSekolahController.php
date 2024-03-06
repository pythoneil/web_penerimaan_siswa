<?php

namespace App\Http\Controllers;

use App\Models\KepalaSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KepalaSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = KepalaSekolah::all();
        return view('admin.peges.kepala-sekolah.index',compact('datas'));
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
            'nama' => 'required', 
            'sambutan' => 'required',
            // 'isi_paket' => 'required',
            'foto' => 'required |image'
        ]);

       $data = $request->all();

       if($image = $request->file('foto')){
        $destinationPath = 'image/';
        $imageName = $request->file('foto')->getClientOriginalName();
        $image->move($destinationPath, $imageName);
        $data['foto'] = $imageName;
       }

       KepalaSekolah::create($data);
        return redirect('/kepala-sekolahs')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(KepalaSekolah $kepalaSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KepalaSekolah $kepalaSekolah)
    {
        return view('admin.peges.kepala-sekolah.edit', compact('kepalaSekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KepalaSekolah $kepalaSekolah)
    {
        if(empty($request->file('foto'))){
            $data = $request->all();
            
                if($image = $request->file('foto')){
                    $destinationPath = 'image/';
                    $imageName = $request->file('foto')->getClientOriginalName();
                    $image->move($destinationPath, $imageName);
                    $data['foto'] = $imageName;
                    }
                else{
                    unset($data['foto']);
                    }
    
            $kepalaSekolah->update($data);
            return redirect('/kepala-sekolahs')->with('message', 'Data berhasil diupdate');
        }
        else{
            $data = $request->all();
            Storage::delete($kepalaSekolah->foto);
            
                if($image = $request->file('foto')){
                    $destinationPath = 'image/';
                    $imageName = $request->file('foto')->getClientOriginalName();
                    $image->move($destinationPath, $imageName);
                    $data['foto'] = $imageName;
                    }
                else{
                    unset($data['foto']);
                    }
    
            $kepalaSekolah->update($data);
            return redirect('/kepala-sekolahs')->with('message', 'Data berhasil diupdate');
        }    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KepalaSekolah $kepalaSekolah)
    {
        $kepalaSekolah->delete();

        return redirect('/kepala-sekolahs')->with('message' , 'data berhasil di hapus');
    }
}
