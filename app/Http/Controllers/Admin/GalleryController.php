<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Gallery;
use App\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Gallery::with(['travel_package'])->get();
        $title = 'Galeri Travel';

        return view('pages.admin.gallery.index', [
            'items' => $items,
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travel_packages = TravelPackage::all();
        $title = 'Galeri Travel';

        return view('pages.admin.gallery.create', [
            'travel_packages' => $travel_packages,
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );

        Gallery::create($data);
        return redirect()->route('gallery.index')->with(['success' => 'Data berhasil ditambahkan']);
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
        $item = Gallery::findOrFail($id);
        $travel_packages = TravelPackage::all();
        $title = 'Galeri Travel';

        return view('pages.admin.gallery.edit', [
            'item' => $item,
            'travel_packages' => $travel_packages,
            'title' => $title
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
        $request->validate([
            'travel_packages_id' => 'required|integer|exists:travel_packages,id',
            'image' => 'image'
        ]);

        $data = $request->all();
        $old_image = DB::table('galleries')
            ->select('image')
            ->where('id', $id)
            ->get();
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store(
                'assets/gallery',
                'public'
            );
        } else {
            $data['image'] = $old_image[0]->image;
        }

        $item = Gallery::findOrFail($id);
        $item->update($data);
        return redirect()->route('gallery.index')->with(['success' => 'Data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);
        $item->delete();
        return redirect()->route('gallery.index')->with(['success' => 'Data berhasil dihapus']);
    }
}
