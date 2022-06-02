<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pengacara;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
  public function index()
  {
    return view('admin.jadwal.index', [
      'active'    => 'jadwal',
      'title'     => 'Dashboard',
      'jadwal' => Jadwal::all(),
    ]);
  }
  
  public function create()
  {
    return view('admin.jadwal.form', [
      'active'    => 'jadwal',
      'title'     => 'Dashboard',
      'mode'      => 'add',
      'pengacara' => Pengacara::all(),
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'pengacara_id'  => 'required',
      'hari'          => 'required',
      'jam'           => 'required',
    ]);

    Jadwal::create($request->all());

    return redirect('admin/jadwal')->with('success','Berhasil tambah jadwal.');
  }
  
  public function edit(Jadwal $jadwal)
  {
    $jadwal['active']     = 'jadwal';
    $jadwal['title']      = 'Dashboard';
    $jadwal['mode']       = 'edit';
    $jadwal['pengacara']  = Pengacara::all();

    return view('admin.jadwal.form', $jadwal);
  }
  
  public function update(Request $request, Jadwal $jadwal)
  {
    $request->validate([
      'pengacara_id'  => 'required',
      'hari'          => 'required',
      'jam'           => 'required',
    ]);

    $jadwal->update($request->all());

    return redirect('admin/jadwal')->with('success','Berhasil edit jadwal.');
  }
  
  public function destroy(Jadwal $jadwal)
  {
    $jadwal->delete();
    
    return redirect('admin/jadwal')->with('success','Berhasil hapus jadwal.');
  }
}
