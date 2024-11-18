<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'fr_quote';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'quote',
        'from',
        'title',
        'image',
        'create_at',
        'update_at',
        'user_update',
    ];

    // Tipe data untuk kolom yang memerlukan konversi otomatis
    protected $casts = [
        'id' => 'integer',
        'create_at' => 'datetime',
        'update_at' => 'datetime',
        'user_update' => 'integer',
    ];

    // Pastikan kita menggunakan timestamp yang benar
    public $timestamps = false;

    // Jika Anda ingin menggunakan nama kolom create_at dan update_at, maka:
    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';
}
