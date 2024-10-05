<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nerd extends Model
{
    use HasFactory;

    protected $table = 'nerds';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'password'];
    
}
