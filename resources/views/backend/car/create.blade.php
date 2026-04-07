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
        <a href="{{ route('backend.product.index') }}" class="m-nav__link">
            <span class="m-link m--font-bold">Back to all Products</span>
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
                <form method="POST" action="{{route('backend.product.create')}}" class="m-form m-form--fit m-form--label-align-right" enctype="multipart/form-data">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
                            <label for="name"><span class="m--font-boldest">Tên <span class="text-danger">*</span></span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror m-input m-input--square mb-1" id="name" name="name" autofocus placeholder="Nhập tên sản phẩm" value="{{ old('name') }}">
                            @error('name')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group m-form__group row">
                            <div class="col-lg-4">
                                <label for="code"><span class="m--font-boldest">Mã <span class="text-danger">*</span></span></label>
                                <input type="text" class="form-control @error('code') is-invalid @enderror m-input m-input--square mb-1" id="code" name="code" placeholder="Nhập mã sản phẩm" value="{{ old('code') }}">
                                @error('code')
                                    <span class="form__help text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-8">
                                <label for="slug"><span class="m--font-boldest">Đường dẫn tĩnh</span></label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror m-input m-input--square mb-1" id="slug" name="slug" value="{{ old('slug') }}">
                                @error('slug')
                                    <span class="form__help text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group m-form__group">
                            <label class="col-form-label" for="e_commerce_platform_id"><span class="m--font-boldest">Sàn Affiliate</span></label>
                            <select class="form-control m-bootstrap-select m_selectpicker" id="e_commerce_platform_id" name="e_commerce_platform_id" data-live-search="true">
                                @foreach($eCommercePlatforms as $eCommercePlatform)
                                    <option value="{{ $eCommercePlatform->id }}" {{ $eCommercePlatform->id == old('e_commerce_platform_id') ? 'selected' : '' }}>{{ $eCommercePlatform->name }}</option>
                                @endforeach
                            </select>
                            @error('e_commerce_platform_id')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group m-form__group">
                            <label for="link_aff"><span class="m--font-boldest">Link Affiliate <span class="text-danger">*</span></span></label>
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" class="form-control @error('link_aff') is-invalid @enderror m-input m-input--square mb-1" id="link_aff" name="link_aff" placeholder="Nhập Link Affiliate" value="{{ old('link_aff') }}">
                                <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-link"></i></span></span>
                            </div>
                            @error('link_aff')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group m-form__group">
                            <label for="thumb_url"><span class="m--font-boldest">Ảnh</span></label>
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img style="width: 125px; height: 125px; object-fit: cover;" id="preImage" src="{{ asset('theme/backend/assets/app/media/img/bg/blank-image.svg')}}" alt="">
                                </div>
                            </div>
                            <span class="m-form__help">Allowed file types: png, jpg, jpeg.</span>
                        </div>
                        <div class="form-group m-form__group">
                            <div class="custom-file mb-1">
                                <input type="file" class="@error('thumb_url') is-invalid @enderror custom-file-input" value="{{ old('thumb_url') }}" id="uploadImage" name="thumb_url">
                                <label class="custom-file-label" for="Chọn file">Select file image</label>
                            </div>
                            @error('thumb_url')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group m-form__group row">
                            <div class="col-lg-7">
                                <label for="price"><span class="m--font-boldest">Giá</span></label>
                                <div class="m-input-icon m-input-icon--right">
                                    <input type="text" class="form-control @error('price') is-invalid @enderror m-input m-input--square mb-1" id="price" name="price" placeholder="150000" value="{{ old('price') }}">
                                    <span class="m-input-icon__icon m-input-icon__icon--right"><span><i>VND</i></span></span>
                                </div>
                                @error('price')
                                    <span class="form__help text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-5">
                                <label><span class="m--font-boldest">Trạng thái</span></label>
                                <div class="m-radio-inline">
                                    <label class="m-radio m-radio--solid">
                                        <input type="radio" name="status" checked="" value="1"> Active
                                        <span></span>
                                    </label>
                                    <label class="m-radio m-radio--solid">
                                        <input type="radio" name="status" value="2"> Inactive
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m--align-right">
                            <a href="{{ route('backend.product.index') }}" class="btn btn-secondary">Cancel</a>
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
<script>
    const uploadImage = $('#uploadImage');
    const preImage = $('#preImage');

    uploadImage.change(function (e) {
        file = this.files[0];
        
        if (e.target.files.length) {
            let reader = new FileReader();
            reader.onload = function (event) {
                preImage.attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection