<?php

namespace front\Controllers\Front;
use App\Http\Controllers\Controller;
class FrontController extends Controller {
    public function categories(){
        return view('front::en.categories.index');
    }
    public function layout(){
        return view('front::en.layout.index');
    }
    public function news(){
        return view('front::en.news.index');
    }
    public function services(){
        return view('front::en.services.index');
    }
    public function thunghiem(){
        return view('front::front.gioithieu');
    }
    public function tintuc(){
        return view('front::vi.news.index');
    }
    public function giaodien(){
        return view('front::vi.news.index');
    }
    public function dichvu(){
        return view('front::vi.services.index');
    }
    public function danhmuc(){
        return view('front::vi.categories.index');
    }
   
}