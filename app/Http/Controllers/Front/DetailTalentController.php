<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\TalentRequest;
use App\Models\Image;
use App\Models\Imgtalent;
use App\Models\Talent;
use Illuminate\Http\Request;

class DetailTalentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('front.landing.detail');
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
        Talent::find($id);
        $talent = Talent::find($id);
        $image = Image::where('talent_id', $id)->get();
        $talent = Talent::with(['image'])->where('id', $id)->first();
        // foreach ($image as $key => $images) {
        //     array_push($talent, $images->talent()->first());
        // // }
        // return $talent;
        return view('front.landing.detail')->with(
            [
                'talent' => $talent,
                'image' => $image,

            ]
        );
        // Talent::find($id);
        // $talent = Talent::findOrFail($id);

        // return view('front.landing.detail')->with([
        //     'talent' => $talent,
        // ]);
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
    public function update(Request $request, $id)
    {
        //
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
    public function show_talent($slug)
    {
        $talent = Talent::where('slug', $slug)->first();
        if ($talent) {
            $talent = Talent::where('talent', $talent->id)->get();
            return view('front.landing.detail')->with([
                'talent' => $talent,
            ]);
        } else {
            return redirect('/');
        }
    }
}