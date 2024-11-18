<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artikel extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'artikel';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'judul',
        'isi',
        'id_user',
        'image',
        'link',
        'created_at',
        'updated_at'
    ];

    // Tipe data untuk kolom yang memerlukan konversi otomatis
    protected $casts = [
        'id' => 'integer',
        'id_user' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // Relasi ke tabel user (jika ada)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
