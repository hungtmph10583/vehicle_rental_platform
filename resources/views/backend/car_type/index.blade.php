@extends('layouts.demo12.app')
@section('title', 'Danh sách Sàn Affiliate')
@section('subheader__title', 'Sàn Affiliate')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{ route('backend.dashboard') }}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">Danh sách Sàn Affiliate</span>
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
                                Danh sách Sàn Affiliate
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="{{route('backend.eCommercePlatform.create')}}" class="btn btn-brand m-btn m-btn--icon create__e-commerce_platform">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>Thêm Sàn Affiliate</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <form class="m-form m-form--fit m--margin-bottom-20" action="">
                        <div class="row m--margin-bottom-20">
                            <div class="col-lg-6 m--margin-bottom-10-tablet-and-mobile">
                                <label>Search Name:</label>
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input" placeholder="Tên sàn affiliate" name="search" id="generalSearch" value="{{ isset(request()->search) ? request()->search : '' }}">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                        <span><i class="la la-search"></i></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 m--margin-bottom-10-tablet-and-mobile">
                                <label>Trạng Thái:</label>
                                <select class="form-control m-bootstrap-select m_selectpicker" name="status" id="m_status">
                                    <option selected="" value="">All</option>
                                    <option value="1" {{ request()->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="2" {{ request()->status == 2 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="m-separator m-separator--md m-separator--dashed"></div>
                        <div class="row">
                            <div class="col-lg-8">
                                <button type="submit" class="btn btn-brand m-btn m-btn--icon" id="m_submit">
                                    <span>
                                        <i class="la la-search"></i>
                                        <span>Search</span>
                                    </span>
                                </button> &nbsp;&nbsp;
                                <a href="{{ route('backend.eCommercePlatform.index') }}" class="btn btn-secondary m-btn m-btn--icon {{ !request('search') && !request('status') ? 'disabled' : '' }}">
                                    <span>
                                        <i class="la la-close"></i>
                                        <span>Reset</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded" id="local_data">
                        <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
                            <thead class="m-datatable__head">
                                <tr class="m-datatable__row">
                                    <th data-field="ECommercePlatform" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 220px;">E-Commerce Platform</span>
                                    </th>
                                    <th data-field="TotalProducts" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 150px;" class="text-center">SẢN PHẨM</span>
                                    </th>
                                    <th data-field="Status" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px;">TRẠNG THÁI</span>
                                    </th>
                                    <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px; float: right;">HÀNH ĐỘNG</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="m-datatable__body">
                                @foreach($eCommercePlatforms as $item)
                                <tr class="m-datatable__row" style="left: 0px;">
                                    <td data-field="ECommercePlatform" class="m-datatable__cell">
                                        <span style="width: 220px;">
                                            <div class="m-card-user m-card-user--sm">
                                                <div class="m-card-user__pic">
                                                    @if(!empty($item->logo_url))
                                                        <img src="{{ asset( $item->logo_url )}}" class="m--img-rounded m--marginless" style="width: 40px; height: 40px; overflow: hidden; object-fit: contain;" alt="" />
                                                    @else
                                                        <div class="m-card-user__no-photo m--bg-fill-danger"><span>M</span></div>
                                                    @endif
                                                </div>
                                                <div class="m-card-user__details">
                                                    <span class="m-card-user__name">{{ $item->name }}</span>
                                                    <a href="javascript:;" class="m-card-user__email m-link">{{ $item->email }}</a>
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                    <td data-field="TotalProducts" class="m-datatable__cell">
                                        <span style="width: 150px;" class="text-center">
                                            {{ $item->products_count }}
                                        </span>
                                    </td>
                                    <td data-field="Status" class="m-datatable__cell">
                                        <div style="width: 110px;">
                                            <span class="m-badge m-badge--{{ $item->getStatus($item->status)['class'] }} m-badge--wide">{{ $item->getStatus($item->status)['name'] }}</span>
                                        </div>
                                    </td>
                                    <td data-field="Actions" class="m-datatable__cell">
                                        <span style="overflow: visible; position: relative; width: 110px; float: right;">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                                    <a class="dropdown-item view_e-commerce_platform" href="javascript:void(0);">View</a>
                                                    <a class="dropdown-item edit_e-commerce_platform" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item destroy_e-commerce_platform" href="javascript:void(0);" data-href="#" title="Delete">Delete</a>
                                                    @if($item->deleted_at != null)
                                                    <a class="dropdown-item recover_e-commerce_platform" href="javascript:void(0);" data-href="#" title="Recover">Recover</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
                            {{ $eCommercePlatforms->links('layouts.backend.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('theme/backend/assets/demo/default/custom/crud/forms/widgets/bootstrap-select.js') }}" type="text/javascript"></script>
<script>

    // $(".destroy").click(function(e) {
    //     swal({
    //         title: "Are you sure?",
    //         text: "You won't be able to revert this user!",
    //         type: "warning",
    //         showCancelButton: !0,
    //         confirmButtonText: "Yes, delete this user!"
    //     }).then((e) => {
    //         if (e.value == true) {
    //             const locatedTr = $(this);
    //             $.ajax({
    //                 type: "DELETE",
    //                 url: $(this).data('href'),
    //                 headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    //                 success: function(response){
    //                     if (response.status == 200) { locatedTr.parents("tr").remove(); }
    //                     if (response.status) {
    //                         swal({
    //                             position: "top-right",
    //                             type: response.type,
    //                             title: response.title,
    //                             showConfirmButton: !1,
    //                             timer: 1500
    //                         })
    //                     }
    //                 },
    //                 error: function(){
    //                     console.log("ERROR");
    //                     swal("Has Error!", "An error has occurred.", "warning")
    //                 }
    //             });
    //         }
    //     })
    // })

    // $(".recover").click(function(e) {
    //     swal({
    //         title: "Are you sure?",
    //         text: "You won't be able to revert this user!",
    //         type: "warning",
    //         showCancelButton: !0,
    //         confirmButtonText: "Yes, recover this user!"
    //     }).then((e) => {
    //         if (e.value == true) {
    //             const locatedTr = $(this);
    //             $.ajax({
    //                 type: "GET",
    //                 url: $(this).data('href'),
    //                 headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    //                 success: function(response){
    //                     if (response.status == 200) { locatedTr.parents("tr").remove(); }
    //                     if (response.status) {
    //                         swal({
    //                             position: "top-right",
    //                             type: response.type,
    //                             title: response.title,
    //                             showConfirmButton: !1,
    //                             timer: 1500
    //                         })
    //                     }
    //                 },
    //                 error: function(){
    //                     console.log("ERROR");
    //                     swal("Has Error!", "An error has occurred.", "warning")
    //                 }
    //             });
    //         }
    //     })
    // })

    $('.create__e-commerce_platform').click(function(e) {
        e.preventDefault();
        swal("Thông báo!", "Tính năng này đang bảo trì.", "warning")
    })

    $('.view_e-commerce_platform').click(function() {
        swal("Thông báo!", "Tính năng này đang bảo trì.", "warning")
    })

    $('.edit_e-commerce_platform').click(function() {
        swal("Thông báo!", "Tính năng này đang bảo trì.", "warning")
    })

    $('.destroy_e-commerce_platform').click(function() {
        swal("Thông báo!", "Tính năng này đang bảo trì.", "warning")
    })

    $('.recover_e-commerce_platform').click(function() {
        swal("Thông báo!", "Tính năng này đang bảo trì.", "warning")
    })

    $('#m_status').change(function (e) { $('#m_submit').click(); })

</script>
@endsection