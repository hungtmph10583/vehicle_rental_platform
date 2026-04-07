@extends('layouts.backend.app')
@section('title', 'Danh sách Hãng Xe')
@section('subheader__title', 'Hãng Xe')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{ route('backend.dashboard') }}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">Danh sách Hãng Xe</span>
    </li>
@endsection
@section('content')
<div class="m-content">
    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-10">
            <div class="m-portlet m-portlet--mobile ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Danh sách Hãng Xe
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="{{route('backend.brand.create')}}" class="btn btn-brand m-btn m-btn--icon">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>Thêm Hãng Xe</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin: Search Form -->
                    <form class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row m--margin-bottom-20">
                            <div class="col-lg-6 m--margin-bottom-10-tablet-and-mobile">
                                <label>Search:</label>
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input" placeholder="Tên hãng xe" name="search" id="generalSearch" value="{{ isset(request()->search) ? request()->search : '' }}">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                        <span><i class="la la-search"></i></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="m-separator m-separator--md m-separator--dashed"></div>
                        <div class="row">
                            <div class="col-lg-8">
                                <button class="btn btn-brand m-btn m-btn--icon" id="m_submit">
                                        <span>
                                    <i class="la la-search"></i>
                                    <span>Search</span>
                                </span>
                                </button> &nbsp;&nbsp;
                                <a href="{{ route('backend.brand.index') }}" class="btn btn-secondary m-btn m-btn--icon {{ !request('search') ? 'disabled' : '' }}" id="m_reset">
                                    <span>
                                        <i class="la la-close"></i>
                                        <span>Reset</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </form>
                    <!--end: Search Form -->

                    <!--begin: Datatable -->
                    <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded" id="local_data">
                        <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
                            <thead class="m-datatable__head">
                                <tr class="m-datatable__row">
                                    <th data-field="Name" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 250px;">NAME</span>
                                    </th>
                                    <th data-field="Thumbnail" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 150px;" class="text-center">THUMBNAIL</span>
                                    </th>
                                    <th data-field="Thumbnail" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 150px;" class="text-center">CARS</span>
                                    </th>
                                    <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort text-right">
                                        <span style="width: 110px; float: right;">ACTIONS</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="m-datatable__body">
                                @foreach($brands as $item)
                                <tr class="m-datatable__row" style="left: 0px;">
                                    <td data-field="Brand" class="m-datatable__cell">
                                        <span style="width: 250px;">
                                            <span class="d-inline-block text-truncate" style="max-width: 200px;" class="text-bold">
                                                <span class="text-capitalize m--font-boldest">{{ $item->name }}</span>
                                            </span>
                                        </span>
                                    </td>
                                    <td data-field="Thumbnail" class="m-datatable__cell">
                                        <span style="width: 150px;" class="text-center">
                                            @if(!empty($item->logo))
                                                <img src="{{ asset( $item->logo ) }}" class="rounded m--marginless" style="width: 40px; height: auto; overflow: hidden; object-fit: cover;" alt="{{ $item->name }}" />
                                            @endif
                                        </span>
                                    </td>
                                    <td data-field="Cars" class="m-datatable__cell">
                                        <span style="width: 150px;" class="text-center">
                                            {{ $item->cars->count() }}
                                        </span>
                                    </td>
                                    <td data-field="Actions" class="m-datatable__cell text-right">
                                        <span style="overflow: visible; position: relative; width: 110px; float: right;">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                                    <a class="dropdown-item" href="{{ route('backend.brand.edit', [$item->id]) }}" title="Edit">Edit</a>
                                                    <a class="dropdown-item destroy_brand" href="javascript:void(0);" data-url="{{ route('api.brand.destroy', [$item->id]) }}" title="Delete">Delete</a>
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                                @if($brands->isEmpty())
                                    <tr class="m-datatable__row">
                                        <td class="m-datatable__cell"><span class="py-3 text-center">Không tìm thấy bản ghi nào.</span></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
                            {{ $brands->links('layouts.backend.pagination') }}
                        </div>
                    </div>
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
    </div>

    <!--End::Section-->
</div>
@endsection
@section('script')
<script src="{{ asset('theme/backend/assets/demo/default/custom/crud/forms/widgets/bootstrap-select.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '.destroy_brand', function (e) {
            e.preventDefault();
            let url = $(this).data('url');
            let brandItem = $(this).parents("tr");

            swal({
                title:"Bạn muốn xóa Hãng Xe này?",
                text:"Bạn vẫn có thể khôi phục lại sau khi Xóa.",
                type:"warning",showCancelButton:!0,
                confirmButtonText:"Xóa Hãng Xe"
            }).then((confirm) => {
                if (!confirm.value) { console.log('return'); return; }
                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    url: url,
                    type: "DELETE",
                    dataType: 'json',
                    success: function(res){
                        if (res.code == 200) { brandItem.remove(); }
                        if (res.message) {
                            swal({
                                position:"top-right",
                                type:res.message.type,
                                title:res.message.title,
                                html:res.message.content,
                                showConfirmButton:!1,timer:1500
                            })
                        }
                    },
                    error: function(){
                        confirm.value&&swal('Không thể gửi yêu cầu xóa sản phẩm này!','Kiểm tra lại thẻ <meta> X-CSRF-TOKEN','error')
                    }
                });
            });
        });

        let query;
    });
</script>
@endsection