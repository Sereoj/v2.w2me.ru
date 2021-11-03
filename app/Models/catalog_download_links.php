<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalog_download_links extends Model
{
    use HasFactory;

    //
    //id
    //catalog_download_id
    //link_0
    //link_1
    //link_2

    protected $table = 'catalog_download_links';
    public $timestamps = false;
    protected $fillable = ['id', 'catalog_download_id', 'link_0', 'link_1', 'link_2'];
}
