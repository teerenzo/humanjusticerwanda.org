<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testmony extends Model
{
    protected $fillable = ['name', 'testimony', 'image', 'user_id'];
    use HasFactory;
}
