<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPaket extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'detail_paket';

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
        'id_paket',
        'kode_paket',
        'hari',
        'harga',
        'link',
        'deskripsi1',
        'deskripsi2',
        'deskripsi3',
        'deskripsi4',
        'deskripsi5',
        'deskripsi6',
        'deskripsi7',
        'created_at',
        'updated_at'
    ];

    // Format tanggal dan tipe data
    protected $casts = [
        'id' => 'integer',
        'id_paket' => 'integer',
        'hari' => 'integer',
        'harga' => 'decimal:0',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // Relasi ke tabel Paket (opsional jika tabel `paket` ada)
    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket', 'id');
    }
}
