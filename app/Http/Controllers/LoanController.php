<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Barang;
use App\Models\Borrower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoanController extends Controller
{
    public function loan(){
        $datas = Barang::all();
        $borrowers = Borrower::all();
        return view('admin.v_peminjaman', \compact('datas', 'borrowers'));
    }

    public function loanProcess(Request $request){
        $validator = $request->validate([
            'borrower' => 'required',
            'goods' => 'required',
            'amount' => 'required',
            'necessity' => 'required',
            'duration' => 'required',
        ]);

        $goods = Barang::find($request->goods);


        Loan::create([
            'borrower' => $request->borrower,
            'goods' => $goods->nama_barang,
            'type' => $request->type,
            'barang_id' => $request->goods,
            'amount' => $request->amount,
            'necessity' => $request->necessity,
            'duration' => $request->duration,
            'date_loan' => date('Y-m-d'),
        ]);


        $goods->update([
            'stock' => $goods->stock - $request->amount
        ]);

        return \redirect()->route('dashboard');


    }


    public function returnGoods(){
        $loans = Loan::all();
        return view('admin.v_pengembalian', \compact('loans'));
    }

    public function returnGoodsProcess(Request $request, $id){
        $loan = Loan::find($id);

        $loan->update([
            'return_goods' => 'sudah',
            'date_return' => date('Y-m-d'),
            'receiver' => Auth::user()->username
        ]);

        $goods = Barang::find($loan->barang_id);


        if ($goods) {
            # code...
            $goods->update([
                'stock' => $goods->stock + $loan->amount
            ]);
        }


        return \redirect()->route('returnGoods');
    }

    // history
    public function history(){
        $loans = Loan::all();

        return view('admin.v_riwayat_peminjaman', compact('loans'));
    }

    // print
    public function print(){
        $loans = Loan::all();

        return \view('admin.v_print_data', \compact('loans'));
    }
}
