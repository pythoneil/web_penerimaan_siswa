<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DaftarController extends Controller
{

    public function __construct()
    {
        // Tambahkan middleware 'auth' untuk memastikan pengguna telah login
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $datas = Daftar::where('user_id', Auth::user()->id)->get();
        return view('website_sekolah.pages.daftar', compact('datas'));
    }
    public function dashboard()
    {
        $data = Daftar::where('user_id', Auth::user()->id)->get();
        return view('website_sekolah.pages.dashboard', compact('data'));
    }

    public function createOrUpdate(Request $request)
    {

        try{
              // Periksa apakah data sudah ada
        $existingData = Daftar::where('user_id', Auth::user()->id)->first();
        $uploadPath = 'image/';

        // Handle file uploads
        $upload_file_kk = null;
        $upload_file_akte = null;
        $upload_file_kip = null;

        // Handle upload file KK
        if ($upload_file_kk = $request->file('upload_file_kk')) {
            $destinationPath = $uploadPath;
            $imageName = $upload_file_kk->getClientOriginalName();
            $upload_file_kk->move($destinationPath, $imageName);
        }

        // Handle upload file Akte
        if ($upload_file_akte = $request->file('upload_file_akte')) {
            $destinationPath = $uploadPath;
            $imageName = $upload_file_akte->getClientOriginalName();
            $upload_file_akte->move($destinationPath, $imageName);
        }

        // Handle upload file KIP
        if ($upload_file_kip = $request->file('upload_file_kip')) {
            $destinationPath = $uploadPath;
            $imageName = $upload_file_kip->getClientOriginalName();
            $upload_file_kip->move($destinationPath, $imageName);
        }

        // Jika data sudah ada, perbarui
        if ($existingData) {
            // Array untuk menyimpan informasi file
            $fileFields = ['upload_file_kk', 'upload_file_akte', 'upload_file_kip'];
        
            // Inisialisasi data dengan data permintaan
            $data = $request->all();
        
            // Loop untuk menangani file uploads
            foreach ($fileFields as $field) {
                // Periksa apakah ada file diunggah
                if ($file = $request->file($field)) {
                    // Hapus file lama jika ada
                    if ($existingData->{$field}) {
                        Storage::delete($existingData->{$field});
                    }
        
                    // Proses upload file
                    $destinationPath = 'image/';
                    $imageName = $file->getClientOriginalName();
                    $file->move($destinationPath, $imageName);
        
                    // Set nilai data yang sesuai dengan nama field
                    $data[$field] = $imageName;
                } elseif (empty($data[$field])) {
                    // Jika tidak ada file diunggah dan field kosong, unset dari data
                    unset($data[$field]);
                }
            }
        
            // Perbarui data dengan data yang telah diperbarui
            $existingData->update($data);
        
            return redirect('/formulir-ppdb')->with('success', 'Data berhasil disimpan');
        }
        else {
            // Jika data belum ada, buat baru
            Daftar::create($request->except([
                '_token', 'name', 'email', 'jenis_kelamin', 'telephon', 'alamat', 'tempat_lahir', 'tanggal_lahir',
                'asal_sekolah', 'agama', 'jarak_rumah_kesekolah', 'total_nilai_rata_rata', 'nama_ayah', 'alamat_ayah',
                'nomor_telpon_ayah', 'pendidikan_terakhir_ayah', 'nama_ibu', 'alamat_ibu', 'nomor_telpon_ibu',
                'pendidikan_terakhir_ibu', 'upload_file_kk', 'upload_file_akte', 'upload_file_kip'
            ]) + [
                'user_id' => Auth::user()->id,
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'telephon' => $request->input('telephon'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'alamat' => $request->input('alamat'),
                'tempat_lahir' => $request->input('tempat_lahir'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
                'asal_sekolah' => $request->input('asal_sekolah'),
                'agama' => $request->input('agama'),
                'jarak_rumah_kesekolah' => $request->input('jarak_rumah_kesekolah'),
                'total_nilai_rata_rata' => $request->input('total_nilai_rata_rata'),
                'nama_ayah' => $request->input('nama_ayah'),
                'alamat_ayah' => $request->input('alamat_ayah'),
                'nomor_telpon_ayah' => $request->input('nomor_telpon_ayah'),
                'pendidikan_terakhir_ayah' => $request->input('pendidikan_terakhir_ayah'),
                'nama_ibu' => $request->input('nama_ibu'),
                'alamat_ibu' => $request->input('alamat_ibu'),
                'nomor_telpon_ibu' => $request->input('nomor_telpon_ibu'),
                'pendidikan_terakhir_ibu' => $request->input('pendidikan_terakhir_ibu'),
                'upload_file_kk' => $imageName,
                'upload_file_akte' => $imageName,
                'upload_file_kip' => $imageName,
            ]);
            return redirect('/dashboard-ppdb-siswa')->with('success', 'Data berhasil disimpan');
        }
        } catch(\Exception $e){
              // Tangkap dan tampilkan kesalahan
          dd($e->getMessage());
        }
      
    }
    //     // Proses upload file
    //     $uploadPath = 'images';

    //     // Upload file dan mendapatkan nama asli sekaligus
    //     $upload_file_kk = $request->file('upload_file_kk')->storeAs($uploadPath, $request->file('upload_file_kk')->getClientOriginalName());
    //     $upload_file_akte = $request->file('upload_file_akte')->storeAs($uploadPath, $request->file('upload_file_akte')->getClientOriginalName());
    //     $upload_file_kip = $request->file('upload_file_kip')->storeAs($uploadPath, $request->file('upload_file_kip')->getClientOriginalName());

    //     // Check if data already exists
    //     $existingData = Daftar::where('user_id', Auth::user()->id)->first();
    //     if ($existingData) {
    //         # code...
    //     } else {
    //         # code...
    //     }

    //     // Simpan data ke database menggunakan metode create
    //     $student = Daftar::create([
    //         'name' => $request->input('name'),
    //         'user_id' => Auth::user()->id,
    //         'email' => $request->input('email'),
    //         'jenis_kelamin' => $request->input('jenis_kelamin'),
    //         'telephon' => $request->input('telephon'),
    //         'alamat' => $request->input('alamat'),
    //         'tempat_lahir' => $request->input('tempat_lahir'),
    //         'tanggal_lahir' => $request->input('tanggal_lahir'),
    //         'asal_sekolah' => $request->input('asal_sekolah'),
    //         'agama' => $request->input('agama'),
    //         'jarak_rumah_kesekolah' => $request->input('jarak_rumah_kesekolah'),
    //         'total_nilai_rata_rata' => $request->input('total_nilai_rata_rata'),
    //         'nama_ayah' => $request->input('nama_ayah'),
    //         'alamat_ayah' => $request->input('alamat_ayah'),
    //         'nomor_telpon_ayah' => $request->input('nomor_telpon_ayah'),
    //         'pendidikan_terakhir_ayah' => $request->input('pendidikan_terakhir_ayah'),
    //         'nama_ibu' => $request->input('nama_ibu'),
    //         'alamat_ibu' => $request->input('alamat_ibu'),
    //         'nomor_telpon_ibu' => $request->input('nomor_telpon_ibu'),
    //         'pendidikan_terakhir_ibu' => $request->input('pendidikan_terakhir_ibu'),
    //         'upload_file_kk' => $upload_file_kk,
    //         'upload_file_akte' => $upload_file_akte,
    //         'upload_file_kip' =>   $upload_file_kip,
    //     ]);

    //     return redirect('/dashboard-ppdb-siswa')->with('success', 'Data berhasil disimpan');
    // }


    public function detail($id)
    {
        $datas = Daftar::where('id', $id)->where('user_id', Auth::id())->first();
        return view('website_sekolah.pages.detail-ppdb', compact('datas'));
    }

    // public function update(Request $request, $id) {
    //     $datas = Daftar::where('user_id', Auth::user()->id)->get();

    //      // Proses upload file
    // $uploadPath = 'images';
    // $upload_file_kk = $datas->upload_file_kk;
    // $upload_file_akte = $datas->upload_file_akte;
    // $upload_file_kip = $datas->upload_file_kip;

    // if(empty($request->hasFile('upload_file_kk','upload_file_akte','upload_file_kip'))){
    //     $upload_file_kk = $request->file('upload_file_kk')->storeAs($uploadPath, $request->file('upload_file_kk')->getClientOriginalName());
    //     $upload_file_akte = $request->file('upload_file_akte')->storeAs($uploadPath, $request->file('upload_file_akte')->getClientOriginalName());
    //     $upload_file_kip = $request->file('upload_file_kip')->storeAs($uploadPath, $request->file('upload_file_kip')->getClientOriginalName());
    //      // Update data
    // $datas->update([
    //     'name' => $request->input('name'),
    //     'email' => $request->input('email'),
    //     'jenis_kelamin' => $request->input('jenis_kelamin'),
    //     'telephon' => $request->input('telephon'),
    //     'alamat' => $request->input('alamat'),
    //     'tempat_lahir' => $request->input('tempat_lahir'),
    //     'tanggal_lahir' => $request->input('tanggal_lahir'),
    //     'asal_sekolah' => $request->input('asal_sekolah'),
    //     'agama' => $request->input('agama'),
    //     'jarak_rumah_kesekolah' => $request->input('jarak_rumah_kesekolah'),
    //     'total_nilai_rata_rata' => $request->input('total_nilai_rata_rata'),
    //     'nama_ayah' => $request->input('nama_ayah'),
    //     'alamat_ayah' => $request->input('alamat_ayah'),
    //     'nomor_telpon_ayah' => $request->input('nomor_telpon_ayah'),
    //     'pendidikan_terakhir_ayah' => $request->input('pendidikan_terakhir_ayah'),
    //     'nama_ibu' => $request->input('nama_ibu'),
    //     'alamat_ibu' => $request->input('alamat_ibu'),
    //     'nomor_telpon_ibu' => $request->input('nomor_telpon_ibu'),
    //     'pendidikan_terakhir_ibu' => $request->input('pendidikan_terakhir_ibu'),
    //     'upload_file_kk' => $upload_file_kk,
    //     'upload_file_akte' => $upload_file_akte,
    //     'upload_file_kip' => $upload_file_kip,
    // ]);
    //  // Redirect kembali dengan pesan sukses
    //  return redirect('/dashboard-ppdb-siswa')->with('success', 'Data berhasil diperbarui');
    // }else{
    //     if ($request->hasFile('upload_file_kk')) {
    //         Storage::delete($upload_file_kk);
    //         $upload_file_kk = $request->file('upload_file_kk')->storeAs($uploadPath, $request->file('upload_file_kk')->getClientOriginalName());
    //     }

    //     if ($request->hasFile('upload_file_akte')) {
    //         Storage::delete($upload_file_akte);
    //         $upload_file_akte = $request->file('upload_file_akte')->storeAs($uploadPath, $request->file('upload_file_akte')->getClientOriginalName());
    //     }

    //     if ($request->hasFile('upload_file_kip')) {
    //         Storage::delete($upload_file_kip);
    //         $upload_file_kip = $request->file('upload_file_kip')->storeAs($uploadPath, $request->file('upload_file_kip')->getClientOriginalName());
    //     }
    //      // Redirect kembali dengan pesan sukses
    // return redirect('/dashboard-ppdb-siswa')->with('success', 'Data berhasil diperbarui');
    // }

}
