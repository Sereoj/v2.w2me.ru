<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class WallpaperListController extends Controller
{
    public function getAllWallpapers(Request $request)
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

    public function getLoadWallpapers($user_id)
    {
        $user = \App\Models\User::find($user_id);

        if($user != null)
        {
            return Catalog::find($user)->all();
        }
        return $user;

        //return ['user_id' => null];
    }
}
