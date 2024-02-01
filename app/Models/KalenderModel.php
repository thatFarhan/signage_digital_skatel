<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KalenderModel extends Model
{
    use HasFactory;
    protected $table = 'kalender_akademik';
    protected $primaryKey = 'id_akademik';
    protected $fillable = [
        'info_akademik',
        'tanggal_mulai',
        'tanggal_selesai'
    ];
}
