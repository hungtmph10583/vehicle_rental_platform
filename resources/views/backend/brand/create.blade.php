@extends('layouts.backend.app')
@section('title', 'Thêm Hãng Xe')
@section('subheader__title', 'Thêm Hãng Xe')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{ route('backend.dashboard') }}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">Thêm Hãng Xe</span>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <a href="{{ route('backend.brand.index') }}" class="m-nav__link">
            <span class="m-link m--font-bold">Back to all Brands</span>
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
                                Thêm Hãng Xe
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form method="POST" action="{{route('backend.brand.create')}}" class="m-form m-form--fit m-form--label-align-right" enctype="multipart/form-data">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
                            <label for="name"><span class="m--font-boldest">Tên hãng xe <span class="text-danger">*</span></span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror m-input m-input--square mb-1" id="name" name="name" autofocus placeholder="Nhập tên hãng xe" value="{{ old('name') }}">
                            @error('name')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group m-form__group row">
                            <div class="col-lg-8">
                                <label for="slug"><span class="m--font-boldest">Đường đẫn tĩnh</span></label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror m-input m-input--square mb-1" id="slug" name="slug" value="{{ old('slug') }}" placeholder="danh-muc">
                                @error('slug')
                                    <span class="form__help text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <!-- <div class="col-lg-4">
                                <label><span class="m--font-boldest">Trạng thái</span></label>
                                <div class="m-radio-inline">
                                    <label class="m-radio">
                                        <input type="radio" name="status" value="1" checked="checked"> Active
                                        <span></span>
                                    </label>
                                    <label class="m-radio">
                                        <input type="radio" name="status" value="2"> Inactive
                                        <span></span>
                                    </label>
                                </div>
                            </div> -->
                        </div>
                        <div class="form-group m-form__group">
                            <label for="logo"><span class="m--font-boldest">Thumbnail</span></label>
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img style="width: 125px; height: 125px; object-fit: cover;" id="preImage" src="{{ asset('theme/backend/assets/app/media/img/bg/blank-image.svg')}}" alt="">
                                </div>
                            </div>
                            <span class="m-form__help">Allowed file types: png, jpg, jpeg.</span>
                        </div>
                        <div class="form-group m-form__group">
                            <div class="custom-file mb-1">
                                <input type="file" class="@error('logo') is-invalid @enderror custom-file-input" value="{{ old('logo') }}" id="uploadImage" name="logo">
                                <label class="custom-file-label" for="Chọn file">Select file image</label>
                            </div>
                            @error('logo')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m--align-right">
                            <a href="{{ route('backend.brand.index') }}" class="btn btn-secondary">Cancel</a>
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
    $(document).ready(function() {
        const uploadImage = $('#uploadImage');
        const preImage = $('#preImage');

        preImage.on('click', function() {
            uploadImage.click();
        });

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
    });
</script>
@endsection