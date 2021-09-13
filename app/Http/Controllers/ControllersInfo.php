<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllersInfo extends Controller
{
    public function index() {
        return View('sections.news.infoOne');
    }
}
