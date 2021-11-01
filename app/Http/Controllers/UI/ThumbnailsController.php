<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Http\Resources\CatalogResource;
use App\Models\Catalog;
use App\Models\catalog_download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Doctrine\Common\Cache\Psr6\get;

class ThumbnailsController extends Controller
{
    public function index()
    {
        $images = Catalog::all();
        return view('layouts.index')
            ->with(['images' => $images, 'meta_title' => 'Get Desktop Dynamic Wallpapers for Windows 10']);
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

        return view('layouts.index')
            ->with(['images' => $images, 'header' => 'Новые изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }
    public function index_popular()
    {
        $images = Catalog::all();

        return view('layouts.index')
            ->with(['images' => $images, 'header' => 'Популярные изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }
    public function index_wait()
    {
        $images = Catalog::all();

        return view('layouts.index')
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
        return view('layouts.favorite')
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
        return view('layouts.install')
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
        return view('layouts.load')
            ->with(['catalog' => $catalog, 'header' => 'Вами загружанные изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }

    public function store_load(Request $request)
    {
        return $request;
    }

    public function index_simple($id = null)
    {
        if($id != null)
        {
            $image = Catalog::where('id', $id)->first();

            return \View::make('layouts.simple')->with([
                'id' => $id, 'image' => $image,
                'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
        }
        return false;
    }
}
