<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table = 'video';

    protected $fillable = [

        'judul',
        'link',
        'description'
    ];

    //Untuk Mengubah format watchtv ke embed agar bisa dimunculkan di iframe
    public function getEmbedLinkAttribute()
    {
        return str_replace('watch?v=', 'embed/', $this->link);
    }

}
