<?php

namespace App\Http\Controllers;

use App\Models\ContactWidget;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ContactWidgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ContactWidget::all();
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
        if ($request->newtab != null) {
            $check = 1;
        } else {
            $check = 0;
        }

        $data = New ContactWidget;
        $data->media_social = $request->media_social;
        $data->link = $request->link;
        $data->newtab = $check;
        $data->save();

        toast('Media social successfully added','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactWidget  $contactWidget
     * @return \Illuminate\Http\Response
     */
    public function show(ContactWidget $contactWidget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactWidget  $contactWidget
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactWidget $contact)
    {
        return view('home', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactWidget  $contactWidget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactWidget $contact)
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

        $data = ContactWidget::find($contact->id);
        $data->media_social = $request->media_social;
        $data->link = $request->link;
        $data->newtab = $check;
        $data->status = $status;
        $data->update();

        toast('Media social has been updated!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactWidget  $contactWidget
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactWidget $contactWidget)
    {
        //
    }
}
