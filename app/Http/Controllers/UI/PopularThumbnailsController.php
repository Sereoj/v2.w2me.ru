<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class PopularThumbnailsController extends Controller
{
    public function index()
    {
        $images = Catalog::all();

        return view('pages.index')
            ->with(['images' => $images, 'header' => 'Популярные изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }

    public function store(Request $request)
    {

    }
}
