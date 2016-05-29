<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getList(Request $request)
    {
        $params = $request->input();
        $search = $params;
        $adminDao = new Admin();
        $admins = $adminDao->getList($params);

        $data = [
            'admins' => $admins,
            'search' => $search,
        ];
        return view('admin.list', $data);
    }
}
