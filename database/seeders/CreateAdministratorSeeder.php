<?php
namespace Database\Seeders;
use App\Models\Administrator; //tambahkan baris ini untuk mengaitkan dgn modelnya
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class CreateAdministratorSeeder extends Seeder
{
 /**
 * Run the database seeds.
 */
 public function run(): void
 {
 //
 $users =[
 [
 'user' =>'guru',
 'password' => bcrypt('admin123'),
 'admin_type'=>'admin',
 ],
 [
 'user' =>'siswa',
 'password' => bcrypt('guest123'),
 'admin_type'=>'guest',
 ],
 ];
 foreach ($users as $key => $val){
 Administrator::create($val);
 }
 }
}
