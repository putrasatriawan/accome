<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use App\Models\TagsTalent;
use App\Models\Talent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class TagFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function show_tag($id)
    {
        $tagss = Tags::get();
        $tags = TagsTalent::where('tags_id', $id)->get();
        $talent = Talent::whereHas('tags', function (Builder $query) use ($id) {
            $query->where('tags_id', $id);
        })->get();
        // foreach ($tags as $key => $tag) {
        //     array_push($talent, $tag->talent()->first());
        // }
        // return $talent;
        return view('front.view_slug.tag_view_front')->with(
            [
                'talent' => $talent,
                'tags' => $tags,
                'tagss' => $tagss
            ]
        );
    }
}