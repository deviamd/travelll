<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table = "services";
    protected $primarykey = "id";
    protected $fillable = [
        'nama_ka', 'kelas','tanggal_keberangkatan','kota_asal','kota_tujuan','stasiun_asal','stasiun_tujuan',
    ];
    public function service()
    {
        return $this->belongsTo('App\Service', 'id');
    }
    public function prod()
    {
        return $this->hasMany(Transaksi::class, 'id', 'id');
    }

    public function order(){
        return $this->hasMany(Order::class, 'id_service', 'id');
    }
}
