<?php

namespace App\Service;

use App\Service\ImageService;
use Illuminate\Support\Facades\Storage;
use Modules\Course\Entities\Course;
use Modules\Course\Entities\CourseGallery;

class CourseImageService
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function create(Course $project, $image)
    {
        $imageSize = getimagesize($image);

        $productImage = new CourseGallery([
            'path' => $this->imageService->storeImage($image),
            'thumbnail_path' => $this->imageService->storeImage($image),
            'width' => $imageSize[0] ?? null,
            'height' => $imageSize[1] ?? null,
            'size' => $image->getSize(),
        ]);

        $this->imageService->createThumbnail( Storage::disk('public')->path($productImage['thumbnail_path']), null, 350);

        $project->courseGalleries()->save($productImage);

        return $productImage;
    }

    public function delete(CourseGallery $product)
    {
        foreach($product->images as $productImage) {
            $this->imageService->unlinkImage($productImage->path);
            $this->imageService->unlinkImage($productImage->thumbnail_path);
            $productImage->delete();
        }
        
        return true;
    }
}
