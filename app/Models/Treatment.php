<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Treatment extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    const PUBLISHED_STATUS = 'published';
    const UNPUBLISHED_STATUS = 'unpublished';

    static $statuses = [self::PUBLISHED_STATUS, self::UNPUBLISHED_STATUS];

    protected $appends  = ['banner', 'tags_data', 'tags_values'];

    protected $fillable = [
        'title', 'slug', 'description', 'body', 'category_id', 'media_id', 'status', 'views', 'likes',
        'short_link', 'tags'
    ];

    protected $casts = [
        'tags' => 'json'
    ];


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
