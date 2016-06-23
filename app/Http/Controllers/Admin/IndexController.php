<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use View;

class IndexController extends Controller
{

    public function getIndex()
    {

        return View::make('admin.index.index');

    }
}
