<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['agent', 'map', 'kill', 'death', 'assist', 'win'];
    protected $table = 'duelist';
    public $timestamps = false; 
}
