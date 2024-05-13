<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Mongodb\Laravel\Eloquent\Model;

class Cover extends Model
{
    // use HasFactory;
    protected $connection = 'mongodb';

    protected $fillable = [
        'name',
        'project_id',
    ];
}
