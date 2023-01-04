<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class showroom extends Model
{
    protected $table ="showroom_bagas";
    protected $primarykey ="id";
    protected $fillable =[
        'id','nama_mobil','pemilik_mobil','merk_mobil','tanggal_beli','deskripsi','foto_mobil','status_pembayaran',''
    ];
}
