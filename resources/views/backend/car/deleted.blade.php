@extends('layouts.backend.app')
@section('title', 'Sản Phẩm Đã Xóa')
@section('subheader__title', 'Sản Phẩm Đã Xóa')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{ route('backend.dashboard') }}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <a href="{{ route('backend.product.index') }}" class="m-nav__link">
            <span class="m-nav__link-text">Danh Sách Sản Phẩm</span>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">Sản Phẩm Đã Xóa</span>
    </li>
@endsection
@section('content')
<div class="m-content">
    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-12">
            <div class="m-portlet m-portlet--mobile ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Sản Phẩm Đã Xóa
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin: Search Form -->
                    <form class="m-form m-form--fit m--margin-bottom-20">
                        <div class="row m--margin-bottom-20">
                            <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                <label>Search:</label>
                                <input type="text" class="form-control m-input" placeholder="Áo len" name="search" value="{{ isset(request()->search) ? request()->search : '' }}">
                            </div>
                            <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                <label>Mã:</label>
                                <input type="text" class="form-control m-input" placeholder="al357" name="code" value="{{ isset(request()->code) ? request()->code : '' }}">
                            </div>
                            <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                <label>Danh Mục:</label>
                                <select class="form-control m-bootstrap-select m_selectpicker" name="category" id="category">
                                    <option value="">All</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}" {{ request()->category == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row m--margin-bottom-20">
                            <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                <label>Trạng Thái:</label>
                                <select class="form-control m-bootstrap-select m_selectpicker" name="status" id="status">
                                    <option value="">All</option>
                                    <option value="1" {{ request()->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="2" {{ request()->status == 2 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                <label>Sàn Affiliate:</label>
                                <select class="form-control m-bootstrap-select m_selectpicker" name="ecmfl" id="ecmfl">
                                    <option value="">All</option>
                                    @foreach($eCommercePlatforms as $item)
                                    <option value="{{ $item->id }}" {{ request()->ecmfl == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="m-separator m-separator--md m-separator--dashed"></div>
                        <div class="row">
                            <div class="col-lg-8">
                                <button class="btn btn-brand m-btn m-btn--icon" id="m_search">
                                    <span>
                                        <i class="la la-search"></i>
                                        <span>Search</span>
                                    </span>
                                </button> &nbsp;&nbsp;
                                <a href="{{ route('backend.product.deleted') }}" class="btn btn-secondary m-btn m-btn--icon {{ !request('search') && !request('code') && !request('category') && !request('status') && !request('ecmfl') ? 'disabled' : '' }}" id="m_reset">
                                    <span>
                                        <i class="la la-close"></i>
                                        <span>Reset</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4 order-1 order-xl-2 m--align-right">
                                <a href="javascript:void(0);" class="btn btn-warning m-btn m-btn--icon" id="multiple-recover" style="display: none;">
                                    <span>
                                        <i class="la la-repeat"></i>
                                        <span>Khôi Phục</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </form>

                    <!--end: Search Form -->

                    <!--begin: Datatable -->
                    <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded"
                        id="local_data">
                        <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;" id="table_product_deleted">
                            <thead class="m-datatable__head">
                                <tr class="m-datatable__row">
                                    <th data-field="RecordID" class="m-datatable__cell--center m-datatable__cell">
                                        <span style="width: 50px;" class="m--font-boldest">#</span>
                                    </th>
                                    <th data-field="Product" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 250px;">SẢN PHẨM</span>
                                    </th>
                                    <th data-field="Code" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px;">MÃ</span>
                                    </th>
                                    <th data-field="E-Commerce" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 150px;">SÀN</span>
                                    </th>
                                    <th data-field="Status" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px;">TRẠNG THÁI</span>
                                    </th>
                                    <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort text-right">
                                        <span style="width: 110px; float: right;">HÀNH ĐỘNG</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="m-datatable__body">
                                @foreach($products as $item)
                                <tr class="m-datatable__row" style="left: 0px;">
                                    <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID">
                                        <span style="width: 50px;">
                                            <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="{{ $item->id }}" class="productId_select_check_box">&nbsp;<span></span>
                                            </label>
                                        </span>
                                    </td>
                                    <td data-field="Product" class="m-datatable__cell">
                                        <span style="width: 250px;">
                                            @if(!empty($item->thumb_url))
                                                <img src="{{ asset( $item->thumb_url ) }}" class="rounded m--marginless" style="width: 40px; height: 40px; overflow: hidden; object-fit: cover;" alt="" />
                                            @else
                                                <img src="{{ asset('theme/backend/assets/app/media/img/bg/blank-image.svg') }}" class="rounded m--marginless" style="width: 40px; height: 40px; overflow: hidden; object-fit: cover;" alt="" />
                                            @endif
                                            <span class="d-inline-block text-truncate pl-2" style="max-width: 200px;" class="text-bold">
                                                <span class="text-capitalize m--font-boldest">{{ $item->name }}</span>
                                            </span>
                                        </span>
                                    </td>
                                    <td data-field="Code" class="m-datatable__cell">
                                        <span class="d-inline-block text-truncate" style="width: 110px;" class="text-bold">
                                            <span class="text-capitalize m--font-boldest">{{ $item->code }}</span>
                                        </span>
                                    </td>
                                    <td data-field="Type" class="m-datatable__cell">
                                        <span style="width: 150px;">
                                            <img src="{{ asset( $item->e_commerce_platform->logo_url )}}" class="m--img-rounded m--marginless" style="width: 35px; height: 35px; overflow: hidden; object-fit: cover;" alt="" />
                                            <span class="text-capitalize m--font-boldest pl-2">{{ $item->e_commerce_platform->name }}</span>
                                        </span>
                                    </td>
                                    <td data-field="Status" class="m-datatable__cell">
                                        <span style="width: 110px;">
                                            <span class="m-badge m-badge--{{ $item->getStatus($item->status)['class'] }} m-badge--wide">{{ $item->getStatus($item->status)['name'] }}</span>
                                        </span>
                                    </td>
                                    <td data-field="Actions" class="m-datatable__cell text-right">
                                        <span style="overflow: visible; position: relative; width: 110px; float: right;">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                                    <a class="dropdown-item" href="{{ route('backend.product.show', [$item->id]) }}" title="Preview">Preview</a>
                                                    <a class="dropdown-item recover_product" href="javascript:void(0);" data-url="{{ route('api.product.recover', [$item->id]) }}" title="Recover">Recover</a>
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                                @if($products->isEmpty())
                                    <tr class="m-datatable__row">
                                        <td class="m-datatable__cell"><span class="py-3 text-center">Không tìm thấy bản ghi nào.</span></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
                            {{ $products->links('layouts.backend.pagination') }}
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
        $(document).on('click', '.recover_product', function (e) {      
            let url = $(this).data('url');
            let productItem = $(this).parents("tr");
            swal({
                title:"Bạn Muốn Khôi Phục Sản Phẩm Này?",
                text:"Khôi phục sản phẩm để tiếp tục sử dụng!",
                type:"info",showCancelButton:!0,
                confirmButtonText:"Khôi Phục!"
            }).then(function(result){
                if (!result.value) { console.log('return'); return; }
                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    url: url,
                    type: 'POST',
                    dataType: 'json',
                    success: function(res) {
                        if (res.code == 200) { productItem.remove(); }
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
                        result.value&&swal('Không thể gửi yêu cầu khôi phục sản phẩm này!','Kiểm tra lại thẻ <meta> X-CSRF-TOKEN','error')
                    }
                });
            })
        });

        $('#status').change(function() { $('#m_search').click(); })

        $('#ecmfl').change(function() { $('#m_search').click(); })

        $('#has_report').change(function() { $('#m_search').click(); })

        let productIds = [];

        // $('#table_product_deleted').on('click', 'tr', function() {
        //     let checkbox = $(this).find('input[type="checkbox"]');
        //     if (checkbox.length > 0) {
        //         let checkboxValue = checkbox.val();
        //         let isChecked = checkbox.checked;
        //         console.log('Checkbox value:', checkboxValue, 'Checked:', isChecked);
        //     }
        //     // let isChecked = checkbox.is(':checked');
        //     // console.log(checkbox.val());
        // })

        $('.productId_select_check_box').on('click', function() {
            let productId = $(this).val();
            if ($(this).is(':checked')) {
                if (!productIds.includes(productId)) { productIds.push(productId); }
            } else {
                var index = productIds.indexOf(productId);
                if (index !== -1) {
                    productIds.splice(index, 1);
                }
            }
            if (productIds.length > 0) {
                $('#multiple-recover').show();
            } else { $('#multiple-recover').hide(); }
        })

        $('#multiple-recover').click(() => {
            if (productIds.length > 0) {
                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    url: `{{ route('api.product.multiple.recover') }}`,
                    type: 'POST',
                    dataType: 'json',
                    data: {productIds:productIds},
                    success: function(res) {
                        if (res.message) {
                            swal({
                                position:"top-right",
                                type:res.message.type,
                                title:res.message.title,
                                html:res.message.content,
                                showConfirmButton:!1,timer:1500
                            })
                        }
                        $("input[class='productId_select_check_box']:checked").closest("tr").remove();
                        $('#multiple-recover').hide();
                        productIds.length = 0;
                    },
                    error: function(){
                        result.value&&swal('Không thể gửi yêu cầu khôi phục sản phẩm này!','Kiểm tra lại thẻ <meta> X-CSRF-TOKEN','error')
                    }
                })
            }
        });
    });
</script>
@endsection