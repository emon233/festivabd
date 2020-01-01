<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();

        return view(
            'setups.packages.index',
            compact('packages')
        );
    }

    public function create()
    {
        return view(
            'setups.packages.create'
        );
    }

    public function store(Request $request)
    {
        $package = Package::create($request->all());

        return redirect()->route('packages.features', $package->id);
    }

    public function features(Package $package)
    {
        return view(
            'setups.packages.features',
            compact('package')
        );
    }

    public function edit(Package $package)
    {
        return view(
            'setups.packages.edit',
            compact('package')
        );
    }

    public function update(Request $request, Package $package)
    {
        $package->update($request->all());

        return redirect()->route('packages.index');
    }

    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()->route('packages.index');
    }
}
