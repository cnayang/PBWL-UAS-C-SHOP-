<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = "tb_produk";

    protected $primaryKey = "produk_id";

    protected $fillable = ['produk_id', 'produk_nama', 'produk_deskripsi', 'produk_harga', 'produk_id_kat'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'produk_id_kat', 'kat_id');
    }
}
