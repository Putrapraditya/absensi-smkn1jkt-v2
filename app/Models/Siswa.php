<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa'; // Nama tabel dalam database
    protected $fillable = ['NIS', 'NAMA_SISWA','role', 'KELAS', 'JURUSAN']; // Kolom yang dapat diisi

    // Definisi hubungan dengan model lain jika ada
}
