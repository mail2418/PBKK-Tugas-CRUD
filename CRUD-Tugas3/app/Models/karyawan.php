<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $guarded = [];
    protected $fillable = [
        'nama_karyawan',
        'alamat_karyawan',
        'umur_karyawan',
        'agama_karyawan',
        'gender_karyawan',
        'sektor_id'
    ];
    public function sektor()
    {
        return $this->belongsTo(sektor::class);
    }
}
