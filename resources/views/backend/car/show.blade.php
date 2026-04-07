@extends('layouts.backend.app')
@section('title', 'Thông Tin Sản Phẩm')
@section('subheader__title', 'Thông Tin Sản Phẩm')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{ route('backend.dashboard') }}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">Sản Phẩm</span>
    </li>
@endsection
@section('content')
<div class="m-content">
    <div class="row">
        
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('theme/backend/assets/demo/default/custom/crud/forms/widgets/autosize.js')}}" type="text/javascript"></script>
@endsection