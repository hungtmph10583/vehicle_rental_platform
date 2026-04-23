@extends('layouts.backend.app')
@section('title', 'Thêm Sản Phẩm')
@section('subheader__title', 'Thêm Sản Phẩm')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{ route('backend.dashboard') }}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">Thêm Sản Phẩm</span>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <a href="{{ route('backend.car.index') }}" class="m-nav__link">
            <span class="m-link m--font-bold">Back to all Cars</span>
        </a>
    </li>
@endsection
@section('content')
<div class="m-content">
    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-9">
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear"></i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                Thêm Sản Phẩm
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form method="POST" action="" class="m-form m-form--fit m-form--label-align-right" enctype="multipart/form-data">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="m-form__section m-form__section--first">
                            <div class="m-form__heading">
                                <h3 class="m-form__heading-title">Thông Tin Xe:</h3>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-6">
                                    <label for="model"><span class="m--font-boldest">Tên Xe <span class="text-danger">*</span></span></label>
                                    <input type="text" class="form-control @error('model') is-invalid @enderror m-input m-input--square mb-1" id="model" name="model" autofocus placeholder="Nhập tên sản phẩm" value="{{ old('model') }}">
                                    @error('model')
                                        <span class="form__help text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <!-- <div class="col-lg-3">
                                    <label for="slug"><span class="m--font-boldest">Đường dẫn tĩnh</span></label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror m-input m-input--square mb-1" id="slug" name="slug" value="{{ old('slug') }}" placeholder="nhap-ten-san-pham">
                                    @error('slug')
                                        <span class="form__help text-danger">{{$message}}</span>
                                    @enderror
                                </div> -->
                                <div class="col-lg-6">
                                    <label for="license_plate"><span class="m--font-boldest">Biển Số Xe <span class="text-danger">*</span></span></label>
                                    <input type="text" class="form-control @error('license_plate') is-invalid @enderror m-input m-input--square mb-1" id="license_plate" name="license_plate" value="{{ old('license_plate') }}" placeholder="19-L1 911.99" maxlength="12">
                                    @error('license_plate')
                                        <span class="form__help text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-6">
                                    <label class="col-form-label" for="brand_id"><span class="m--font-boldest">Hãng Xe <span class="text-danger">*</span></span></label>
                                    <select class="form-control m-bootstrap-select m_selectpicker" id="brand_id" name="brand_id">
                                        <option value="">-- Chọn thương hiệu --</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ $brand->id == old('brand_id') ? 'selected' : '' }}>{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('brand_id')
                                        <span class="form__help text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label class="col-form-label" for="car_type_id"><span class="m--font-boldest">Kiểu Xe <span class="text-danger">*</span></span></label>
                                    <select class="form-control m-bootstrap-select m_selectpicker" id="car_type_id" name="car_type_id" data-live-search="true">
                                        @foreach($car_types as $car_type)
                                            <option value="{{ $car_type->id }}" {{ $car_type->id == old('car_type_id') ? 'selected' : '' }}>{{ $car_type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="m-form__seperator m-form__seperator--dashed  m-form__seperator--space m--margin-bottom-20"></div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-4">
                                    <label class="col-form-label" for="transmission"><span class="m--font-boldest">Loại hộp số <span class="text-danger">*</span></span></label>
                                    <select class="form-control m-bootstrap-select m_selectpicker" id="transmission" name="transmission" data-live-search="true">
                                        <option value="auto" {{ 'auto' == old('transmission') ? 'selected' : '' }}>Tự động</option>
                                        <option value="manual" {{ 'manual' == old('transmission') ? 'selected' : '' }}>Số sàn</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class="col-form-label" for="fuel_type"><span class="m--font-boldest">Nhiên Liệu Tiêu Thụ</span></label>
                                    <select class="form-control m-bootstrap-select m_selectpicker" id="fuel_type" name="fuel_type" data-live-search="true">
                                        <option value="gasoline" {{ 'gasoline' == old('fuel_type') ? 'selected' : '' }}>Xăng</option>
                                        <option value="diesel" {{ 'diesel' == old('fuel_type') ? 'selected' : '' }}>Dầu diesel</option>
                                        <option value="electric" {{ 'electric' == old('fuel_type') ? 'selected' : '' }}>Điện</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class="col-form-label" for="fuel_consumption"><span class="m--font-boldest" id="fuel_consumption_label">Mức tiêu thụ nhiên liệu (L/100km or kWh)</span></label>
                                    <input type="text" class="form-control @error('fuel_consumption') is-invalid @enderror m-input m-input--square mb-1" id="fuel_consumption" name="fuel_consumption" value="{{ old('fuel_consumption') }}" placeholder="Nhập vào số Lít nhiên liệu tiêu thụ">
                                    @error('fuel_consumption')
                                        <span class="form__help text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-4">
                                    <label class="col-form-label" for="year"><span class="m--font-boldest">Năm sản xuất <span class="text-danger">*</span></span></label>
                                    <input type="text" class="form-control @error('year') is-invalid @enderror m-input m-input--square mb-1" id="year" name="year" value="{{ old('year') }}" maxlength="4" inputmode="numeric" pattern="\d{4}" placeholder="2026">
                                    @error('year')
                                        <span class="form__help text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label class="col-form-label" for="seats"><span class="m--font-boldest">Số Ghế</span></label>
                                    <select class="form-control m-bootstrap-select m_selectpicker" id="seats" name="seats" data-live-search="true">
                                        <option value="2" {{ '2' == old('seats') ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ '3' == old('seats') ? 'selected' : '' }}>3</option>
                                        <option value="4" {{ '4' == old('seats') ? 'selected' : '' }} selected>4</option>
                                        <option value="6" {{ '6' == old('seats') ? 'selected' : '' }}>6</option>
                                        <option value="7" {{ '7' == old('seats') ? 'selected' : '' }}>7</option>
                                        <option value="8" {{ '8' == old('seats') ? 'selected' : '' }}>8</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class="col-form-label" for="status"><span class="m--font-boldest">Trạng Thái</span></label>
                                    <select class="form-control m-bootstrap-select m_selectpicker" id="status" name="status" data-live-search="true">
                                        <option value="available" {{ 'available' == old('status') ? 'selected' : '' }}>Sẵn có</option>
                                        <option value="booked" {{ 'booked' == old('status') ? 'selected' : '' }}>Đã đặt</option>
                                        <option value="maintenance" {{ 'maintenance' == old('status') ? 'selected' : '' }}>Bảo trì</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space m--margin-bottom-20"></div>
                        <div class="m-form__section m-form__section--last">
                            <div class="m-form__heading">
                                <h3 class="m-form__heading-title">Giá Thuê Xe:</h3>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-4">
                                    <label class="col-form-label" for="price_per_hour"><span class="m--font-boldest">Giá thuê theo giờ <span class="text-danger">*</span></span></label>
                                    <div class="input-group m-input-group">
                                        <input type="text" class="form-control @error('price_per_hour') is-invalid @enderror m-input m-input--square" id="price_per_hour_display" name="price_per_hour" value="{{ old('price_per_hour') }}" inputmode="numeric" placeholder="20.000">
                                        <input type="hidden" class="form-control m-input m-input--square" id="price_per_hour" name="price_per_hour">
                                        <div class="input-group-append"><span class="input-group-text">VND</span></div>
                                    </div>
                                    @error('price_per_hour')
                                        <span class="form__help text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label class="col-form-label" for="price_per_day"><span class="m--font-boldest">Giá thuê theo ngày <span class="text-danger">*</span></span></label>
                                    <div class="input-group m-input-group">
                                        <input type="text" class="form-control @error('price_per_day') is-invalid @enderror m-input m-input--square" id="price_per_day_display" name="price_per_day" value="{{ old('price_per_day') }}" inputmode="numeric" placeholder="800.000">
                                        <input type="hidden" class="form-control m-input m-input--square" id="price_per_day" name="price_per_day">
                                        <div class="input-group-append"><span class="input-group-text">VND</span></div>
                                    </div>
                                    @error('price_per_day')
                                        <span class="form__help text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label class="col-form-label" for="price_per_week"><span class="m--font-boldest">Giá thuê theo tuần <span class="text-danger">*</span></span></label>
                                    <div class="input-group m-input-group">
                                        <input type="text" class="form-control @error('price_per_week') is-invalid @enderror m-input m-input--square" id="price_per_week_display" name="price_per_week" value="{{ old('price_per_week') }}" inputmode="numeric" placeholder="6.400.000">
                                        <input type="hidden" class="form-control m-input m-input--square" id="price_per_week" name="price_per_week">
                                        <div class="input-group-append"><span class="input-group-text">VND</span></div>
                                    </div>
                                    @error('price_per_week')
                                        <span class="form__help text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-6">
                                    <label class="col-form-label" for="weekend_multiplier"><span class="m--font-boldest">Tăng giá cuối tuần (%)</span></label>
                                    <div class="input-group m-input-group">
                                        <input type="text" class="form-control @error('weekend_multiplier') is-invalid @enderror m-input m-input--square" id="weekend_multiplier" name="weekend_multiplier" value="{{ old('weekend_multiplier') }}" inputmode="numeric" placeholder="0 - 99.9%">
                                        <div class="input-group-append"><span class="input-group-text">%</span></div>
                                    </div>
                                    @error('weekend_multiplier')
                                        <span class="form__help text-danger">{{$message}}</span>
                                    @enderror
                                    </div>
                                <div class="col-lg-6">
                                    <label class="col-form-label" for="holiday_multiplier"><span class="m--font-boldest">Tăng giá ngày lễ (%)</span></label>
                                    <div class="input-group m-input-group">
                                        <input type="text" class="form-control @error('holiday_multiplier') is-invalid @enderror m-input m-input--square" id="holiday_multiplier" name="holiday_multiplier" value="{{ old('holiday_multiplier') }}" inputmode="numeric" placeholder="0 - 99.9%">
                                        <div class="input-group-append"><span class="input-group-text">%</span></div>
                                    </div>
                                    @error('holiday_multiplier')
                                        <span class="form__help text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space m--margin-bottom-40"></div>
                        <div class="m-form__section m-form__section--last">
                            <div class="m-form__heading">
                                <h3 class="m-form__heading-title">Ảnh Trưng Bày:</h3>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="image_url"><span class="m--font-boldest">Ảnh</span></label>
                                <div class="row mb-2">
                                    <div class="col-4">
                                        <img style="width: 125px; height: 125px; object-fit: cover;" id="preImage" src="{{ asset('theme/backend/assets/app/media/img/bg/blank-image.svg')}}" alt="">
                                    </div>
                                </div>
                                <span class="m-form__help">Allowed file types: png, jpg, jpeg.</span>
                            </div>
                            <div class="form-group m-form__group">
                                <div class="custom-file mb-1">
                                    <input type="file" class="@error('image_url') is-invalid @enderror custom-file-input" value="{{ old('image_url') }}" id="uploadImage" name="image_url">
                                    <label class="custom-file-label" for="Chọn file">Select file image</label>
                                </div>
                                @error('image_url')
                                    <span class="form__help text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group m-form__group ">
                            <label for="car_images">
                                <span class="m--font-boldest">Ảnh (Thumbnail)</span>
                            </label>
                            <table class="table table-stripped">
                                <thead>
                                    <th>Prev image</th>
                                    <th>File</th>
                                    <th>
                                        <button type="button" class="btn btn btn-sm btn-success m-btn m-btn--icon m-btn--wide addCarImages float-right">
                                            <span>
                                                <i class="la la-plus"></i>
                                                <span>Add image</span>
                                            </span>
                                        </button>
                                    </th>
                                </thead>
                                <tbody id="car_image">

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m--align-right">
                            <a href="{{ route('backend.car.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--End::Section-->
</div>
@endsection
@section('script')
<script src="{{ asset('theme/backend/assets/demo/default/custom/crud/forms/widgets/bootstrap-select.js')}}" type="text/javascript"></script>
<script src="{{ asset('theme/backend/assets/custom_js/previewImage.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/backend/assets/custom_js/car.js') }}" type="text/javascript"></script>
@endsection