@extends('layouts.backend.app')
@section('title', 'Đổi Mật Khẩu')
@section('subheader__title', 'Đổi Mật Khẩu')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{ route('backend.dashboard') }}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">Đổi Mật Khẩu</span>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <a href="{{ route('backend.user.index') }}" class="m-nav__link">
            <span class="m-link m--font-bold">Back to all Users</span>
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
                            <h3 class="m-portlet__head-text">Đổi Mật Khẩu</h3>
                        </div>
                    </div>
                </div>

                <!--begin::Form-->
                <form method="POST" action="" class="m-form m-form--fit m-form--label-align-right" enctype="multipart/form-data">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
                            <label for="password"><span class="m--font-boldest">Password <span class="text-danger">*</span></span></label>
                            <input type="password" class="form-control m-input m-input--square mb-1" id="password" name="password" placeholder="********" value="{{ old('password') }}">
                            @error('password')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group m-form__group">
                            <label for="confirmed"><span class="m--font-boldest">Password Confirmation <span class="text-danger">*</span></span></label>
                            <input type="password" class="form-control m-input m-input--square mb-1" id="confirmed" name="confirmed" placeholder="********" value="{{ old('confirmed') }}">
                            @error('confirmed')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m--align-right">
                            <a href="{{ route('backend.user.index') }}" class="btn btn-secondary"><i class="la la-ban"></i> Cancel</a>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </div>
                    </div>
                </form>

                <!--end::Form-->
            </div>
        </div>
        <div class="col-xl-3"></div>
    </div>

    <!--End::Section-->
</div>
@endsection