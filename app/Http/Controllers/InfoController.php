<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class Info1Controller extends Controller
{
    public function index() {
        return View ('sections.news.infoOne');
    }
}
