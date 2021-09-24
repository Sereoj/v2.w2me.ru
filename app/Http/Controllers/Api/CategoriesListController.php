<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesListController extends Controller
{
    public function getCategories()
    {
        return Categories::all();
    }

    public function getCategory($id)
    {
        if(is_numeric($id))
            return Categories::find($id);
        else
            return "null";
    }

    public function addCategory(Request $request)
    {
        $value = $request->only('name');

        if(!empty($value))
        {
            if(Categories::whereName($value)->get() != $value)
            {
                return Categories::create(['name' => $value]);
            }
        }
    }
}
