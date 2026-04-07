<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarType;
use App\Services\ImageService;
use Illuminate\Http\Request;

class CarController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        view()->share('activeCarParent', true);
        view()->share('activeCarList', true);
        $this->imageService = $imageService;
    }

    public function index()
    {
        $limit = request()->limit ?? 10;
        $cars = Car::select([
            'brand_id', 'car_type_id', 'model', 'image_url', 'license_plate', 'status' 
        ])->orderBy('updated_at', 'DESC')->paginate($limit);
        $brands = Brand::select(['id', 'name', 'logo'])->get();
        $car_types = CarType::select(['id', 'name'])->get();
        return view('backend.car.index', compact('cars','brands', 'car_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
