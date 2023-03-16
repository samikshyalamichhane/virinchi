<?php

namespace Modules\Course\Http\Controllers;

use App\Service\CourseImageService;
use App\Service\ImageService;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Course\Entities\Course;
use Modules\Course\Entities\CourseGallery;

class CourseGalleryController extends Controller
{
    public function __construct(ImageService $imageService, CourseImageService $projectImageService)
    {
        $this->imageService = $imageService;
        $this->projectImageService = $projectImageService;
    }
    public function index()
    {
        return view('project::index');
    }

    public function create($id)
    {
        $project = Course::findOrFail($id);
        return view('project::projectgallery.create',compact('project'));
    }

    public function listing(Course $product)
    {
        $productImages = $product->courseGalleries()->latest()->get();
        $productImages = $productImages->map(function ($productImage) {
            $productImage['url'] = $productImage->imageUrl();
            $productImage['readable_size'] = $productImage->getReadableSize($productImage->size);
            return $productImage;
        });

        return response()->json($productImages);
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $project = Course::findOrFail($request->course_id);
        $this->projectImageService->create($project, $request->file('file'));

        return response()->json([
            'success' => 'Image Saved'
        ]);
    }

    public function show($id)
    {
        return view('project::show');
    }

    public function edit($id)
    {
        return view('project::edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(CourseGallery $productImage)
    {
        try {
            $this->imageService->unlinkImage($productImage->path);
            $this->imageService->unlinkImage($productImage->thumbnail_path);
            $productImage->delete();

            return response()->json(null, 204);
        } catch (Exception $e) {
            return response()->json(null, 500);
        }
       
    }
}
