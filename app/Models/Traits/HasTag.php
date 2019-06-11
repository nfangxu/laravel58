<?php

namespace App\Models\Traits;

use App\Models\Tag;

trait HasTag
{
	public function tags()
	{
		return $this->morphToMany(Tag::class, 'taggable');
	}
}