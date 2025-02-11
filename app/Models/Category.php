<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

// use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory ;

    protected $table = 'categories';

    protected $fillable = [

        'judul',
    ];
    public function Post ():HasMany{

        return $this->hasMany(Post::class, 'category_id');

    }
}