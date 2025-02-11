<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//yang ditambahkan
use Illuminate\Database\Eloquent\Relations\Hasmany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Administrator extends Authenticatable
{
 use HasFactory, HasApiTokens, Notifiable;
 protected $guarded =['id_admin'];
 protected $table = 'administrator';
 public $timestamps = false;

 protected $fillable = [
 'user',
 'password',
 'admin_type',
 ];
 protected $hidden = [
 'password',
 'remember_token',
 ];
protected $enums = [
 'admin_type' => ['admin', 'guest'],
 ];

 protected $casts =[
 'password' => 'hashed',
 ];
 //relasi
 public function disiplin():HasMany
 {
 return $this->hasMany(Disiplin::class,'id_admin'.'id_admin');
 }
}
