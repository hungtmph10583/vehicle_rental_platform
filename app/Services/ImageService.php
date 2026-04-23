<?php
namespace App\Services;

use App\Models\CarImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageService
{
    public function upload($fileImage, $folder = 'uploads', $slug = null)
    {
        if (!$fileImage) { return null; }
        // dump('file:'.$fileImage, 'folder: '.$folder, 'slug: '.$slug);
        
        // Nếu không có slug sẽ lấy tên file gốc
        $slug = $slug ?? Str::slug($fileImage->getClientOriginalName());

        $file_name = uniqid() . '-' . $slug . '.' . $fileImage->getClientOriginalExtension();
        $path = 'storage/' . $fileImage->storeAs('uploads/' . $folder, $file_name);
        // dump('path: '.$path);
        return $path;
    }

    public function delete($path) { Storage::delete(str_replace('storage/', '', $path)); }

    public function deleteCarImages($imageIds)
    {
        $imageIds = array_filter((array) $imageIds, 'is_numeric');

        if (empty($imageIds)) { return false; }
        
        $carImages = CarImage::whereIn('id', $imageIds)->get();
        // Xoá file vật lý
        foreach ($carImages as $carImage) {
            if (!empty($carImage->image_url)) {
                $this->delete($carImage->image_url); // nhớ handle tồn tại file bên trong
            }
        }
        // Xóa dữ liệu trong DB
        CarImage::whereIn('id', $imageIds)->delete();

        return true;
    }

    public function replace($oldPath, $fileImage, $folder, $slug)
    {
        // Delete old image by path
        $this->delete($oldPath);
        $this->upload($fileImage, $folder, $slug);
    }
}