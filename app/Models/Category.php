<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory, SoftDeletes, Sluggable;


    protected $fillable = [
        'title',
        'description',
        'parent_id',
        'media_id',
        'status'
    ];


    const PUBLISHED_STATUS = 'published';
    const UNPUBLISHED_STATUS = 'unpublished';

    static $statuses = [self::PUBLISHED_STATUS, self::UNPUBLISHED_STATUS];


    protected $appends  = ['icon'];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('children');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }

    public function getIconAttribute()
    {
        if (!is_null($this->media)) return $this->media->thumb();

        return "";
    }

    public function meta()
    {
        return $this->morphOne(Meta::class, 'metable');
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
