<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Web\BaseController;
use Illuminate\Http\Request;

class PoemController extends BaseController
{
    public function getList(Request $request)
    {
        var_dump($request->all());die;
    }
}
