<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Http\Resources\CatalogResource;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoadThumbnailsController extends Controller
{
    public function index()
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

    public function store(Request $request)
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
}
