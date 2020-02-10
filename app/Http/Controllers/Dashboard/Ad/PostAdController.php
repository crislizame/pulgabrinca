<?php

namespace App\Http\Controllers\Dashboard\Ad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostAdController extends Controller
{
    public function index(){
        return view('vistas.pages.dashboard.ad.post');
    }
}
