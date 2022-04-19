<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sektor extends Model
{
    use HasFactory;
    protected $table = 'sektor';
    protected $guarded = [];
    protected $fillable = [
        'jabatan',
        'sektor_pekerjaan',
    ];
    public function karyawan()
    {
        return $this->hasMany(karyawan::class);
    }
}
