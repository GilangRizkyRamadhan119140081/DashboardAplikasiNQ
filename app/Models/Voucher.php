<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'nq_voucher';

    // Primary key tabel
    protected $primaryKey = 'id';

    // Tabel tidak memiliki timestamp auto
    public $timestamps = false; // Jika kamu menggunakan custom created_at/updated_at, sesuaikan ini

    // Kolom-kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'user_id',
        'user_used',
        'voucher_code',
        'voucher_expire',
        'paket_id',
        'created_at',
        'updated_at',
    ];

    // Tipe data untuk kolom yang memerlukan konversi otomatis
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'user_used' => 'integer',
        'voucher_expire' => 'date',  // Convert 'voucher_expire' menjadi objek date
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Jika kolom timestamps ingin dikendalikan secara manual, Anda dapat tentukan secara eksplisit
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
