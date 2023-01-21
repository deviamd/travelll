<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = "orders";
    protected $primarykey = "id";
    protected $fillable = [
        'id_service','nama', 'email','kelas','jumlah_tiket','harga',
    ];
    // public function order()
    // {
    //     return $this->belongsTo('App\Order', 'id');
    // }
    public function prod()
    {
        return $this->hasMany(Transaksi::class, 'id', 'id');
    }
    public function service(){
        return $this->belongsTo(Order::class, 'id_service', 'id');
    }
}
?>
