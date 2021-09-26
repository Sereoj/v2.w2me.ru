<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WallpapersCollection;
use App\Models\Catalog;
use Illuminate\Http\Request;

class WallpaperListController extends Controller
{
    public function getAllWallpapers(Request $filters)
    {
        return Catalog::all()->makeHidden(['created_at', 'updated_at']);
    }

    public function getOneWallpaper($nameOrId)
    {
        if(is_numeric($nameOrId))
            return Catalog::find($nameOrId);
        else
        {
            $str = str_replace(["_", "+", "-"], " ", $nameOrId);
            return Catalog::where(['name' => $str])->get();
        }
    }
}
