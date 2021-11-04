<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class NewThumbnailsController extends Controller
{
    public function index()
    {
        $images = Catalog::orderBy('id','desc')->take(10)->get();

        return view('pages.index')
            ->with(['images' => $images, 'header' => 'Новые изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }

    public function store(Request $request)
    {

    }
}
