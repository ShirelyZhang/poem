<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Http\Request;

class PoemController extends BaseController
{
    public function getList(Request $request)
    {
        var_dump($request->all());die;
    }
}
