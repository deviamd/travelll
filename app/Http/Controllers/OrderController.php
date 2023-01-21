<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\order;
use Validator;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::paginate(5);

        return view('order.index', [
            'orders' => Order::all(), ]);
        // return view('order.index', compact('order', 'service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = Service::get();
        return view('order.create', compact('order'));
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
        $model = new order;
        $model->id_service = $request->id_service;
        $model->nama= $request->nama;
        $model->email = $request->email;
        $model->kelas = $request->kelas;
        $model->jumlah_tiket = $request->jumlah_tiket;
        $model->harga = $request->harga;

        $validasi = Validator::make($data,[
            'id_service'=>'required|max:255',
            'nama'=>'required|max:255',
            'email'=>'required|max:255',
            'kelas'=>'required|max:255',
            'jumlah_tiket'=>'required|max:255',
            'harga'=>'required|max:255',


        ]);
        if($validasi->fails())
        {
            return redirect()->route('order.create')->withInput()->withErrors($validasi);
        }
        $model->save();
        //toast('berhasil di tambah', 'success');
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = order::findOrFail($id);
        return view('order.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('order.edit',compact('order', 'service'));
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
        // $model->id_service = $request->service;
        $model->nama = $request->nama;
        $model->email = $request->email;
        $model->kelas = $request->kelas;
        $model->jumlah_tiket = $request->jumlah_tiket;
        $model->harga= $request->harga;
        $model->stasiun_asal = $request->stasiun_asal;
        $model->stasiun_tujuan= $request->stasiun_tujuan;
        $validasi = Validator::make($data,[
            // 'id_service'=>'required|max:255',
            // 'id'=>'required',
            'nama'=>'required|max:255',
            'email'=>'required|max:255',
            'kelas'=>'required|max:255',
            'jumlah_tiket'=>'required|max:255',
            'harga'=>'required|max:255',
        ]);

        if($validasi->fails())
        {
            return redirect()->route('order.create',[$id])->withErrors($validasi);
        }
          $order->save();
          return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = order::findOrFail($id);
        $data->delete();
        return redirect()->route('order.index');
    }
}
?>
