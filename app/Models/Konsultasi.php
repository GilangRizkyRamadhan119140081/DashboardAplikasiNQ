<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'konsultasi';

    // Primary key
    protected $primaryKey = 'id';

    // Tipe primary key
    protected $keyType = 'unsignedBigInteger';

    // Auto-incrementing primary key
    public $incrementing = true;

    // Apakah timestamps (`created_at` dan `updated_at`) digunakan?
    public $timestamps = true;

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'user_id',
        'judul_konsultasi',
        'deskripsi_konsultasi',
        'tanggal_konsultasi',
        'created_at',
        'updated_at',
    ];

    // Tipe data untuk kolom yang memerlukan konversi otomatis
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'tanggal_konsultasi' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relasi ke tabel User (asumsi tabel user ada)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
