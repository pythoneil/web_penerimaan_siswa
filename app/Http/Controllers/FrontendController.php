<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Guru;
use App\Models\Kegiatan;
use App\Models\Keluhan;
use App\Models\KepalaSekolah;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gurus = Guru::all();
        $kepalaSekolah = KepalaSekolah::all();
        $artikels = Artikel::paginate(3);
       
        return view('website_sekolah2.pages.home', compact('gurus', 'artikels','kepalaSekolah'));
    }
    public function about()
    {
        return view('website_sekolah2.pages.profile-sekolah');
    }
    public function profile_guru()
    {
        $gurus = Guru::all();
        return view('website_sekolah2.pages.guru', compact('gurus'));
    }
    public function galery_kegiatan()
    {
        $kegiatans = Kegiatan::all();
        return view('website_sekolah2.pages.galery-kegiatan', compact('kegiatans'));
    }
    public function prestasi()
    {
        $artikels = Artikel::paginate(6);
        return view('website_sekolah2.pages.prestasi',compact('artikels'));
    }
    public function prestasi_detail($id)
    {   
        $artikels = Artikel::paginate(5);
        $artikel =  Artikel::where('id', $id)->first();
        $formattedDate = date("d-m-Y", strtotime($artikel->created_at));
        return view('website_sekolah2.pages.prestasi-detail',compact('artikels', 'artikel','formattedDate'));
    }
    public function kontak()
    {
        return view('website_sekolah2.pages.kontak');
    }

    public function create(Request $request)
    {
        // Validasi input form
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Simpan data ke database
        Keluhan::create($request->all());

      

        // Setelah berhasil, redirect dengan pesan sukses
        return redirect('/')->with('message', 'Message sent successfully!');
    }
    public function create_kontak_2(Request $request)
    {
        // Validasi input form
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Simpan data ke database
        Keluhan::create($request->all());

        

        // Setelah berhasil, redirect dengan pesan sukses
        return redirect('/kontak')->with('message', 'Message sent successfully!');
    }
}
