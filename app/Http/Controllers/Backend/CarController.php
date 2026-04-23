<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CarRequest;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\PricingRule;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        view()->share('activeCarParent', true);
        view()->share('activeCarList', true);
        $this->imageService = $imageService;
    }

    public function index(Request $request)
    {
        // dd($request);
        $limit = request()->limit ?? 10;
        $cars = Car::select([
            'id', 'brand_id', 'car_type_id', 'model', 'image_url', 'license_plate', 'status' 
        ])->search($request)->orderBy('updated_at', 'DESC')->paginate($limit);
        $brands = Brand::select(['id', 'name', 'logo'])->get();
        $car_types = CarType::select(['id', 'name'])->get();
        return view('backend.car.index', compact('cars','brands', 'car_types'));
    }
    
    public function create()
    {
        $brands = Brand::get();
        $car_types = CarType::get();

        return view('backend.car.create', compact('brands', 'car_types'));
    }

    public function store(CarRequest $request)
    {
        // dump('Controller');
        // dd($request);
        $slug = $this->sluggable($request->model);

        $image_url = $request->hasFile('image_url') 
            ? $this->imageService->upload($request->image_url, 'cars', $slug)
            : "http://127.0.0.1:8000/theme/backend/assets/app/media/img/bg/blank-image.svg";

        $car = Car::create([
            'brand_id'      =>  $request->brand_id,
            'car_type_id'   =>  $request->car_type_id,
            'model'         =>  $request->model,
            'slug'          =>  $slug,
            'year'          =>  $request->year,
            'image_url'     =>  $image_url,
            'license_plate' =>  $request->license_plate,
            'seats'         =>  $request->seats,
            'transmission'  =>  $request->transmission,
            'fuel_type'     =>  $request->fuel_type,
            'fuel_consumption'  =>  $request->fuel_consumption,
            'mileage'       =>  $request->mileage,
            'status'        =>  $request->status,
            'description'   =>  $request->description,
        ]);

        if ($request->hasFile('car_images')) {
            foreach ($request->car_images as $car_image) {
                CarImage::create([
                    'car_id'    => $car->id,
                    'image_url' => $this->imageService->upload($car_image, 'car_images/'.$car->id, $car->slug),
                ]);
            }
        }

        PricingRule::create([
            'car_id'            => $car->id,
            'price_per_hour'    => $request->price_per_hour,
            'price_per_day'     => $request->price_per_day,
            'price_per_week'    => $request->price_per_week,
            'price_per_month'   => $request->price_per_month,
            'weekend_multiplier'=> $request->weekend_multiplier,
            'holiday_multiplier'=> $request->holiday_multiplier
        ]);

        return redirect()->route('backend.car.index')->with('success', 'New Car created successfully');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $car = Car::find($id);
        // Redirect when car not found by id
        if (!$car) { return redirect()->route('backend.car.index')->with('danger','The car was not found in the database'); }

        $brands = Brand::get();
        $car_types = CarType::get();
        return view('backend.car.edit', compact('car','brands','car_types'));
    }

    public function update(CarRequest $request, $id)
    {
        dd($request);
        $car = Car::find($id);
        // Redirect when car not found by id
        if (!$car) { return redirect()->route('backend.car.index')->with('danger','The car was not found in the database'); }

        // Delete old image_url(thumbnail) before updating with new image_url(thumbnail)
        if ($request->hasFile('image_url')) { $this->imageService->delete($car->image_url); }
        
        $car->fill($request->all()); // Bắt buộc có - dùng để kiểm tra isDirty
        
        // Only update the slug if the name has changed
        if ($car->isDirty('model')) { $car->slug = $this->sluggable($request->model); }

        // Update new image_url(thumbnail) to folder storage
        if ($request->hasFile('image_url')) {$car->image_url = $this->imageService->upload($request->image_url, 'cars', $car->slug); }

        if ($request->hasFile('car_images')) {
            foreach ($request->car_images as $car_image) {
                CarImage::create([
                    'car_id'    =>  $id,
                    'image_url' =>  $this->imageService->upload($car_image, 'car_images/'.$id, $car->slug),
                ]);
            }
        }

        if ($request->has('delete_image_ids')) { $this->imageService->deleteCarImages($request->delete_image_ids); }
        
        $dirty = $car->getDirty();
        if (empty($dirty)) { return redirect()->route('backend.car.index')->with('danger', 'Car updated false!');  }
        $car->update($dirty);

        return redirect()->route('backend.car.index')->with('success', 'Car updated successfully');
    }

    
    public function destroy($id)
    {
        $car = Car::find($id);
        dd($car);
        // Redirect when car not found by id
        if (!$car) { return redirect()->route('backend.car.index')->with('danger','The car was not found in the database'); }
        
        $this->imageService->delete($car->image_url);

        $carImages = CarImage::where('car_id', $car->id)->get();
        
        foreach ($carImages as $carImage) {
            if (!empty($carImage->image_url)) {
                $this->imageService->delete($carImage->image_url);
            }
        }
        
        CarImage::whereIn('car_id', [$car->id])->delete();

        $car->delete();

        return redirect()->route('backend.car.index')->with('success', 'Car deleted successfully');
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
