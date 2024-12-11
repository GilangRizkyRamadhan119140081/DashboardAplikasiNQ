<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPaket extends Model
{
    use HasFactory;

    protected $table = 'master_paket';

    protected $guarded = ['id'];

    public $timestamps = true;

}
