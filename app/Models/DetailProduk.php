<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduk extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'produk';

    // Primary key
    protected $primaryKey = 'id';

    // Tipe primary key
    protected $keyType = 'bigint';

    // Apakah primary key menggunakan auto-increment?
    public $incrementing = false;

    // Apakah timestamps (`created_at` dan `updated_at`) digunakan?
    public $timestamps = true;

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'id',
        'kode_produk',
        'kategori',
        'nama_produk',
        'detail',
        'harga',
        'link',
        'id_user',
        'pemilik',
        'image',
        'created_at',
        'updated_at'
    ];

    // Format tanggal dan tipe data
    protected $casts = [
        'id' => 'integer',
        'id_user' => 'integer',
        'hari' => 'integer',
        'harga' => 'decimal:0',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // Relasi ke tabel Paket (opsional jika tabel `paket` ada)
    public function produk()
    {
        return $this->belongsTo(Paket::class, 'id_user', 'id');
    }
}
