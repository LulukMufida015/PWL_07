<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquentuse
use App\Models\Kelas;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table="mahasiswa"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false; 
    protected  $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey
    protected $fillable = [
        'Nim',
        'Nama',
        'Kelas_Id',
        'Jurusan',
        'No_Handphone',
        'Email',
        'Tanggal_Lahir',
        ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
