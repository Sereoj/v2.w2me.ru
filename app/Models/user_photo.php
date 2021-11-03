<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_photo extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = "user_photo";
    protected $fillable = ['id','user_id','path'];
}
