<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BrandRequest;
use App\Models\Brand;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        view()->share('activeClassify', true);
        view()->share('activeBrand', true);
        $this->imageService = $imageService;
    }

    public function index()
    {
        $limit = request()->limit ?? 10;
        $brands = Brand::select([
            'id', 'name', 'slug', 'logo', 'created_at'
        ])->search()->orderBy('updated_at', 'DESC')->paginate($limit);
        // dd($brands);
        return view('backend.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    public function store(BrandRequest $request)
    {
        is_null($request->slug) ? $slug = $this->sluggable($request->name) : $slug = $this->sluggable($request->slug);

        $logo = $request->hasFile('logo') 
            ? $this->imageService->upload($request->file('logo'), 'brands', $slug)
            : "https://placehold.co/200x200?text={$slug}";

        Brand::create([
            'name' => $request->name,
            'slug' => $slug,
            'logo' => $logo
        ]);

        return redirect()->route('backend.brand.index')->with('success', 'Brand created successfully');
    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        dd($brand);
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        // Redirect when brand not found by id
        if (!$brand) { return redirect()->route('backend.brand.index')->with('danger','The brand was not found in the database'); }
        
        return view('backend.brand.edit', compact('brand'));
    }

    public function update(BrandRequest $request, $id)
    {
        // dd($request);
        $brand = Brand::find($id);
        
        // Redirect when brand not found by id
        if (!$brand) { return redirect()->route('backend.brand.index')->with('danger','The brand was not found in the database'); }
        // Delete old logo before updating with new logo
        if ($request->hasFile('logo')) { $this->imageService->delete($brand->logo); }
        
        $brand->fill($request->all()); // Bắt buộc có - dùng để kiểm tra isDirty
        
        // Only update the slug if the name has changed
        if ($brand->isDirty('slug')) {
            is_null($request->slug) ? $slug = $this->sluggable($request->name) : $slug = $this->sluggable($request->slug);
            $brand->slug = $slug;
        } else {
            $slug = $brand->slug;
        }

        // Update new logo to folder storage
        if ($request->hasFile('logo')) {$brand->logo = $this->imageService->upload($request->logo, 'brands', $slug); }

        $dirty = $brand->getDirty();
        
        if (empty($dirty)) {
            return redirect()->route('backend.brand.index')->with('danger', 'Brand updated false!');
        }

        $brand->update($dirty);

        return redirect()->route('backend.brand.index')->with('success', 'Brand updated successfully');
    }

    public function destroy($id)
    {
        dd('destroy brands');
    }

    public function sluggable($slug)
    {
        $originalSlug = Str::slug($slug);
        $currentSlug  = $originalSlug;
        $count = 1;
        while (Brand::where('slug', $currentSlug)->exists()) { // Check if Slug already exits, then add suffix to Slug
            $currentSlug = $originalSlug . '-' . $count++;
        }
        return $currentSlug;
    }
}
