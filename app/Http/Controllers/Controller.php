<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function search()
    {
       $model =  Catalog::search('Al')->get();
       dd($model);
    }
}
