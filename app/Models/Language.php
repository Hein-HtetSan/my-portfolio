<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Mongodb\Laravel\Eloquent\Model;

class Language extends Model
{
    // use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'languages';

    protected $fillable = [
        'name'
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_languages', 'language_id', 'project_id');
    }
}
