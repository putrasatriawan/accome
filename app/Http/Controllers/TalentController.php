<?php

namespace App\Http\Controllers;

use App\Http\Requests\TalentRequest;
use App\Models\Domisili;
use App\Models\Imgtalent;
use App\Models\Talent;
use App\Models\Kategori;
use App\Models\Tags;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Facade\Ignition\Tabs\Tab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TalentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talent = Talent::all();
        $kategori = Kategori::all();
        return view('back.talent.index')->with([
            'talent' => $talent
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
        $domisili = Domisili::all();
        $tag = Tags::all();
        return view('back.talent.create', compact('kategori', 'domisili', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'body' => 'required|min:4',
            'kategori_id' => 'required',
            'domisili_id' => 'required',
            'rate' => 'required|min:4',
            'picture' => 'required',
            'cv' => 'required',
        ]);

        $talent = Talent::create([
            'name' => $request->name,
            'kategori_id' => $request->kategori_id,
            'domisili_id' => $request->domisili_id,
            'is_active' => $request->is_active,
            'views' => 0,
            'rate' => $request->rate,
            'body' => $request->body,
            'slug' => Str::slug($request->name),
            'picture' => $request->file('picture')->store(
                'talent_picture'
            ),
            'cv' => $request->file('cv')->store(
                'talent_cv'
            ),
        ]);
        $talent->tags()->attach($request->tags);

        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $imageName = time() . "_" . $file->getClientOriginalName();
                $request['talent_id'] = $talent->id;
                $request['image'] = $imageName;
                $file->move(\public_path("/images"), $imageName);
                Image::create($request->all());
            }
        }

        return redirect()->route('talent.index')->with(['success' => 'Data Berhasil ditambahkan']);


        // $data = $request->all();
        // $data['slug'] = Str::slug($request->name);
        // $data['user_id'] = Auth::id();
        // $data['views'] = 0;
        // $data['picture'] = $request->file('picture')->store(
        //     'talent_picture'
        // );
        // $data['cv'] = $request->file('cv')->store(
        //     'talent_cv'
        // );
        // $data = ['kategori']()->sync((array)$request->input('kategori'));

        // $data['tag']->attach($request->tags);



        // $kategories = $request->kategori;
        // // $talents->kategori()->sync($kategories);





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dl = Talent::find($id);
        return Storage::download($dl->path, $dl->path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $talent = Talent::findOrFail($id);
        $kategori = Kategori::all();
        $domisili = Domisili::all();
        $tag = Tags::all();

        return view('back.talent.edit')->with([
            'talent' => $talent,
            'kategori' => $kategori,
            'domisili' => $domisili,
            'tag' => $tag
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
        $talent = Talent::findOrFail($id);
        if ($request->hasFile('picture')) {
            if (File::exists(public_path("uploads/") . $talent->picture)) {
                File::delete(public_path("uploads/") . $talent->picture);
            }

            $file = $request->file('picture');
            $talent->picture = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("uploads/"), $talent->picture);
        }

        if ($request->hasFile('cv')) {
            $cv = $request->file('cv')->store('talent_cv');
        } else {
            $cv = $talent->cv;
        }

        $talent->update([
            'name' => $request->name,
            'kategori_id' => $request->kategori_id,
            'domisili_id' => $request->domisili_id,
            'is_active' => $request->is_active,
            'views' => 0,
            'rate' => $request->rate,
            'body' => $request->body,
            'slug' => Str::slug($request->name),
            'cv' => $cv

        ]);

        $this->validate($request, [
            'name' => 'required|min:4',
            'body' => 'required|min:4',
            'kategori_id' => 'required',
            'domisili_id' => 'required',
            'rate' => 'required',
            'picture' => 'required',
            'cv' => 'required',
        ]);
        // $talent = Talent::findOrFail($id);
        // $talent->Update([
        //     'name' => $request->name,
        //     'kategori_id' => $request->kategori_id,
        //     'domisili_id' => $request->domisili_id,
        //     'is_active' => $request->is_active,
        //     'views' => 0,
        //     'rate' => $request->rate,
        //     'body' => $request->body,
        //     'slug' => Str::slug($request->name),
        //     // 'picture' => $request->file('picture')->store(
        //     //     'talent_picture'
        //     // ),
        //     'cv' => $request->file('cv')->store(
        //         'talent_cv'
        //     ),
        //     // 'user_id' => Auth::id(),
        // ]);
        $talent->tags()->sync($request->tags);
        return redirect()->route('talent.index')->with(['success' => 'Data Berhasil diubah']);
    }
    // if (empty($request->file('cv'))) {
    //     $talent = Talent::findOrFail($id);
    //     $talent->Update([
    //         'name' => $request->name,
    //         'kategori_id' => $request->kategori_id,
    //         'domisili_id' => $request->domisili_id,
    //         'is_active' => $request->is_active,
    //         'views' => 0,
    //         'rate' => $request->rate,
    //         'body' => $request->body,
    //         'slug' => Str::slug($request->name),
    //         'picture' => $request->file('picture')->store(
    //             'talent_picture'
    //         ),
    //         // 'cv' => $request->file('cv')->store(
    //         //     'talent_cv'
    //         // ),
    //         // 'user_id' => Auth::id(),
    //     ]);
    //     $talent->tags()->attach($request->tags);
    //     return redirect()->route('talent.index')->with(['success' => 'Data Berhasil diubah']);
    // } else {
    //     $talent = Talent::findOrFail($id);
    //     Storage::delete($talent->picture);
    //     Storage::delete($talent->cv);
    //     $talent->Update([
    //         'name' => $request->name,
    //         'kategori_id' => $request->kategori_id,
    //         'domisili_id' => $request->domisili_id,
    //         'is_active' => $request->is_active,
    //         'views' => 0,
    //         'rate' => $request->rate,
    //         'body' => $request->body,
    //         'slug' => Str::slug($request->name),
    //         'picture' => $request->file('picture')->store(
    //             'talent_picture'
    //         ),
    //         'cv' => $request->file('cv')->store(
    //             'talent_cv'
    //         ),
    //         'user_id' => Auth::id(),
    //     ]);
    //     $talent->tags()->attach($request->tags);
    //     return redirect()->route('talent.index')->with(['success' => 'Data Berhasil diubah']);
    // }
    // }

    /**
     * Remove the specified resource from storage.
     *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */

    public function destroy($id)
    {

        $talent = Talent::findOrFail($id);
        //hapus gambar
        Storage::delete($talent->picture);

        $talent->delete();

        return redirect()->route('talent.index')->with(['success' => 'Data Berhasil Dihapus !']);
    }
}