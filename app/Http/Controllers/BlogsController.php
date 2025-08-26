<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\files;
use App\Models\images;
use App\Models\categories;
use Illuminate\Support\Facades\Log;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = blogs::with(['categories', 'images', 'images.files'])->get();
        return view('admin.pages.blogs.blog', compact('blogs'));
    }

    public function store(Request $request)
    {
        try {
            // $data = $request->validate([
            //     'category_id' => 'required|integer',
            //     'slug' => 'required|string|max:255',
            //     'title' => 'required|string|max:255',
            //     'context' => 'required|string',
            //     'date_issued' => 'required|date',
            //     'read_duration' => 'required|integer',
            //     'cover_image_id' => 'required|integer',
            // ]);

            DB::beginTransaction();

            //get the current user id
            $user = auth()->user();

            $category = new categories();

            $category->description = $request->input('description');
            $category->save();

            $files = new files();

            if ($request->has('file')) {
                $file = $request->file('file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $filePath = $file->move(public_path('uploads'), $fileName);
                $filePath = 'uploads/' . $fileName;
                $files->image_path = $filePath;
                $files->save();
            }

            $image = new images();

            $image->uploaded_by_id = $user->id ?? null;
            $image->alt_text = $request->input('alt_text') ?? null;
            $image->file_id = $files->id;
            $image->save();

            $blog = new blogs();

            $blog->category_id = $category->id;
            $blog->slug = $request->input('slug');
            $blog->title = $request->input('title');
            $blog->context = $request->input('context');
            $blog->date_issued = $request->input('date_issued');
            $blog->read_duration = $request->input('read_duration');
            $blog->cover_image_id = $image->id;

            $blog->save();

            DB::commit();

            return redirect()->route('show.blogs')->with('success', 'Blog created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Blog store failed', [
                'message' => $e->getMessage(),
            ]);

            report($e);

            return back()->withErrors(['error' => 'An error occurred while creating the blog. Please try again.']);
        }
    }


    public function update(Request $request, $id)
    {
        try {

            $blog = blogs::with(['categories', 'images', 'images.files'])->findOrFail($id);

            DB::beginTransaction();

            // get current user
            $user = auth()->user();

            // ✅ Update Category
            $category = $blog->categories; // relationship must exist in Blog model
            if ($category) {
                $category->description = $request->input('description', $category->description);
                $category->save();
            }

            // ✅ Handle File Upload (if new file is provided)
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $filePath = $file->move(public_path('uploads'), $fileName);
                $filePath = 'uploads/' . $fileName;

                // update file record
                $fileModel = $blog->images->files ?? new files();
                $fileModel->image_path = $filePath;
                $fileModel->save();

                // update image record
                $image = $blog->images ?? new images();
                $image->uploaded_by_id = $user->id ?? $image->uploaded_by_id;
                $image->alt_text = $request->input('alt_text', $image->alt_text);
                $image->file_id = $fileModel->id;
                $image->save();

                $blog->cover_image_id = $image->id;
            } else {
                // just update alt_text if provided
                if ($blog->images) {
                    $blog->images->alt_text = $request->input('alt_text', $blog->images->alt_text);
                    $blog->images->save();
                }
            }

            // ✅ Update Blog
            $blog->slug = $request->input('slug', $blog->slug);
            $blog->title = $request->input('title', $blog->title);
            $blog->context = $request->input('context', $blog->context);
            $blog->date_issued = $request->input('date_issued', $blog->date_issued);
            $blog->read_duration = $request->input('read_duration', $blog->read_duration);
            $blog->save();

            DB::commit();

            return redirect()->route('show.blogs')->with('success', 'Blog updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Blog update failed', [
                'message' => $e->getMessage(),
            ]);

            return back()->withErrors(['error' => 'An error occurred while updating the blog. Please try again.']);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blogs $blogs)
    {
        //
    }
}
