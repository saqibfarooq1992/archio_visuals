<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'designation',
        'facebook',
        'instagram',
        'twitter',
        'gmail',
        'whatsapp',
        'picture',
    ];
}
