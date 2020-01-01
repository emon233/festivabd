<?php

namespace App\Http\Controllers;

use File;
use Storage;
use Response;
use App\GalleryImage;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    /**
     * Show Image on front end
     *
     * @param [type] $fileName
     * @return \Illuminate\Http\RedirectResponse
     */
    public function displayImage($fileName)
    {
        $path = storage_path('app/public/gallery/' . $fileName);

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
     * Store Image For Gallery
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $imgData = $request->except('image');
        $image = $this->imageUpload($request->file('image'));

        $imgData['image'] = str_replace('gallery/', '', $image);
        $image = GalleryImage::create($imgData);

        return redirect()->route('galleries.images', $request['gallery_id']);
    }

    public function destroy(GalleryImage $galleryImage)
    {
        $gallery = $galleryImage->gallery_id;
        $galleryImage->delete();
        return redirect()->route('galleries.images', $gallery);
    }

    /**
     * Image Upload Function
     *
     * @param File $image
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function imageUpload($image)
    {
        if (!empty($image)) {
            return $image->store('gallery', 'public');
        }
        return null;
    }
}
