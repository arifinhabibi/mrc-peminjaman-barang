<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function dashboard(){
        $datas = Barang::all();
        return view('admin.dashboard', compact('datas'));
    }

    public function tambahBarang(){
        return view('admin.v_tambah_barang');
    }

    public function tambahBarangProses(Request $request){
       Barang::create($request->all());
       return \redirect()->route('dashboard');
    }
    
    public function ubahBarang($id){
        $data = Barang::find($id);
        return view('admin.v_ubah_barang', compact('data'));
    }
    
    public function ubahBarangProses(Request $request, $id){
        $data = Barang::find($id);
        
        $data->update([
            'nama_barang' => $request->nama_barang,
            'stock' => $request->stock
        ]);
        
        return \redirect()->route('dashboard');
    }

    public function hapusBarang($id){
        $data = Barang::find($id);
        $data->delete();

        return \redirect()->route('dashboard');
    }
}
