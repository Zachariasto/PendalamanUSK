<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; //tambahkan baris ini

class Sanksi extends Model
{
    use HasFactory;
    protected $guarded = ['id_sanksi'];
    protected $table = 'sanksi'; //proteksi tabel
    public $timestamps = false; //tidak memasukkan timestamps di tabel sanksi
    //untuk relasi eloquent
    public function disiplin():HasMany //relasi one to many meenggunakan eloquent
 {
    return $this->hasMany(Disiplin::class,'id_sanksi'.'id_sanksi');
 }
}
