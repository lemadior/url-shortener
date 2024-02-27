<?php

namespace App\Models\Short;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'shortlink',
        'url',
        'name',
        'counter'
    ];
}
