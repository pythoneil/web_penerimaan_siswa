<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PpdbController extends Controller
{
    public function __construct()
    {
        // Tambahkan middleware 'auth' untuk memastikan pengguna telah login
        $this->middleware('auth');
    }

    public function showFormulir(Request $request)
    {
        $datas = Daftar::where('user_id', Auth::user()->id)->get();
        return view('ppdb.pages.form-biodata', compact('datas'));
    }
    public function dashboard()
    {
        $data = Daftar::where('user_id', Auth::user()->id)->get();
        return view('ppdb.pages.index', compact('data'));
    }

    public function createOrUpdate(Request $request, $id = null)
    {
        $existingData = Daftar::where('user_id', Auth::user()->id)->first();
        try {
            $uploadPath = 'image/';

            $fileFields = ['upload_file_kk', 'upload_file_akte', 'upload_file_kip'];

            $data = $request->except([
                '_token', 'name', 'email', 'jenis_kelamin', 'telephon', 'alamat', 'tempat_lahir', 'tanggal_lahir',
                'asal_sekolah', 'agama', 'jarak_rumah_kesekolah', 'total_nilai_rata_rata', 'nama_ayah', 'alamat_ayah',
                'nomor_telpon_ayah', 'pendidikan_terakhir_ayah', 'nama_ibu', 'alamat_ibu', 'nomor_telpon_ibu',
                'pendidikan_terakhir_ibu', 'upload_file_kk', 'upload_file_akte', 'upload_file_kip'
            ]);

            // (hapus yang tidak perlu)



            if ($id) {
                $data = $request->all();
                foreach ($fileFields as $field) {
                    if ($file = $request->file($field)) {
                        if ($id && $existingData->{$field}) {
                            Storage::delete($existingData->{$field});
                        }

                        $destinationPath = $uploadPath;
                        $imageName = $file->getClientOriginalName();
                        $file->move($destinationPath, $imageName);

                        $data[$field] = $imageName;
                    } elseif (empty($data[$field])) {
                        unset($data[$field]);
                    }
                }
                $existingData = Daftar::findOrFail($id);
                $existingData->update($data);

                return redirect('/formulir-ppdb')->with('success', 'Data berhasil disimpan');
            } else {
                foreach ($fileFields as $field) {
                    if ($file = $request->file($field)) {
                        if ($id && $existingData->{$field}) {
                            Storage::delete($existingData->{$field});
                        }

                        $destinationPath = $uploadPath;
                        $imageName = $file->getClientOriginalName();
                        $file->move($destinationPath, $imageName);

                        $data[$field] = $imageName;
                    } elseif (empty($data[$field])) {
                        unset($data[$field]);
                    }
                }
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
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    // public function detail($id)
    // {
    //     $datas = Daftar::where('id', $id)->where('user_id', Auth::id())->first();
    //     return view('website_sekolah.pages.detail-ppdb', compact('datas'));
    // }
    public function cetak_kartu()
    {
        ini_set('max_execution_time', 120);
        $datas = Daftar::where('user_id', Auth::user()->id)->get();
        $pdf = Pdf::loadView('ppdb.pages.kartu-kelulusan', ['datas' => $datas]);
        return $pdf->download('Surat Kelulusan SMPN 3 BANJARHARJO.pdf');
    }
}
