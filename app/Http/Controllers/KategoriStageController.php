<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategoriStageRequest;
use App\Models\KategoriStage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriStageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoristage = KategoriStage::all();
        return view('back.kategoristage.index')->with([
            'kategoristage' => $kategoristage
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.kategoristage.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KategoriStageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        KategoriStage::create($data);
        return redirect()->route('kategoristage.index')->with(['success' => 'Data berhasil ditambah !']);
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
        $kategoristage = KategoriStage::findOrFail($id);

        return view('back.kategoristage.edit')->with([
            'kategoristage' => $kategoristage
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KategoriStageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori_stage);

        $kategoristage = KategoriStage::findOrFail($id);
        $kategoristage->update($data);

        return redirect()->route('kategoristage.index')->with(['success' => 'Data Berhasil Diubah !']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = KategoriStage::findOrFail($id);
        $item->delete();

        return redirect()->route('kategoristage.index')->with(['success' => 'Data Berhasil Dihapus !']);
    }
}