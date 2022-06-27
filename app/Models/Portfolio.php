<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use HasFactory, Sluggable, SoftDeletes;


    protected $fillable = [
        'media_id',
        'category_id',
        'title',
        'slug',
        'description',
        'status',
        'tags',
        'views',
        'likes'
    ];


    protected $casts = [
        'tags' => 'json'
    ];


    protected $appends  = ['file', 'tags_data', 'tags_values', 'created_date'];

    const ACTIVE_STATUS = "active";
    const INACTIVE_STATUS = "inactive";
    static $statuses = [self::ACTIVE_STATUS, self::INACTIVE_STATUS];


    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function meta()
    {
        return $this->morphOne(Meta::class, 'metable');
    }

    public function getFileAttribute()
    {
        if (!is_null($this->media)) return $this->media->thumb();

        return "";
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
