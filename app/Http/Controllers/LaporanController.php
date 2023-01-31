<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan;
use App\Models\order;
use App\Models\transaksi;
use Validator;
use \PDF;
use App\Exports\LaporanExport;

class LaporanController extends Controller
{

    public function index()
    {
        $laporan = Transaksi::orderBy('created_at','DESC')->paginate(20);
        return view('laporan.index',compact('laporan'));
    }

    public function pdf()
    {
    	$laporan = Transaksi::paginate();

    	$pdf = PDF::loadview('laporan.pdf',compact('laporan'));
    	return $pdf->download('laporan.pdf');
    }
    // public function print()
    // {
    //     $laporan = Laporan::orderBy('created_at','DESC')->get();
    //     $pdf = PDF::loadview('laporan.print',compact('laporan'));
    //     return $pdf->stream();
    // }

}
?>

