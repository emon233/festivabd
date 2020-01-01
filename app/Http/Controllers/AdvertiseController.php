<?php

namespace App\Http\Controllers;

use File;
use Storage;
use Response;
use App\Advertise;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    /**
     * Show Image on front end
     *
     * @param [type] $fileName
     * @return \Illuminate\Http\RedirectResponse
     */
    public function displayImage($fileName)
    {
        $path = storage_path('app/public/ads/' . $fileName);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    /**
     * All Advertises List
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $advertises = Advertise::all();

        return view('setups.advertises.index', compact('advertises'));
    }

    /**
     * Advertise Create
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('setups.advertises.create');
    }

    /**
     * Store New Advertise
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $advData = $request->except('image');
        $image = $this->imageUpload($request->file('image'));

        $advData['image'] = str_replace('ads/', '', $image);
        $adv = Advertise::create($advData);
        return redirect()->route('advertises.index');
    }

    /**
     * Delete Advertise
     *
     * @param Advertise $advertise
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Advertise $advertise)
    {
        $advertise->delete();
        return redirect()->route('advertises.index');
    }

    /**
     * Image Upload Function
     *
     * @param [type] $image
     * @return void
     */
    protected function imageUpload($image)
    {
        if (!empty($image)) {
            return $image->store('ads', 'public');
        }
        return null;
    }
}
