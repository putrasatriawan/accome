<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategoriRequest;
use App\Models\Domisili;
use App\Models\Kategori;
use App\Models\KategoriStage;
use Dflydev\DotAccessData\Data;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('back.kategori.index')->with([
            'kategori' => $kategori,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('back.kategori.create')->with([
            'kategori' => $kategori,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KategoriRequest $request)
    {

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['image'] = $request->file('image')->store(
            'kategori_image'
        );
        Kategori::create($data);
        return redirect()->route('kategori.index')->with(['success' => 'Data berhasil ditambah !']);
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
        $kategori = Kategori::findOrFail($id);

        return view('back.kategori.edit')->with([
            'kategori' => $kategori
        ]);
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

        //sintax jika gambar tidak di ubah maka ini script nya
        if (empty($request->file('image'))) {
            $kategori = Kategori::find($id);
            $kategori->update([
                'name' => $request->name,
                'desc' => $request->desc,
                'slug' => Str::slug($request->name),
                'is_active' => $request->is_active,
            ]);
            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil di ubah!']);
        } else {
            $kategori = Kategori::find($id);
            Storage::delete($kategori->image);
            $kategori->update([
                'name' => $request->name,
                'desc' => $request->desc,
                'slug' => Str::slug($request->name),
                'is_active' => $request->is_active,
                'image' => $request->file('image')->store('kategori_image')
            ]);
            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil di ubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Kategori::findOrFail($id);
        $item->delete();

        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus !']);
    }
}