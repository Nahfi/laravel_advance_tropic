<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia ;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Notifications\Notifiable;

class Student extends Model implements HasMedia
{
    use HasFactory,Notifiable;
    use InteractsWithMedia;

    protected $fillable=[
        'name',
        "email"
    ];
}
