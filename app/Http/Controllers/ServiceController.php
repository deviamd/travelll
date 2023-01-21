<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::paginate(5);
        // $filterKeyword = $request->get('keyword');
        // if ($filterKeyword)
        // {
        //     $service = Service::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        // }
        return view('service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
        $model = new service;
        $model->nama_ka = $request->nama_ka;
        $model->kelas = $request->kelas;
        $model->tanggal_keberangkatan = $request->tanggal_keberangkatan;
        $model->kota_asal = $request->kota_asal;
        $model->kota_tujuan= $request->kota_tujuan;
        $model->stasiun_asal = $request->stasiun_asal;
        $model->stasiun_tujuan= $request->stasiun_tujuan;
        $validasi = Validator::make($data,[
            'nama_ka'=>'required|max:255',
            'kelas'=>'required|max:255',
            'tanggal_keberangkatan'=>'required|max:255',
            'kota_asal'=>'required|max:255',
            'kota_tujuan'=>'required|max:255',
            'stasiun_asal'=>'required|max:255',
            'stasiun_tujuan'=>'required|max:255',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('service.create')->withInput()->withErrors($validasi);
        }
        $model->save();
        //toast('berhasil di tambah', 'success');
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = service::findOrFail($id);
        return view('service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = service::findOrFail($id);
        return view('service.edit',compact('service'));
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
        $service = service::find($id);
        $data = $request->all();
        // $model->nama_ka = $request->nama_ka;
        // $model->kelas = $request->kelas;
        // $model->tanggal_keberangkatan = $request->tanggal_keberangkatan;
        // $model->kota_asal = $request->kota_asal;
        // $model->kota_tujuan= $request->kota_tujuan;
        // $model->stasiun_asal = $request->stasiun_asal;
        // $model->stasiun_tujuan= $request->stasiun_tujuan;
        $validasi = Validator::make($data,[
            'nama_ka'=>'required|max:255',
            'kelas'=>'required|max:255',
            'tanggal_keberangkatan'=>'required|max:255',
            'kota_asal'=>'required|max:255',
            'kota_tujuan'=>'required|max:255',
            'stasiun_asal'=>'required|max:255',
            'stasiun_tujuan'=>'required|max:255',
        ]);

        if($validasi->fails())
        {
            return redirect()->route('service.create',[$id])->withErrors($validasi);
        }
          $service->save();
          return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = service::findOrFail($id);
        $data->delete();
        return redirect()->route('service.index');
    }
}
