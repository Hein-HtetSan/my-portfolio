<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Mongodb\Laravel\Eloquent\Model;


class Mail extends Model
{
    // use HasFactory;
    protected $connection = 'mongodb';

    protected $fillable = [
        'sender_mail',
        'message',
        'status',
    ];
}
