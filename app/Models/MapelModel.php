<?php

namespace App\Models;

use App\Models\GuruModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelModel extends Model
{
    use HasFactory;
    protected $table = 'mapel';
    protected $primaryKey = 'id_mapel';
    protected $fillable = [
        'nama_mapel',
        'id_guru'
    ];

    public function guru()
    {
        return $this->belongsTo(GuruModel::class, 'id_guru', 'id_guru');
    }
}
