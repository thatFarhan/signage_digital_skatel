<?php

namespace App\Models;

use App\Models\MapelModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalModel extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = [
        'id_mapel',
        'hari',
        'jam_pelajaran',
        'kelas',
        'angkatan'
    ];

    public function mapel()
    {
        return $this->belongsTo(MapelModel::class, 'id_mapel', 'id_mapel');
    }
}
