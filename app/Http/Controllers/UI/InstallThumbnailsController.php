<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstallThumbnailsController extends Controller
{
    public function index()
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

    public function store(Request $request)
    {

    }
}
