<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Mongodb\Laravel\Eloquent\Model;

class ProjectLanguage extends Model
{
    // use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'project_languages';

    protected $fillable = [
        'project_id',
        'lang_id',
    ];
}
