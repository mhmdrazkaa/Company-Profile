<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pegawai extends Model
{
    protected $table = 'pegawais';

    protected $fillable =[

        'nama_lengkap',
        'jenis_kelamin',
        'tgl_lahir',
        'tmpt_lahir',
        'no_telp',
        'email',
        'jabatan',
        'foto'
    ];
}
