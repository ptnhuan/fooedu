<?php

namespace front\Controllers\Front;
use App\Http\Controllers\Controller;
class FrontController extends Controller {
    public function courses(){
        return view('front::vi.courses.index');
    }
    public function page(){
        return view('front::vi.page.index');
    }
    public function event(){
        return view('front::vi.event.index');
    }
    public function services(){
        return view('front::en.services.index');
    }
    public function contact(){
        return view('front::vi.contact.index');
    }
    public function tintuc(){
        return view('front::vi.blog.index');
    }
    public function giaodien(){
        return view('front::vi.layout.index');
    }
    public function dichvu(){
        return view('front::vi.services.index');
    }
    
     public function trangchu(){
        return view('front::vi.home.index');
    }
   
}