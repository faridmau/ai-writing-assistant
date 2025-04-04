<?php

namespace Faridmau\AiWritingAssistant\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Template extends Model
{
    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    protected $guarded = [];

    public function getTable(): string
    {
        return config('ai-writing-assistant.tabel_prefix') . 'templates';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
