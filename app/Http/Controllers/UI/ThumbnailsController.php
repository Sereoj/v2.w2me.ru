<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Http\Resources\CatalogResource;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class ThumbnailsController extends Controller
{
    public function index()
    {
        $images = Catalog::all();
        return view('pages.index')
            ->with(
                [
                    'images' => $images,
                    'meta_title' => 'Get Desktop Dynamic Wallpapers for Windows 10',
                    'url' => Route::currentRouteName() != 'index' ? Route::current()->uri : Route::current()->domain()
                ]);
    }

    public function index_simple($slug = null)
    {
        if($slug != null)
        {
            $name = str_replace('-', ' ',$slug);
            $image = new CatalogResource(Catalog::where('name', $name)->first());

            return view('pages.simple')->with([
                'image' => $image,
                'url' => Route::currentRouteName() != 'index' ? Route::current()->uri . '/images/' : Route::current()->domain().'/images/',
                'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
        }
        return false;
    }
}
