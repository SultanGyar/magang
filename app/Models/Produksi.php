<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Contracts\Auth\Authenticatable;

class Produksi extends Model
{
    use HasFactory;
    protected $table = 'produksi';
    protected $fillable = [
        'nama_operator',
        'proses',
        'kelompokan',
        'target_quantity',
        'target_id',
        'quantity',
        'finish_good',
        'reject',
        'keterangan',
        'tanggal',
        'operating_start_time',
        'operating_end_time',
        'operating_time',
        'down_time',
        'actual_time',
        'a_start_time',
        'a_end_time',
        'a_time',
        'b_start_time',
        'b_end_time',
        'b_time',
        'c_start_time',
        'c_end_time',
        'c_time',
        'd_start_time',
        'd_end_time',
        'd_time',
        'e_start_time',
        'e_end_time',
        'e_time',
        'f_start_time',
        'f_end_time',
        'f_time',
        'g_start_time',
        'g_end_time',
        'g_time',
        'h_start_time',
        'h_end_time',
        'h_time'
    ];

    public function fuser()
    {
        return $this->belongsTo(User::class, 'nama_operator', 'id');
    }

    public function fkelompok(){
        return $this->belongsTo(Kelompok::class, 'proses', 'proses_kelompok');
    }

    public function ftbketerangan(){
        return $this->belongsTo(TbKeterangan::class, 'keterangan', 'dataketerangan');
    }
    
}
