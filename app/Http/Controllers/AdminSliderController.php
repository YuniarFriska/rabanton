<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSliderController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Manajemen Slider',
            'slider' => Slider::get(),
            'content' => 'admin/slider/index'     
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Slider',
            'content' => 'admin/slider/add'     
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'headline' => 'required',
            'desc' => 'required',
            'gambar' => 'required',
        ]);

        //Fungsi Upload Gambar
        if($request->hasFile ('gambar')){
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();

            $storage = 'uploads/slider';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . '/' . $file_name;
        }else{
            $data['gambar'] = null;
        }

        Slider::create($data);
        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('/admin/slider');
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
        $data = [
            'title' => 'Edit Slider',
            'slider'  => Slider::find($id),
            'content' => 'admin/slider/add'     
        ];
        return view('admin.layouts.wrapper', $data);
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
        $slider = Slider::find($id);
        $data = $request->validate([
            'headline' => 'required',
            'desc' => 'required',
            // 'gambar' => 'required',
        ]);

        //Fungsi Upload Gambar
        if($request->hasFile ('gambar')){

            if($slider->gambar != null){
                unlink($slider->gambar);
            }

            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();

            $storage = 'uploads/slider';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . '/' . $file_name;
        }else{
            $data['gambar'] = $slider->gambar;
        }

        $slider->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate');
        return redirect('/admin/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);

        if($slider->gambar != null){
            unlink($slider->gambar);
        }
        
        $slider->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('/admin/slider');
    }
}
