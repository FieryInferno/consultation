<?php

namespace App\Http\Controllers;

use App\Models\Pengacara;
use Illuminate\Http\Request;

class PengacaraController extends Controller
{
  public function index()
  {
    return view('admin.pengacara.index', [
      'active'    => 'pengacara',
      'title'     => 'Dashboard',
      'pengacara' => Pengacara::all(),
    ]);
  }

  public function create()
  {
    return view('admin.pengacara.form', [
      'active'  => 'pengacara',
      'title'   => 'Dashboard',
      'mode'    => 'add',
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'nama'    => 'required',
      'no_telp' => 'required',
    ]);

    Pengacara::create($request->all());

    return redirect('admin/pengacara')->with('success','Berhasil tambah pengacara.');
  }
  
  public function edit(Pengacara $pengacara)
  {
    $pengacara['active']  = 'pengacara';
    $pengacara['title']   = 'Dashboard';
    $pengacara['mode']    = 'edit';

    return view('admin.pengacara.form', $pengacara);
  }
  
  public function update(Request $request, Pengacara $pengacara)
  {
    $request->validate([
      'nama'    => 'required',
      'no_telp' => 'required',
    ]);

    $pengacara->update($request->all());

    return redirect('admin/pengacara')->with('success','Berhasil edit pengacara.');
  }
  
  public function destroy(Pengacara $pengacara)
  {
    $pengacara->delete();
    
    return redirect('admin/pengacara')->with('success','Berhasil hapus pengacara.');
  }
}
