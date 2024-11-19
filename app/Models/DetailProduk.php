<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduk extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari konvensi Laravel
    protected $table = 'produk';

    // Tentukan primary key
    protected $primaryKey = 'id';

    // Tentukan tipe primary key jika bukan integer auto-increment
    public $incrementing = false;
    protected $keyType = 'bigint';

    // Tentukan kolom yang boleh diisi
    protected $fillable = [
        'kode_produk',
        'kategori',
        'nama_produk',
        'detail',
        'harga',
        'link',
        'id_user',
        'pemilik',
        'image',
    ];

    // Atur kolom yang akan dianggap sebagai tanggal
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Relasi ke model User
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
