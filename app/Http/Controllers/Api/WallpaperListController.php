<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CatalogResource;
use App\Models\Catalog;
use App\Models\User;
use Illuminate\Http\Request;

class WallpaperListController extends Controller
{
    public function getAllWallpapers(Request $request)
    {
        return CatalogResource::collection(Catalog::all());
    }

    public function getOneWallpaper($nameOrId)
    {
        if(is_numeric($nameOrId))
            return Catalog::find($nameOrId);
        else
        {
            $str = str_replace(["_", "+", "-"], " ", $nameOrId);
            return CatalogResource::collection(Catalog::where(['name' => $str])->get());
        }
    }

    public function getLoadWallpapers($user_id)
    {
        $user = User::find($user_id);

        if(null != $user)
        {
            return Catalog::find($user)->all();
        }
        return $user;
    }
}
