<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; //tambahkan baris ini
class Disiplin extends Model
{
 use HasFactory;
 protected $guarded =['id'];
 protected $table = 'disiplin';
 public $timestamps =false;
 protected $casts =[
 'tanggal' =>'timestamp',
 ];
 //relasi
 public function administrator():BelongsTo
 {
 return $this ->belongsTo(Administrator::class,'id_admin'.'id_admin');
 }
 public function siswa():BelongsTo
 {
 return $this ->belongsTo(Siswa::class,'id_siswa'.'id_siswa');
 }
 public function sanksi():BelongsTo
 {
 return $this ->belongsTo(Sanksi::class,'id_sanksi'.'id_sanksi');
 }
}
