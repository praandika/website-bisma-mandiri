<?php

namespace App\Http\Controllers;

use App\Models\Featured;
use Illuminate\Http\Request;

class FeaturedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Featured::all();
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

        $data = new Featured;
        $data->name = $request->name;
        $img = $request->file('image');
        $img_file = time()."_".$img->getClientOriginalName();
        $dir_img = 'img';
        $img->move($dir_img,$img_file);
        $data->image = $img_file;
        $data->save();
        
        toast('Mobile Featured successfully added','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Featured  $featured
     * @return \Illuminate\Http\Response
     */
    public function show(Featured $featured)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Featured  $featured
     * @return \Illuminate\Http\Response
     */
    public function edit(Featured $featured)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Featured  $featured
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Featured $featured)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Featured  $featured
     * @return \Illuminate\Http\Response
     */
    public function destroy(Featured $featured)
    {
        //
    }
}
