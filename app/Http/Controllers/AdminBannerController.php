<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBannerController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen Banner Admin',
            'banner'  => Banner::first(),
            'content' => 'admin/banner/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request)
    {
       // dd($request->all());
       $banner = Banner::first();
       $data = $request->validate([
        'headline' => 'required',
        'desc' => 'required',
        // 'gambar' => 'required',
    ]);
    // Upload Gambar
    if($request->hasFile('gambar')){
        if($banner->gambar != null){
            unlink($banner->gambar);
        }
        $gambar = $request->file('gambar');
        $file_name = time() . '-' . $gambar->getClientOriginalName();
        $storage = 'uploads/banners/';
        $gambar->move($storage, $file_name);
        $data['gambar'] = $storage . $file_name;
    } else {
        $data['gambar'] = $banner->gambar;
    }
        $banner->update($data);
        Alert::success('Sukses', 'Data Berhasil diupdate');
        return redirect('/admin/banner');
    }
}