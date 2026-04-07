@extends('layouts.backend.app')
@section('title', 'Tạo Tài Khoản')
@section('subheader__title', 'Tạo Tài Khoản')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{ route('backend.dashboard') }}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">Tạo Tài Khoản</span>
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
                            <h3 class="m-portlet__head-text">Tạo Tài Khoản</h3>
                        </div>
                    </div>
                </div>

                <!--begin::Form-->
                <form method="POST" action="" class="m-form m-form--fit m-form--label-align-right" enctype="multipart/form-data">
                    @csrf
                    <div class="m-portlet__body">
                        <!-- <div class="form-group m-form__group m--margin-top-10">
                            <div class="alert m-alert m-alert--default" role="alert">
                                For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default
                                form control.
                            </div>
                        </div> -->
                        <div class="form-group m-form__group">
                            <label for="avatar"><span class="m--font-boldest">Avatar</span></label>
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img style="width: 125px; height: 125px; object-fit: cover;" id="preImage" src="{{ asset('theme/backend/assets/app/media/img/bg/blank-image.svg')}}" alt="">
                                </div>
                            </div>
                            <span class="m-form__help">Allowed file types: png, jpg, jpeg.</span>
                        </div>
                        <div class="form-group m-form__group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="uploadImage" name="avatar">
                                <label class="custom-file-label" for="Chọn file">Select file image</label>
                            </div>
                            @error('avatar')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group m-form__group">
                            <label for="name"><span class="m--font-boldest">Name <span class="text-danger">*</span></span></label>
                            <input type="text" class="form-control m-input m-input--square mb-1" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                            @error('name')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group m-form__group">
                            <label for="username"><span class="m--font-boldest">Username <span class="text-danger">*</span></span></label>
                            <input type="text" class="form-control m-input m-input--square mb-1" id="username" name="username" placeholder="hung.tm" value="{{ old('username') }}">
                            @error('username')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group m-form__group">
                            <label for="email"><span class="m--font-boldest">Email <span class="text-danger">*</span></span></label>
                            <input type="text" class="form-control m-input m-input--square mb-1" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                            @error('email')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
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
                        <div class="form-group m-form__group">
                            <label><span class="m--font-boldest">Status</label>
                            <div class="m-radio-inline">
                                <label class="m-radio m-radio--solid">
                                    <input type="radio" name="status" checked="" value="1"> Active
                                    <span></span>
                                </label>
                                <label class="m-radio m-radio--solid">
                                    <input type="radio" name="status" value="2"> Inactive
                                    <span></span>
                                </label>
                                <label class="m-radio m-radio--solid">
                                    <input type="radio" name="status" value="3"> Suspended
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        @if(Auth::user()->hasPermissionTo('browse role'))
                        <div class="form-group m-form__group">
                            <label><span class="m--font-boldest">Role</label>
                            <div class="dropdown bootstrap-select form-control m-bootstrap-select m_">
                                <select class="form-control m-bootstrap-select m_selectpicker" name="role" data-live-search="true" tabindex="-98">
                                <option value="" class="m--hide">Do not grant a role to this user</option>
                                @foreach($roles as $item)
                                    <option value="{{ $item->name }}" {{ old('role') == $item->name ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m--align-right">
                            <a href="{{ route('backend.user.index') }}" class="btn btn-secondary"><i class="la la-ban"></i> Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
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

    $(document).ready(function() {
        $('#preImage').on('click', function() {
            $('#uploadImage').click();
        });
    });
</script>
@endsection