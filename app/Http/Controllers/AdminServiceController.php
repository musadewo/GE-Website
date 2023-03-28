<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Manajemen Service Admin',
            'service'  => Service::get(),
            'content' => 'admin/service/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Service Admin',
            'content' => 'admin/service/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'gambar' => 'required',
        ]);
        // Upload Gambar
        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();
            $storage = 'uploads/services/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        } else {
            $data['gambar'] = null;
        }
        Service::create($data);
        Alert::success('Sukses', 'Data Berhasil ditambah');
        return redirect('/admin/service');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'title' => 'Edit Service Admin',
            'service' => Service::find($id),
            'content' => 'admin/service/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:services,email,'.$service->id,
            // 'password' => 'min:3',
            're_password' => 'same:password'
        ]);
        if($request->password){
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $service->password;
        }
        $service->update($data);
        Alert::success('Sukses', 'Data Berhasil diupdate');
        return redirect('/admin/service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        $service->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('/admin/service');
    }
}