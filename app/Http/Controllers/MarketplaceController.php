<?php

namespace App\Http\Controllers;

use App\Models\Marketplace;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Marketplace::all();
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg',
            'image_mobile' => 'image|mimes:jpeg,png,jpg',
        ]);

        $data = new Marketplace;
        $data->marketplace = $request->marketplace;
        $data->marketplace_abbr = $request->marketplace_abbr;
        $data->link = $request->link;

        $img = $request->file('image');
        $img_file = time()."_".$img->getClientOriginalName();
        $dir_img = 'img';
        $img->move($dir_img,$img_file);
        $data->image = $img_file;

        $img_mobile = $request->file('image_mobile');
        $img_file_mobile = time()."_".$img_mobile->getClientOriginalName();
        $dir_img_mobile = 'img';
        $img_mobile->move($dir_img_mobile,$img_file_mobile);
        $data->image_mobile = $img_file_mobile;

        $data->save();
        
        toast('Marketplace successfully added','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marketplace  $marketplace
     * @return \Illuminate\Http\Response
     */
    public function show(Marketplace $marketplace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marketplace  $marketplace
     * @return \Illuminate\Http\Response
     */
    public function edit(Marketplace $marketplace)
    {
        return view('home', compact('marketplace'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marketplace  $marketplace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marketplace $marketplace)
    {
        if ($request->status != null) {
            $status = 'show';
        } else {
            $status = 'hide';
        }

        if ($request->show_title != null) {
            $show_title = 'show';
        } else {
            $show_title = 'hide';
        }

        if ($request->show_title_mobile != null) {
            $show_title_mobile = 'show';
        } else {
            $show_title_mobile = 'hide';
        }

        $data = Marketplace::find($marketplace->id);
        $data->marketplace = $request->marketplace;
        $data->marketplace_abbr = $request->marketplace_abbr;
        $data->link = $request->link;
        $data->show_title = $show_title;
        $data->show_title_mobile = $show_title_mobile;
        $data->status = $status;
        if ($request->hasFile('image')) {
            if ($data->image != '' && $data->image != 'noimage.png') {
                $img_prev = $request->img_prev;
                unlink('img/'.$img_prev);
            }
            $img = $request->file('image');
            $img_file = time()."_".$img->getClientOriginalName();
            $dir_img = 'img';
            $img->move($dir_img,$img_file);
    
            $data->image = $img_file;
        }

        if ($request->hasFile('image_mobile')) {
            if ($data->image_mobile != '' && $data->image_mobile != 'noimage.png') {
                $img_prev_mobile = $request->img_prev_mobile;
                unlink('img/'.$img_prev_mobile);
            }
            $img_mobile = $request->file('image_mobile');
            $img_file_mobile = time()."_".$img_mobile->getClientOriginalName();
            $dir_img_mobile = 'img';
            $img_mobile->move($dir_img_mobile,$img_file_mobile);
    
            $data->image_mobile = $img_file_mobile;
        }

        $data->update();
        toast('Marketplace has been updated!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marketplace  $marketplace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marketplace $marketplace)
    {
        //
    }
}
