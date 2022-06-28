<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'keywords', 'metable_id', 'metable_type',
    ];


    protected $casts = [
        'keywords' => 'json'
    ];

    protected $appends  = ['keywords_data', 'keywords_value'];

    protected $table = "meta";


    public function metable()
    {
        return $this->morphTo();
    }

    public function getKeywordsDataAttribute()
    {
        if ($this->keywords) {
            $values = array_map('array_pop', $this->keywords);
            return implode(",", $values);
        } else {
            return '';
        }
    }

    public function getKeywordsValueAttribute()
    {
        if ($this->keywords) {
            $values = array_map('array_pop', $this->keywords);
            return array_values($values);
        } else {
            return '';
        }
    }
}
