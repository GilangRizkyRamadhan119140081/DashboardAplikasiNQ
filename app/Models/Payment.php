<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan
    protected $table = 'nq_payment';

    // Primary key
    protected $primaryKey = 'id';

    // Menentukan apakah primary key bertipe increment
    public $incrementing = false;

    // Tipe primary key
    protected $keyType = 'bigint';

    // Kolom yang dapat diisi (mass-assignable)
    protected $fillable = [
        'order_id',
        'user_id',
        'status',
        'quantity',
        'price',
        'item_id',
        'item_name',
        'customer_first_name',
        'customer_email',
        'checkout_link',
        'type_payment',
        'type_payment_detail',
        'image',
        'created_at',
        'updated_at',
    ];

    // Menentukan apakah menggunakan timestamps otomatis
    public $timestamps = true;

    // Format timestamp jika ingin disesuaikan
    protected $dateFormat = 'Y-m-d H:i:s';

    // Relasi ke User (opsional, tergantung struktur aplikasi Anda)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
