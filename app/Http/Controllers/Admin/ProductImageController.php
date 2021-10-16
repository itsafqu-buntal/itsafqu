<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\ImageTemplate;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = ImageTemplate::orderBy('id', 'DESC')->get();
        return view('pages.admin.produk-gambar.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //buat web
    {
        $packages = Package::all();
        return view('pages.admin.produk-gambar.create', [
            'packages' => $packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = \Validator::make($request->all(), [
            "packages_id" => "required",
            "nama" => "required",
            "harga" => "required",
            "deskripsi" => "required",
        ])->validate();
        $product = new ImageTemplate();

        $product->packages_id = $request->get('packages_id');
        $product->nama = $request->get('nama');
        $product->harga = $request->get('harga');
        $product->deskripsi = $request->get('deskripsi');

        if ($request->file("thumbnail")) {
            $thumbnail_file = $request->file('thumbnail')->store('thumbnail_gambar', 'public');
            $product->thumbnail = $thumbnail_file;
        };

        $product->save();

        return redirect()->route('produk-gambar.index')->with('status', 'Produk Berhasil Dibuat!');
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
        $item = ImageTemplate::findOrFail($id);
        $packages = Package::all();
        return view('pages.admin.produk-gambar.edit', ['item' => $item, 'packages' => $packages]);
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
        $product = ImageTemplate::findOrFail($id);

        $validation = \Validator::make($request->all(), [
            "packages_id" => "required",
            "nama" => "required",
            "harga" => "required",
            "deskripsi" => "required",
        ])->validate();

        $product->packages_id = $request->get('packages_id');
        $product->nama = $request->get('nama');
        $product->harga = $request->get('harga');
        $product->deskripsi = $request->get('deskripsi');

        if ($request->file('thumbnail')) {
            if ($product->thumbnail && file_exists(storage_path('app/public/thumbnail_gambar' . $product->thumbnail))) {
                \Storage::delete('public/thumbnail_gambar' . $product->thumbnail);
            }
            $thumbnail_file = $request->file('thumbnail')->store('thumbnail_gambar', 'public');
            $product->thumbnail = $thumbnail_file;
        }

        $product->update();

        return redirect()->route('produk-gambar.index')->with('status', 'Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = ImageTemplate::findOrFail($id);
        $product->delete();

        return redirect()->route('produk-gambar.index')->with('status', 'Data successfully deleted');
    }
}
