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
        $location = Map::where('status','show')->limit(1)->pluck('link');
        
        $logo = ($logo->count() > 0) ? $logo[0] : 'noimage.png' ;
        $logoMobile = ($logoMobile->count() > 0) ? $logoMobile[0] : 'noimage.png' ;
        $location = ($location->count() > 0) ? $location[0] : 'google-maps-logo.png' ;
        
        $header = Header::where('status','show')->get();
        $banner = Banner::where('status','show')->get();
        $active = Banner::orderBy('id','asc')->limit(1)->pluck('id');
        $product = Product::where('status','show')->get();
        $featured = Featured::where('status','show')->get();
        $activeFeatured = Featured::orderBy('id','asc')->limit(1)->pluck('id');
        $sales = Sales::where('status','show')->get();
        $footer = Footer::where('status','show')->get();
        $contact_widget = ContactWidget::where('status','show')->get();
        $contact_widget_mobile = ContactWidget::where([
            ['status','show'],
            ['media_social','!=','Whatsapp'],
        ])->get();
        $marketplace_widget = Marketplace::where('status','show')->get();
        $credit = 'CRM Bisma Group | Supported by dikaprana.com';
        return view('landing', compact('logo','logoMobile','header','banner','product','featured','sales','footer','contact_widget','contact_widget_mobile','marketplace_widget','location','credit','active','activeFeatured'));
    }
}
