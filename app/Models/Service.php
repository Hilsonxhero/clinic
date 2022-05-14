<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'media_id',
        'category_id',
        'title',
        'slug',
        'description',
        'status',
    ];

    protected $appends  = ['icon'];

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

    public function getIconAttribute()
    {
        if (!is_null($this->media)) return $this->media->thumb();

        return "";
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
