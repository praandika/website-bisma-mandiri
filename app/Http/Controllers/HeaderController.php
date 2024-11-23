<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Console\View\Components\Alert;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Header::all();
        $logo = Image::where('section','logo')->limit(1)->get();
        $logoMobile = Image::where('section','logomobile')->limit(1)->get();
        return view('home', compact('data','logo','logoMobile'));
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
        if ($request->newtab != null) {
            $check = 1;
        } else {
            $check = 0;
        }
        
        $data = New Header;
        $data->menu = $request->menu;
        $data->link = $request->link;
        $data->icon = $request->icon;
        $data->newtab = $check;
        $data->save();

        toast('Menu successfully added','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        return view('home',compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        if ($request->newtab != null) {
            $check = 1;
        } else {
            $check = 0;
        }

        if ($request->status != null) {
            $status = 'show';
        } else {
            $status = 'hide';
        }

        $data = Header::find($header->id);
        $data->menu = $request->menu;
        $data->link = $request->link;
        $data->icon = $request->icon;
        $data->newtab = $check;
        $data->status = $status;
        $data->update();
        toast('Menu has been updated!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        //
    }
}
