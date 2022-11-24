<?php

namespace App\Http\Controllers;

use App\Http\Requests\DomisiliRequest;
use App\Models\Domisili;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domisili = Domisili::all();
        return view('back.domisili.index')->with([
            'domisili' => $domisili
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.domisili.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DomisiliRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_domisili);
        Domisili::create($data);
        return redirect()->route('domisili.index')->with(['success' => 'Data berhasil ditambah !']);
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
        $domisili = Domisili::findOrFail($id);

        return view('back.domisili.edit')->with([
            'domisili' => $domisili
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DomisiliRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_domisili);

        $domisili = Domisili::findOrFail($id);
        $domisili->update($data);

        return redirect()->route('domisili.index')->with(['success' => 'Data Berhasil Diubah !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Domisili::findOrFail($id);
        $item->delete();

        return redirect()->route('domisili.index')->with(['success' => 'Data Berhasil Dihapus !']);
    }
}