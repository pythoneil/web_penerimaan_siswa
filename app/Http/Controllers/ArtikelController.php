<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::all();
        return view('admin.peges.artikel.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.artikel.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required', 
            'slug' => 'required',
            'body' => 'required',
            'gambar' => 'required |image'
        ]);

       $data = $request->all();

       if($image = $request->file('gambar')){
        $destinationPath = 'image/';
        $imageName = $request->file('gambar')->getClientOriginalName();
        $image->move($destinationPath, $imageName);
        $data['gambar'] = $imageName;
       }

       Artikel::create($data);
        return redirect('/artikels')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        return view('admin.peges.artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        if(empty($request->file('gambar'))){
            $data = $request->all();
            
                if($image = $request->file('gambar')){
                    $destinationPath = 'image/';
                    $imageName = $request->file('gambar')->getClientOriginalName();
                    $image->move($destinationPath, $imageName);
                    $data['gambar'] = $imageName;
                    }
                else{
                    unset($data['gambar']);
                    }
    
            $artikel->update($data);
            return redirect('/artikels')->with('message', 'Data berhasil diupdate');
        }
        else{
            $data = $request->all();
            Storage::delete($artikel->gambar);
            
                if($image = $request->file('gambar')){
                    $destinationPath = 'image/';
                    $imageName = $request->file('gambar')->getClientOriginalName();
                    $image->move($destinationPath, $imageName);
                    $data['gambar'] = $imageName;
                    }
                else{
                    unset($data['gambar']);
                    }
    
            $artikel->update($data);
            return redirect('/artikels')->with('message', 'Data berhasil diupdate');
        }    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();

        return redirect('/artikels')->with('message' , 'data berhasil di hapus');
    }
}
