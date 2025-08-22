<?php

namespace App\Http\Controllers;

use App\Models\banners;
use App\Models\files;
use App\Models\images;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = banners::with(['image', 'image.files'])->get();
        return view('admin.pages.homepageBanner', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alt_text' => 'nullable|string|max:255',
            'uploaded_by_id' => 'nullable|exists:users,id',
        ]);

        $files = new files();


        if ($request->has('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->move(public_path('uploads'), $fileName);
            $files->file = $fileName;
            $files->save();
        }

        $image = new images();

        $image->uploaded_by_id = $data['uploaded_by_id'] ?? null;
        $image->alt_text = $data['alt_text'] ?? null;
        $image->file_id = $files->id;
        $image->save();

        $banner = new banners();

        $banner->title = $request->input('title');
        $banner->context = $request->input('context');
        $banner->location = $request->input('location');
        $banner->link = $request->input('link');
        $banner->image_id = $image->id;
        $banner->save();


        //fresh
        $files->fresh();
        $image->fresh();
        $banner->fresh();
    }

    /**
     * Display the specified resource.
     */
    public function show(banners $banners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(banners $banners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, banners $banners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(banners $banners)
    {
        //
    }
}
