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
        //
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
        //
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
