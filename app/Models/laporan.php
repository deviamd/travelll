<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
        protected $table = "laporan";
        protected $primarykey = "id_lap";
        protected $fillable = [
            'id','id','tanggal',
        ];

        public function user()
        {
            return $this->belongsTo('App\User','id');
        }

        public function transaksi()
        {
            return $this->belongsTo('App\Transaksi','id');
       }

}
