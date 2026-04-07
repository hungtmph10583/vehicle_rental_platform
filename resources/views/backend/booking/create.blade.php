@extends('layouts.backend.app')
@section('title', 'Add group')
@section('subheader__title', 'Group')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{route('backend.dashboard')}}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">Add group</span>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <a href="{{ route('backend.group.index') }}" class="m-nav__link">
            <span class="m-link m--font-bold">Back to all Groups</span>
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
                                Add group
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form method="POST" action="{{route('backend.group.create')}}" class="m-form m-form--fit m-form--label-align-right">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
                            <label for="name"><span class="m--font-boldest">Name <span class="text-danger">*</span></span></label>
                            <input type="text" class="form-control m-input m-input--square mb-1" id="name" name="name" placeholder="Enter group name" value="{{ old('name') }}">
                            @error('name')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group m-form__group">
                            <label for="slug"><span class="m--font-boldest">Slug</span></label>
                            <input type="text" class="form-control m-input m-input--square mb-1" id="slug" name="slug" placeholder="Enter group slug" value="{{ old('slug') }}">
                            @error('slug')
                                <span class="form__help text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m--align-right">
                            <a href="{{ route('backend.group.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save group</button>
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
@section('pagejs')
<script>
    $(document).ready(function() {
        let searchTimer;
        $('#search-product').on('input', function() {
            let query = $(this).val();
            clearTimeout(searchTimer);

            searchTimer =  setTimeout(() => {
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "GET",
                    data: {'query': query},
                    success: function(data) {
                        $('#search-results').html('');
                        data.forEach(function(product) {
                            $('#search-results').append('<p>' + product.name + '</p>');
                        });
                    }
                });
            }, 300);
        });
    });
</script>
@endsection