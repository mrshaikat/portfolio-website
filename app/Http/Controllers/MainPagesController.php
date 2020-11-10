<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class MainPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Main::first();
        return view('backend.main', compact('main'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this -> validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
        ]);

        $main = Main::first();
        $main-> title = $request -> title;
        $main-> sub_title = $request -> sub_title;
        if( $request -> file('nav_logo') ){
            $logo_file = $request->file('nav_logo');
            $logo_file-> storeAs('public/image','nav_logo.'.$logo_file-> getClientOriginalExtension() );

            $main->nav_logo = 'public/storage/image/nav_logo.'.$logo_file->getClientOriginalExtension();

        }

        if( $request -> file('bg_img') ){
            $img_file = $request->file('bg_img');
            $img_file-> storeAs('public/image','bg_img.'.$img_file-> getClientOriginalExtension() );

            $main->bg_img = 'public/storage/image/bg_img.'.$img_file->getClientOriginalExtension();

        }

        if( $request -> file('resume') ){
            $pdf_file = $request->file('resume');
            $pdf_file-> storeAs('public/pdf','resume.'.$pdf_file-> getClientOriginalExtension() );

            $main->resume = 'public/storage/pdf/resume.'.$pdf_file->getClientOriginalExtension();

        }

        $main->save();


        return redirect()->route('backend.main')->with('success', "Main page data has been updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
