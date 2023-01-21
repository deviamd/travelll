<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = "transaksis";
    protected $primarykey = "id";
    protected $fillable = [

        'id', 'id_order','total_bayar','metode_pembayaran','tanggal_pembayaran',
    ];

    public function service()
    {
        return $this->hasMany(Service::class, 'id', 'id');
    }
    public function order(){
        return $this->belongsTo(Order::class, 'id_order', 'id');
    }
}
?>
