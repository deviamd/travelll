<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\transaksi;
use Validator;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::paginate(5);

        return view('transaksi.index', [
            'transaksis' => Transaksi::all(), ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = transaksi::get();
        return view('transaksi.create', compact('transaksi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $model = new transaksi;
        $model->id_orders = $request->id_orders;
        $model->total_bayar= $request->total_bayar;
        $model->metode_pembayaran = $request->metode_pembayaran;
        $model->tanggal_pembayaran = $request->tanggal_pembayaran;

        $validasi = Validator::make($data,[
            'id_orders'=>'required|max:255',
            'total_bayar'=>'required|max:255',
            'metode_pembayaran'=>'required|max:255',
            'tanggal_pembayaran'=>'required|max:255',


        ]);
        if($validasi->fails())
        {
            return redirect()->route('transaksi.create')->withInput()->withErrors($validasi);
        }
        $model->save();
        //toast('berhasil di tambah', 'success');
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = transaksi::findOrFail($id);
        return view('transaksi.show',compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit',compact('transaksi', 'order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = order::find($id);
        $data = $request->all();
        $model->id_order = $request->id_order;
        $model->total_bayar= $request->total_bayar;
        $model->metode_pembayaran = $request-metode_pembayaran;
        $model->tanggal_pembayaran = $request->tanggal_pembayaran;

        $validasi = Validator::make($data,[
            'id_order'=>'required|max:255',
            'total_bayar'=>'required|max:255',
            'metode_pembayaran'=>'required|max:255',
            'tanggal_pembayaran'=>'required|max:255',
        ]);

        if($validasi->fails())
        {
            return redirect()->route('transaksi.create',[$id])->withErrors($validasi);
        }
          $transaksi->save();
          return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = transaksi::findOrFail($id);
        $data->delete();
        return redirect()->route('transaksi.index');
    }
}
