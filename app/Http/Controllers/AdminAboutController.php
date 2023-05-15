<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminAboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen About Admin',
            'about'  => About::first(),
            'content' => 'admin/about/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request)
    {
       // dd($request->all());
       $about = About::first();
       $data = $request->validate([
        'name' => 'required',
        'desc' => 'required',
        // 'gambar' => 'required',
    ]);
    // Upload Gambar
    if($request->hasFile('gambar')){
        if($about->gambar != null){
            unlink($about->gambar);
        }
        $gambar = $request->file('gambar');
        $file_name = time() . '-' . $gambar->getClientOriginalName();
        $storage = 'uploads/abouts/';
        $gambar->move($storage, $file_name);
        $data['gambar'] = $storage . $file_name;
    } else {
        $data['gambar'] = $about->gambar;
    }
        $about->update($data);
        Alert::success('Sukses', 'Data Berhasil diupdate');
        return redirect('/admin/about');
    }
}