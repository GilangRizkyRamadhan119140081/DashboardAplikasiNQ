<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'nq_voucher';

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
        'user_id',
        'user_used',
        'voucher_code  ',
        'voucher_expire',
        'paket_id',
        'created_at',
        'updated_at'
    ];

    // Format tanggal dan tipe data
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'user_used' => 'integer',
        'paket_id' => 'integer',
        'voucher_expire' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // Relasi ke tabel Paket (opsional jika tabel `paket` ada)
    public function produk()
    {
        return $this->belongsTo(Paket::class, 'user_id', 'id');
    }
}
