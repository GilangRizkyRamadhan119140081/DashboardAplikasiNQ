<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'fr_quote';

    protected $primaryKey = 'id';

    protected $fillable = [
        'quote',
        'from',
        'title',
        'image',
        'create_at',
        'update_at',
        'user_update',
    ];

    protected $casts = [
        'id' => 'integer',
        'create_at' => 'datetime',
        'update_at' => 'datetime',
        'user_update' => 'integer',
    ];

    public $timestamps = false;

    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';

    // Default value untuk user_update
    protected $attributes = [
        'user_update' => 0,
    ];
}

