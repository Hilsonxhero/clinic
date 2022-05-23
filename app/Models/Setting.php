<?php

namespace App\Models;

use App\Traits\SettingTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory,SettingTrait;

    protected $fillable = [
        'name',
        'value',
    ];

    protected $casts = [
        'value' => 'json'
    ];

}
