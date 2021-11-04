<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class WaitThumbnailsController extends Controller
{
    public function index()
    {
        $images = Catalog::all();

        return view('pages.index')
            ->with(['images' => $images, 'header' => 'Ожидающие изображения', 'meta_title' => 'Get Desktop New Dynamic Wallpapers for Windows 10']);
    }

    public function store(Request $request)
    {

    }
}
