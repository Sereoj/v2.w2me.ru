<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

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
        $images = Catalog::all();
        return view('layouts.index')
            ->with(['images' => $images, 'header' => 'Любимые изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }
    public function index_install()
    {
        $images = Catalog::all();
        return view('layouts.index')
            ->with(['images' => $images, 'header' => 'Установленные изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }
    public function index_load()
    {
        $images = Catalog::all();
        return view('layouts.load')
            ->with(['images' => $images, 'header' => 'Вами загружанные изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }

    public function index_simple(Request $request,$id = null)
    {
        if($id != null)
        {
            $image = Catalog::where('id', $id)->first();

            return \View::make('layouts.simple')->with(['id' => $id, 'image' => $image, 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
        }
        return false;
    }
}
