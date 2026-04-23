@extends('layouts.backend.app')
@section('title', 'Danh sách Xe')
@section('subheader__title', 'Danh sách Xe')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{ route('backend.dashboard') }}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">Danh sách Xe</span>
    </li>
@endsection
@section('content')
<div class="m-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="m-portlet m-portlet--mobile ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Danh sách Xe
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="{{route('backend.car.create')}}" class="btn btn-brand m-btn m-btn--icon">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>Thêm Xe Mới</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin: Search Form -->
                    <form class="m-form m-form--fit m--margin-bottom-20">
                        <div class="row m--margin-bottom-20">
                            <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                <label>Search:</label>
                                <input type="text" class="form-control m-input" placeholder="Keyword" name="keyword" value="{{ isset(request()->keyword) ? request()->keyword : '' }}">
                            </div>
                            <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                <label>Hãng Xe:</label>
                                <select class="form-control m-bootstrap-select m_selectpicker" name="brand" id="brand">
                                    <option value="">All</option>
                                    @foreach($brands as $item)
                                        <option value="{{ $item->id }}" {{ request()->brand == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row m--margin-bottom-20">
                            <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                <label>Trạng Thái:</label>
                                <select class="form-control m-bootstrap-select m_selectpicker" name="status" id="status">
                                    <option value="">All</option>
                                    <option value="available" {{ request()->status == 'available' ? 'selected' : '' }}>Sẵn Có</option>
                                    <option value="booked" {{ request()->status == 'booked' ? 'selected' : '' }}>Đang sử dụng</option>
                                    <option value="maintenance" {{ request()->status == 'maintenance' ? 'selected' : '' }}>Bảo dưỡng</option>
                                </select>
                            </div>
                            <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                <label>Kiểu Xe:</label>
                                <select class="form-control m-bootstrap-select m_selectpicker" name="car_type" id="car_type">
                                    <option value="">All</option>
                                    @foreach($car_types as $item)
                                    <option value="{{ $item->id }}" {{ request()->car_type == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
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
                                <a href="{{ route('backend.car.index') }}" class="btn btn-secondary m-btn m-btn--icon {{ !request('keyword') && !request('brand') && !request('status') && !request('status') && !request('car_type') ? 'disabled' : '' }}" id="m_reset">
                                    <span>
                                        <i class="la la-close"></i>
                                        <span>Reset</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4 order-1 order-xl-2 m--align-right">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#m_modal_4" id="m_modal_add_group" style="display: none;">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>Tạo Group</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!--end: Search Form -->

                    <!--begin: Datatable -->
                    <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded" id="local_data">
                        <table class="m-datatable__table" id="datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
                            <thead class="m-datatable__head">
                                <tr class="m-datatable__row">
                                    <th data-field="RecordID" class="m-datatable__cell--center m-datatable__cell">
                                        <span style="width: 50px;" class="m--font-boldest">#</span>
                                    </th>
                                    <th data-field="Car" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 250px;">THÔNG TIN</span>
                                    </th>
                                    <th data-field="E-Commerce" class="m-datatable__cell m-datatable__cell--sort text-center">
                                        <span style="width: 150px;">HÃNG XE</span>
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
                                @foreach($cars as $item)
                                <tr class="m-datatable__row" style="left: 0px;">
                                    <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID">
                                        <span style="width: 50px;">
                                            <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="{{ $item->id }}" class="carId_select_check_box">&nbsp;<span></span>
                                            </label>
                                        </span>
                                    </td>
                                    <td data-field="Car" class="m-datatable__cell">
                                        <span style="width: 250px;">
                                            @if(!empty($item->image_url))
                                                <img src="{{ asset( $item->image_url ) }}" class="rounded m--marginless" style="width: 40px; height: 40px; overflow: hidden; object-fit: cover;" alt="" />
                                            @else
                                                <img src="{{ asset('theme/backend/assets/app/media/img/bg/blank-image.svg') }}" class="rounded m--marginless" style="width: 40px; height: 40px; overflow: hidden; object-fit: cover;" alt="" />
                                            @endif
                                            <span class="d-inline-block text-truncate pl-2" style="max-width: 200px;" class="text-bold">
                                                <span class="text-capitalize m--font-boldest">{{ $item->model }}</span>
                                            </span>
                                        </span>
                                    </td>
                                    <td data-field="Type" class="m-datatable__cell">
                                        <span style="width: 150px;" class="text-center">
                                            <img src="{{ asset( $item->brand->logo )}}" class="m--img-rounded m--marginless" style="width: 40px; height: auto; overflow: hidden; object-fit: cover;" alt="{{ $item->brand->name }}" />
                                            <p class="text-capitalize m--font-boldest pl-2">{{ $item->brand->name }}</p>
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
                                                    <a class="dropdown-item" href="{{ route('backend.car.show', [$item->id]) }}" title="Preview">Preview</a>
                                                    <a class="dropdown-item" href="{{ route('backend.car.edit', [$item->id]) }}" title="Edit">Edit</a>
                                                    <a class="dropdown-item" href="{{ route('backend.car.destroy', [$item->id]) }}" title="Delete">Delete</a>
                                                    @can('delete cars')
                                                    <a class="dropdown-item destroy_car" href="javascript:void(0);" data-url="{{ route('api.car.destroy', [$item->id]) }}" title="Delete">Delete</a>
                                                    @endcan
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                                @if($cars->isEmpty())
                                    <tr class="m-datatable__row">
                                        <td class="m-datatable__cell"><span class="py-3 text-center">Không tìm thấy bản ghi nào.</span></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
                            {{ $cars->links('layouts.backend.pagination') }}
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
        $(document).on('click', '.destroy_car', function (e) {      
            let url = $(this).data('url');
            let carItem = $(this).parents("tr");
            swal({
                title:"Bạn Muốn Xóa Xe Này?",
                text:"Vẫn có thể khôi phục lại sau khi xóa!",
                type:"warning",showCancelButton:!0,
                confirmButtonText:"Xóa Xe!"
            }).then(function(result){
                if (!result.value) { return; }
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                    },
                    url: url,
                    type: 'DELETE',
                    success: function(res) {
                        if (res.code == 200) { carItem.remove(); }
                        if (res.message) {
                            swal({
                                position:"top-right",
                                type:res.message.type,
                                title:res.message.title,
                                html:res.message.content,
                                showConfirmButton:!1,timer:2000
                            })
                        }
                    },
                    error: function(){
                        result.value&&swal('Không thể gửi yêu cầu xóa xe này!','Kiểm tra lại thẻ <meta> X-CSRF-TOKEN','error')
                    }
                });
            })
        });

        $('#status').change(function() { $('#m_search').click(); })

        $('#brand').change(function() { $('#m_search').click(); })

        $('#car_type').change(function() { $('#m_search').click(); })

        let carIds = [];

        $('.carId_select_check_box').on('click', function() {
            let carId = $(this).val();
            if ($(this).is(':checked')) {
                if (!carIds.includes(carId)) { carIds.push(carId); }
            } else {
                var index = carIds.indexOf(carId);
                if (index !== -1) {
                    carIds.splice(index, 1);
                }
            }
            if (carIds.length > 0) { $('#m_modal_add_group').show(); } else { $('#m_modal_add_group').hide(); }
        })

        $('#m_modal_add_group').on('click', () => {
            swal({
                position:"top-right",
                type: 'info',
                title: 'Chưa Thể Sử Dụng',
                html: 'Tính năng đang được xây dựng!',
                showConfirmButton:!1,timer:2000
            })
        });

        // $('#submit_form_add_group').on('click', function(e) {
        //     e.preventDefault();
        //     let name = $('#name_group').val()
        //     let slug = $('#slug_group').val()
        //     console.log('send request')
        //     $.ajax({
        //         headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        //         url: `{{ route('api.brand.index') }}`,
        //         type: 'POST',
        //         dataType: 'json',
        //         data: {name:name, slug:slug, carIds:carIds},
        //         success: function(response) {
        //             console.log(response.data)
        //         },
        //         error: function(){
        //             result.value&&swal('Không thể gửi yêu cầu xóa xe này!','Kiểm tra lại thẻ <meta> X-CSRF-TOKEN','error')
        //         }
        //     })
        // })

    });
</script>
@endsection