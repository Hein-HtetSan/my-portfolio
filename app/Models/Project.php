<?php

namespace App\Models;

use App\Models\Cover;
use App\Models\Language;
// use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectLanguage;
use Mongodb\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Project extends Model
{
    // use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'projects';

    protected $fillable = [
        'id',
        'title',
        'short_desc',
        'content',
        'demo',
        'github',
        'cover',
    ];

    public function languages()
    {
        return $this->belongsToMany(Language::class , 'project_languages', 'project_id', 'language_id');
    }
}
