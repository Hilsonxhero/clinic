<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use CyrildeWit\EloquentViewable\InteractsWithViews;

class Article extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    const PUBLISHED_STATUS = 'published';
    const UNPUBLISHED_STATUS = 'unpublished';

    static $statuses = [self::PUBLISHED_STATUS, self::UNPUBLISHED_STATUS];

    protected $appends  = ['banner', 'tags_data', 'tags_values', 'created_date'];

    protected $fillable = [
        'title', 'slug', 'description', 'body', 'category_id', 'media_id', 'status', 'views', 'likes',
        'short_link', 'tags'
    ];

    protected $casts = [
        'tags' => 'json'
    ];

    public static function booted()
    {
        static::saving(function ($article) {
            $article->short_link = Str::random(7);
        });
    }

    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getBannerAttribute()
    {
        if (!is_null($this->media)) return $this->media->thumb();
        return "";
    }

    public function meta()
    {
        return $this->morphOne(Meta::class, 'metable');
    }

    public function getTagsDataAttribute()
    {
        $values = array_map('array_pop', $this->tags);
        return implode(",", $values);
    }
    public function getTagsValuesAttribute()
    {
        return array_map('array_pop', $this->tags);
    }

    public function getCreatedDateAttribute()
    {
        return verta($this->attributes['created_at'])->formatDifference();
    }



    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
