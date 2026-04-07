@extends('layouts.backend.app')
@section('title', 'Edit genre')
@section('subheader__title', 'Genre')
@section('subheader__breadcrumbs')
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">Edit genre</span>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <a href="{{ route('backend.genre.index') }}" class="m-nav__link">
            <span class="m-link m--font-bold">Back to all Genres</span>
        </a>
    </li>
@endsection
@section('content')
<div class="m-content">
    <div class="row">
        <div class="col-xl-8">
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear"></i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                Edit genre
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form method="POST" action="" class="m-form m-form--fit m-form--label-align-right">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
                            <label for="g_name"><span class="m--font-boldest">Name <span class="text-danger">*</span></span></label>
                            <input type="text" class="form-control m-input m-input--square mb-1" id="g_name" name="g_name" placeholder="Enter genre name" value="{{ $genre->g_name }}">
                            @error('g_name')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group m-form__group">
                            <label for="g_slug"><span class="m--font-boldest">Slug</span></label>
                            <input type="text" class="form-control m-input m-input--square mb-1" id="g_slug" name="g_slug" placeholder="Enter genre slug" value="{{ $genre->g_slug }}">
                            @error('g_slug')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m--align-right">
                            <a href="{{ route('backend.genre.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update genre</button>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
        <div class="col-xl-3"></div>
    </div>
</div>
@endsection