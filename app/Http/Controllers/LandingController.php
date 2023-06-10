<?php

namespace App\Http\Controllers;

use App\Models\ContactWidget;
use App\Models\Featured;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Image;
use App\Models\Marketplace;
use App\Models\Product;
use App\Models\Sales;
use App\Models\Banner;
use App\Models\Map;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $logo = Image::where('section','logo')->limit(1)->pluck('image');
        $logoMobile = Image::where('section','logomobile')->limit(1)->pluck('image');
        $location = Map::where('status','show')->limit(1)->get();

        $logo = ($logo) ? $logo = $logo[0] : $logo = 'noimage.png' ;
        $logoMobile = ($logoMobile != '') ? $logoMobile = $logoMobile[0] : $logoMobile = 'noimage.png' ;
        $location = ($location != '') ? $location = 'noimage.png' : $location = $location[0] ;
        
        $header = Header::where('status','show')->get();
        $banner = Banner::where('status','show')->get();
        $product = Product::where('status','show')->get();
        $featured = Featured::where('status','show')->get();
        $sales = Sales::where('status','show')->get();
        $footer = Footer::where('status','show')->get();
        $contact_widget = ContactWidget::where('status','show')->get();
        $marketplace_widget = Marketplace::where('status','show')->get();
        $credit = 'CRM Bisma Group | Supported by dikaprana.com';
        return view('landing', compact('logo','logoMobile','header','banner','product','featured','sales','footer','contact_widget','marketplace_widget','location','credit'));
    }
}
