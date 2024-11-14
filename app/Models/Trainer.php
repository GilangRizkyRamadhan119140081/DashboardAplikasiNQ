<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'nq_tot';

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
        'user_id ',
        'trainer_name',
        'email',
        'keahlian',
        'created_at',
        'updated_at',
    ];

    // Format tanggal dan tipe data
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // Relasi ke tabel Paket (opsional jika tabel `paket` ada)
    public function produk()
    {
        return $this->belongsTo(Paket::class, 'user_id', 'id');
    }
}
