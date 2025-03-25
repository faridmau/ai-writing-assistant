<?php

namespace Faridmau\AiWritingAssistant\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use HasSlug;

    protected $guarded = [];

    public function getTable(): string
    {
        return config('ai-writing-assistant.tabel_prefix') . 'categories';
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function templates()
    {
        return $this->hasMany(Template::class);
    }
}
