<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;


    protected $table = "tb_inventaris";

    protected $primaryKey = "inv_id";

    protected $fillable = ['inv_id', 'inv_id_produk', 'jumlah', 'tgl_penyegaran_terakhir'];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'inv_id_produk', 'produk_id');
    }
}

