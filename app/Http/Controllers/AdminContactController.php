<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminContactController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen Contact Admin',
            'contact'  => Contact::first(),
            'content' => 'admin/contact/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request)
    {
       // dd($request->all());
       $contact = Contact::first();
       $data = $request->validate([
        'nomor' => 'required',
        'email' => 'required',
        'alamat' => 'required',
        'waktu' => 'required',
        'UrlGoogleMap' => 'required',
    ]);
        $contact->update($data);
        Alert::success('Sukses', 'Data Berhasil diupdate');
        return redirect('/admin/contact');
    }
}