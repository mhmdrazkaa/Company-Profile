<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable =[

        'judul',
        'category_id',
        'konten',
        'file',
        'user_id',
    ];

    protected static function booted()
    {
    static::creating(function ($post) {
        $post->user_id = Auth::id();
    });

    }

    protected $casts = [
        'file' => 'array',
    ];

    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
