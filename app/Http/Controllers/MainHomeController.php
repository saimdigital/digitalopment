<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Harimayco\Menu\Facades\Menu;
use Harimayco\Menu\Models\Menus;
use Harimayco\Menu\Models\MenuItems;
use App\Models\HomeSlider;
use App\Models\HomeVideo;
use App\Models\ServiceInfo;
use App\Models\HomeService;
use App\Models\Portinfo;

class MainHomeController extends Controller
{
    public function index()
    {

        $sliders = HomeSlider::where('status', 'ACTIVE')->get();
        $serviceinfo = ServiceInfo::where('status', 'ACTIVE')->first();
        $services = HomeService::where('status', 'ACTIVE')->get();

        $portinfo = Portinfo::where('status', 'ACTIVE')->first();
        $services = HomeService::where('status', 'ACTIVE')->get();

        $video = HomeVideo::where('status','ACTIVE')->first();
        $menu_header = Menu::getByName('Header-Menu');
        return view('index')->with(compact('menu_header','sliders','video','serviceinfo','services','portinfo'));
    }
    public function aboutus()
    {
        $menu_header = Menu::getByName('Header-Menu');
        return view('aboutus')->with(compact('menu_header'));
    }
    public function portfolio()
    {
        $menu_header = Menu::getByName('Header-Menu');
        return view('portfolio')->with(compact('menu_header'));
    }
    public function services()
    {
        $menu_header = Menu::getByName('Header-Menu');
        return view('services')->with(compact('menu_header'));
    }
    public function career()
    {
        $menu_header = Menu::getByName('Header-Menu');
        return view('career')->with(compact('menu_header'));
    }
    public function blog()
    {
        $menu_header = Menu::getByName('Header-Menu');
        return view('blog')->with(compact('menu_header'));
    }
    public function contact()
    {
        $menu_header = Menu::getByName('Header-Menu');
        return view('contact')->with(compact('menu_header'));
    }
}
