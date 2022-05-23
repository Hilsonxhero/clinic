<?php

namespace App\Models;

use App\Traits\PageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory, PageTrait;


    protected $fillable = ['name', 'value'];

    protected $casts = [
        'value' => 'json'
    ];
}
