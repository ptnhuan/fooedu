<?php

namespace Front\Controllers;
use App\Http\Controllers\Controller;
class FrontController extends Controller {
    public function index(){
        return view('front::front.index');
    }
    public function gioithieu(){
        return view('front::front.gioithieu');
    }
    public function tintuc(){
        return view('front::front.tintuc');
    }
    public function dichvu(){
        return view('front::front.dichvu');
    }
    public function thunghiem(){
        return view('front::front.gioithieu');
    }
}