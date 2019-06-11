<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Fx\Slug\Contacts\FxSlug;
use App\Models\Traits\HasTag;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasTag;

    protected $fillable = ['slug', 'title', 'content', 'is_published'];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($post) {
            $post->slug = app(FxSlug::class)->slug($post->title);
        });
    }

    public function scopeGuest(Builder $builder)
    {
        return $builder->latest('updated_at')->whereIsPublished(true);
    }
}
