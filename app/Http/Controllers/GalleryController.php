<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Category;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * All Galleries List
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $galleries = Gallery::all();

        return view(
            'setups.galleries.index',
            compact('galleries')
        );
    }

    /**
     * Gallery Create
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view(
            'setups.galleries.create',
            compact('categories')
        );
    }

    /**
     * Store a new Gallery
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $gallery = Gallery::create($request->all());

        return redirect()->route('galleries.images', $gallery->id);
    }

    /**
     * Show Images of a Gallery
     *
     * @param Gallery $gallery
     * @return \Illuminate\View\View
     */
    public function images(Gallery $gallery)
    {
        return view('setups.galleries.show', compact('gallery'));
    }

    /**
     * Edit a Gallery
     *
     * @param Gallery $gallery
     * @return \Illuminate\View\View
     */
    public function edit(Gallery $gallery)
    {
        $categories = Category::all();

        return view(
            'setups.galleries.edit',
            compact('gallery', 'categories')
        );
    }

    /**
     * Update a Gallery
     *
     * @param Request $request
     * @param Gallery $gallery
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Gallery $gallery)
    {
        $gallery->update($request->all());
        return redirect()->route('galleries.images', $gallery->id);
    }

    /**
     * Delete a Gallery
     *
     * @param Gallery $gallery
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('galleries.index');
    }
}
