<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $fillable = ['merk','seri','spesifikasi','stok','kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
