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
    public function index_logout()
    {
        $this->index();
        auth()->logout();

        return redirect(route('index'));
    }
    public function index_new()
    {
        $images = Catalog::orderBy('id','desc')->take(10)->get();

        return view('pages.index')
            ->with(['images' => $images, 'header' => 'Новые изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }
    public function index_popular()
    {
        $images = Catalog::all();

        return view('pages.index')
            ->with(['images' => $images, 'header' => 'Популярные изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }
    public function index_wait()
    {
        $images = Catalog::all();

        return view('pages.index')
            ->with(['images' => $images, 'header' => 'Ожидающие изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }
    public function index_favorite()
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
    public function index_install()
    {
        $catalog = null;

        if(Auth::check())
        {
            $getInstall = unserialize(Auth::user()->install_themes);

            if(is_array($getInstall))
            {
                $catalog = Catalog::whereIn('id', $getInstall)->get();
            }else{
                $catalog = func_get_args();
            }
        }
        return view('pages.install')
            ->with(['images' => $catalog, 'header' => 'Установленные изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }
    public function index_load()
    {
        // id, name, count download

        $catalog = null;

        if(Auth::check())
        {
            $user_id = Auth::user()->id; // id user
            $catalog = CatalogResource::collection(Catalog::whereUserId($user_id)->get()); // get catalogs
        }
        return view('pages.load')
            ->with(['catalog' => $catalog, 'header' => 'Вами загружанные изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }


    public function store_load(Request $request)
    {
        if(isset($request->delete))
        {
            $id = (int)$request->delete;
            Catalog::whereId($id)->delete();
        }
        if(isset($request->change))
        {
            return view('pages.item.change')->with(['header' => 'Изменение коллекции', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
        }
        if(isset($request->add))
        {
            return view('pages.item.add')->with(['header' => 'Создание коллекции', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
        }
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
