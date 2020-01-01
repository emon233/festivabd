<?php

namespace App\Http\Controllers;

use App\Advertise;
use App\Category;
use App\Gallery;
use App\Package;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $advertises = Advertise::orderBy('serial', 'asc')->get();
        $categories = Category::all();
        $galleries = Gallery::all();

        return view(
            'index',
            compact('advertises', 'categories', 'galleries')
        );
    }

    public function services()
    {
        $packages = Package::orderBy('serial', 'asc')->get();

        return view(
            'services',
            compact('packages')
        );
    }
}
