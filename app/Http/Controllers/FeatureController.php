<?php

namespace App\Http\Controllers;

use App\Package;
use App\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function store(Request $request)
    {
        $feature = Feature::create($request->all());

        return redirect()->back();
    }

    public function edit(Feature $feature)
    {
        return view(
            'setups.features.edit',
            compact('feature')
        );
    }

    public function update(Request $request, Feature $feature)
    {
        $feature->update($request->all());

        return redirect()->route('packages.features', $feature->package_id);
    }

    public function destroy(Feature $feature)
    {
        $package = $feature->package_id;
        $feature->delete();

        return redirect()->route('packages.features', $package);
    }
}
