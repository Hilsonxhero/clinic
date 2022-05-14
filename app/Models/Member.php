<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory, SoftDeletes, Sluggable;


    const ACTIVE_STATUS = "active";
    const INACTIVE_STATUS = "inactive";
    static $statuses = [self::ACTIVE_STATUS, self::INACTIVE_STATUS];

    protected $fillable = [
        'media_id',
        'name',
        'slug',
        'description',
        'age',
        'email',
        'direction',
        'status',
    ];

    protected $appends  = ['profile', 'created'];


    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }

    public function getProfileAttribute()
    {
        if (!is_null($this->media)) return $this->media->thumb();

        return "";
    }


    public function getCreatedAttribute()
    {
        return  verta($this->created_at)->formatDifference();
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
                'source' => 'name'
            ]
        ];
    }
}
