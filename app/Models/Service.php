<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
        // service belongs to user
        public function user(){
            return $this->belongsTo(User::class);
        }
    protected $fillable = [
        'description',
        'service_type',
        'document',
        'user_id'
    ];



    use HasFactory;
}
