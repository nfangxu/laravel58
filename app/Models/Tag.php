<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;
use Fx\Slug\Contacts\FxSlug;

class Tag extends Model
{
    protected $fillable = ['name', 'slug'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        
        static::saving(function ($tag){
            $tag->slug = app(FxSlug::class)->slug($tag->name);
        });
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function users()
    {
        return $this->morphedByMany(User::class, 'taggable');
    }
}
