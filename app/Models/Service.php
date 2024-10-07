<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Service extends Model
{
    use HasFactory ,Notifiable;

    protected $fillable = ['title', 'descriptions'];
    protected $casts = [
        'descriptions' => 'array',
    ];
}
