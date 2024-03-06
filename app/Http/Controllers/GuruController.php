<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Guru::all();
        return view('admin.peges.guru.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.testimonials.tambah');
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
            'nama_guru' => 'required', 
            'nip' => 'required',
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

       Guru::create($data);
        return redirect('/gurus')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('admin.peges.guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
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
    
            $guru->update($data);
            return redirect('/gurus')->with('message', 'Data berhasil diupdate');
        }
        else{
            $data = $request->all();
            Storage::delete($guru->foto);
            
                if($image = $request->file('foto')){
                    $destinationPath = 'image/';
                    $imageName = $request->file('foto')->getClientOriginalName();
                    $image->move($destinationPath, $imageName);
                    $data['foto'] = $imageName;
                    }
                else{
                    unset($data['foto']);
                    }
    
            $guru->update($data);
            return redirect('/gurus')->with('message', 'Data berhasil diupdate');
        }    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect('/gurus')->with('message' , 'data berhasil di hapus');
    }
}
