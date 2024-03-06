<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Daftar extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'pendaftaran_siswa';
    protected $fillable = [
        'name',
        'email',
        'user_id',
        'jenis_kelamin',
        'telephon',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'asal_sekolah',
        'agama',
        'jarak_rumah_kesekolah',
        'total_nilai_rata_rata',
        'nama_ayah',
        'alamat_ayah',
        'nomor_telpon_ayah',
        'pendidikan_terakhir_ayah',
        'nama_ibu',
        'alamat_ibu',
        'nomor_telpon_ibu',
        'pendidikan_terakhir_ibu',
        'upload_file_kk',
        'upload_file_akte',
        'upload_file_kip',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}


