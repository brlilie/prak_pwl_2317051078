<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';  // pastikan sesuai nama tabel di database
    protected $fillable = ['nama_kelas'];

    /**
     * Relasi: satu kelas punya banyak user
     */
    public function users()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }
}
