<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'master_roles';

    // Primary keys
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
        'name',
        'role',
        'created_at',
        'updated_at'
    ];

    // Format tanggal dan tipe data
    protected $casts = [
        'id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // // Relasi ke tabel Paket (opsional jika tabel `paket` ada)
    // public function produk()
    // {
    //     return $this->belongsTo(Paket::class, 'id_user', 'id');
    // }
}
