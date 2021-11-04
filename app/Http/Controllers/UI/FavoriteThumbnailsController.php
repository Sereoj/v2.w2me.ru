<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteThumbnailsController extends Controller
{
    public function index()
    {
        $catalog = null;
        if(Auth::check())
        {
            $getFavorite = unserialize(Auth::user()->favorite_themes);
            if(is_array($getFavorite))
            {
                $catalog = Catalog::whereIn('id', $getFavorite)->get();
            }else{
                $catalog = func_get_args();
            }
        }
        return view('pages.favorite')
            ->with(['images' => $catalog, 'header' => 'Любимые изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }

    public function store(Request $request)
    {

    }
}
