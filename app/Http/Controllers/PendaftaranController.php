<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index(Request $request)
   {
      $daftar = Daftar::paginate(10);

      return view('admin.peges.pendaftaran.index', compact('daftar'));
   }

   public function detail($id)
   {
      $daftar = Daftar::where('id', $id)->first();
      return view('admin.peges.pendaftaran.pendaftaran-detail', compact('daftar'));
   }

   public function updatestatus(Request $request, $id)
   {
      $daftar = Daftar::find($id);
      $daftar->status_data = $request->input('status_data');
      $daftar->status = $request->input('status');
      $daftar->update();
      return redirect('/data-pendaftar')->with('status', "Order Updated Successfully");
   }
}
