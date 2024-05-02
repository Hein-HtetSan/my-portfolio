<?php

namespace App\Models;

use App\Models\Cover;
use App\Models\Language;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'short_desc',
        'content',
        'demo',
        'github',
    ];

    public function covers()
    {
        return $this->hasMany(Cover::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class, 'project_languages', 'project_id', 'lang_id');
    }
}
