<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    function index()
    {
        $data = [
            'banner'  => Banner::first(),
            'service' => Service::limit(3)->get(),
            'about'  => About::first(),
            'contact'  => Contact::first(),
            'content' => 'Frontend/home/index'
        ];
        return view('Frontend.layouts.wrapper', $data);
    }

    function about()
    {
        $data = [
            'about'  => About::first(),
            'content' => 'Frontend/about/index'
        ];
        return view('Frontend.layouts.wrapper', $data);
    }

    function service()
    {
        $data = [
            'service' => Service::get(),
            'content' => 'Frontend/service/index'
        ];
        return view('Frontend.layouts.wrapper', $data);
    }
}