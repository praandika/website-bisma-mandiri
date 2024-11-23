<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sales::all();
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
        if(!preg_match("/[^+0-9]/",trim($request->phone))){
            // cek apakah no hp karakter ke 1 dan 2 adalah angka 62
            if(substr(trim($request->phone), 0, 2)=="62"){
                $phone_format =trim($request->phone);
            }
            // cek apakah no phone_format karakter ke 1 adalah angka 0
            else if(substr(trim($request->phone), 0, 1)=="0"){
                $phone_format ="62".substr(trim($request->phone), 1);
            }
        }

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg',
        ]);

        $data = new Sales;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->message = str_replace(' ', '%20', $request->message);
        $data->phone_format = $phone_format;
        $img = $request->file('image');
        $img_file = time()."_".$img->getClientOriginalName();
        $dir_img = 'img';
        $img->move($dir_img,$img_file);
        $data->image = $img_file;
        $data->save();
        
        toast('Sales successfully added','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales $sale)
    {
        return view('home', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sale)
    {
        if(!preg_match("/[^+0-9]/",trim($request->phone))){
            // cek apakah no hp karakter ke 1 dan 2 adalah angka 62
            if(substr(trim($request->phone), 0, 2)=="62"){
                $phone_format =trim($request->phone);
            }
            // cek apakah no phone_format karakter ke 1 adalah angka 0
            else if(substr(trim($request->phone), 0, 1)=="0"){
                $phone_format ="62".substr(trim($request->phone), 1);
            }
        }

        if ($request->status != null) {
            $status = 'show';
        } else {
            $status = 'hide';
        }

        $data = Sales::find($sale->id);
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->message = str_replace(' ', '%20', $request->message);
        $data->phone_format = $phone_format;
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
        $data->update();
        toast('Sales has been updated!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
