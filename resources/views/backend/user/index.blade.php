@extends('layouts.backend.app')
@section('title', 'Danh sách Tài Khoản')
@section('subheader__title', 'Danh sách Tài Khoản')
@section('content')
<div class="m-content">
    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-12">
            <div class="m-portlet m-portlet--mobile ">
                <div class="m-portlet__body">
                    <!--begin: Search Form -->
                    <form class="m-form m-form--fit m--margin-bottom-20" action="">
                        <div class="row m--margin-bottom-20">
                            <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                <label>Search User:</label>
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="search" name="search" data-col-index="0" value="{{ isset(request()->search) ? request()->search : '' }}" title="Enter search user keyword">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                        <span><i class="la la-search"></i></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                <label>Vai Trò:</label>
                                <select class="form-control m-bootstrap-select m_selectpicker" id="s_role" name="role" data-col-index="1">
                                    <option value="">Tất cả Vai Trò</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->name }}" {{ request()->role == $role->name ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4 m--margin-bottom-10-tablet-and-mobile">
                                <label>Trạng Thái:</label>
                                <select class="form-control m-bootstrap-select m_selectpicker" id="s_status" name="status" data-col-index="2">
                                    <option selected="" value="">Tất cả Trạng Thái</option>
                                    <option value="1" {{ request()->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="2" {{ request()->status == 2 ? 'selected' : '' }}>Inactive</option>
                                    <option value="3" {{ request()->status == 3 ? 'selected' : '' }}>Suspended</option>
                                </select>
                            </div>
                        </div>
                        <div class="m-separator m-separator--md m-separator--dashed"></div>
                        <div class="row">
                            <div class="col-lg-8">
                                <button type="submit" class="btn btn-brand m-btn m-btn--icon" id="m_search">
                                    <span>
                                        <i class="la la-search"></i>
                                        <span>Search</span>
                                    </span>
                                </button> &nbsp;&nbsp;
                                <a href="{{ route('backend.user.index') }}" class="btn btn-secondary m-btn m-btn--icon {{ !request('search') && !request('role') && !request('status') ? 'disabled' : '' }}">
                                    <span>
                                        <i class="la la-close"></i>
                                        <span>Reset</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4 order-1 order-xl-2 m--align-right">
                                <a href="{{ route('backend.user.create') }}" class="btn btn-primary m-btn m-btn--icon">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>Thêm Tài Khoản</span>
                                    </span>
                                </a>
                                <div class="m-separator m-separator--dashed d-xl-none"></div>
                            </div>
                        </div>
                    </form>
                    <!--end: Search Form -->
                    <!--begin: Datatable -->
                    <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded" id="local_data">
                        <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
                            <thead class="m-datatable__head">
                                <tr class="m-datatable__row">
                                    <!-- <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">
                                        <span style="width: 50px;">
                                            #
                                        </span>
                                    </th> -->
                                    <th data-field="OrderID" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 220px;">USER</span>
                                    </th>
                                    <th data-field="Latitude" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 150px;">ROLE</span>
                                    </th>
                                    <th data-field="Status" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px;">LAST LOGIN</span>
                                    </th>
                                    <th data-field="Type" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px;">STATUS</span>
                                    </th>
                                    <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px; float: right;">ACTIONS</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="m-datatable__body">
                                @foreach($users as $user)
                                <tr class="m-datatable__row" style="left: 0px;">
                                    <!-- <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">
                                        <span style="width: 50px;">
                                            {{( ($users->currentPage()-1)*20) + $loop->iteration }}
                                        </span>
                                    </td> -->
                                    <td data-field="OrderID" class="m-datatable__cell" @if($user->deleted_at != null) style="border-left: 0.2rem solid #f4516c !important" @endif>
                                        <span style="width: 220px;">
                                            <div class="m-card-user m-card-user--sm">
                                                <div class="m-card-user__pic">
                                                    @if(!empty($user->avatar))
                                                        <img src="{{ asset( $user->avatar )}}" class="m--img-rounded m--marginless" style="width: 40px; height: 40px; overflow: hidden; object-fit: contain;" alt="{{ $user->name }}" loading="lazy" />
                                                    @else
                                                        <img src="{{ asset('theme/backend/assets/app/media/img/bg/blank-image.svg') }}" class="rounded m--marginless" style="width: 40px; height: 40px; overflow: hidden; object-fit: cover;" alt="{{ $user->name }}" loading="lazy" />
                                                    @endif
                                                </div>
                                                <div class="m-card-user__details">
                                                    @if($user->deleted_at != null)
                                                        <s class="text-danger">
                                                            <span class="m-card-user__name">{{ $user->name }}</span>
                                                        </s>
                                                    @else
                                                        <span class="m-card-user__name">{{ $user->name }}</span>
                                                    @endif
                                                    <a href="javascript:;" class="m-card-user__email m-link">{{ $user->email }}</a>
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                    <td data-field="UserRole" class="m-datatable__cell">
                                        <span style="width: 150px;">
                                            @foreach($user->roles as $role)
                                            <span class="la {{ empty($role->icon) ? 'm-badge m-badge--secondary m-badge--dot' : $role->icon }} m--font-{{ empty($role->color) ? 'secondary' : $role->color }}"></span>&nbsp;<span class="m--font-bold m--font-{{ empty($role->color) ? 'secondary' : $role->color }}">{{ $role->name }}</span>
                                            @endforeach
                                            @if($user->roles->isEmpty())
                                            <span class="m-badge m-badge--secondary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-secondary">Doesn't have roles</span>
                                            @endif
                                        </span>
                                    </td>
                                    <td data-field="LastLogin" class="m-datatable__cell">
                                        <span style="width: 110px;">
                                            @php
                                                $lastActivity = $user->recent_personal_login;
                                            @endphp
                                            @if($lastActivity && $lastActivity->last_activity > now()->subMinutes(5))
                                                <span class="m-badge m-badge--success m-badge--dot"></span>
                                                &nbsp;
                                                <span class="m--font-bold m--font-success">Online</span>
                                            @else
                                                @if(!empty($user->recent_personal_login->last_login_at))
                                                    <span class="m-badge m-badge--info m-badge--dot"></span>
                                                    &nbsp;
                                                    <span class="m--font-bold m--font-info">
                                                        {{ Carbon\Carbon::parse($user->recent_personal_login->last_login_at)->diffForHumans() }}
                                                    </span>
                                                @else
                                                    <span class="m-badge m-badge--danger m-badge--dot"></span>
                                                    &nbsp;
                                                    <span class="m--font-bold m--font-danger">Offline</span>
                                                @endif
                                            @endif
                                        </span>
                                    </td>
                                    <td data-field="Status" class="m-datatable__cell">
                                        <div style="width: 110px;">
                                            <span class="m-badge m-badge--{{ $user->getStatus($user->status)['class'] }} m-badge--wide">{{ $user->getStatus($user->status)['name'] }}</span>
                                        </div>
                                    </td>
                                    <td data-field="Actions" class="m-datatable__cell">
                                        <span style="overflow: visible; position: relative; width: 110px; float: right;">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                                    <a class="dropdown-item" href="{{ route('backend.user.view', [$user->id]) }}">View</a>
                                                    <a class="dropdown-item" href="{{ route('backend.user.edit', [$user->id]) }}">Edit</a>
                                                    @if($user->deleted_at != null)
                                                        <a class="dropdown-item recover_user" href="javascript:void(0);" data-href="{{ route('api.user.recover', [$user->id]) }}" title="Recover">Recover</a>
                                                    @else
                                                        <a class="dropdown-item destroy_user" href="javascript:void(0);" data-href="{{ route('api.user.destroy', [$user->id]) }}" title="Delete">Delete</a>
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
                            {{ $users->links('layouts.backend.pagination') }}
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
<script src="{{ asset('theme/backend/assets/demo/default/custom/crud/forms/widgets/bootstrap-select.js')}}" type="text/javascript"></script>
<script>

    $(".destroy_user").click(function(e) {
        swal({
            title: "Are you sure?",
            text: "You won't be able to revert this user!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete this user!"
        }).then((e) => {
            if (e.value == true) {
                const locatedTr = $(this);
                $.ajax({
                    type: "DELETE",
                    url: $(this).data('href'),
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    success: function(response){
                        if (response.code == 200) { locatedTr.parents("tr").remove(); }
                        if (response.message) {
                            swal({
                                position: "top-right",
                                type: response.message.type,
                                title: response.message.title,
                                html: response.message.content,
                                showConfirmButton: !1,
                                timer: 1500
                            })
                        }
                    },
                    error: function(){
                        console.log("ERROR");
                        swal("Has Error!", "An error has occurred.", "warning")
                    }
                });
            }
        })
    })

    $(".recover_user").click(function(e) {
        swal({
            title: "Are you sure?",
            text: "You won't be able to revert this user!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, recover this user!"
        }).then((e) => {
            if (e.value == true) {
                const locatedTr = $(this);
                $.ajax({
                    type: "GET",
                    url: $(this).data('href'),
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    success: function(response){
                        if (response.code == 200) { locatedTr.parents("tr").remove(); }
                        if (response.message) {
                            swal({
                                position: "top-right",
                                type: response.message.type,
                                title: response.message.title,
                                html: response.message.content,
                                showConfirmButton: !1,
                                timer: 1500
                            })
                        }
                    },
                    error: function(){
                        console.log("ERROR");
                        swal("Has Error!", "An error has occurred.", "warning")
                    }
                });
            }
        })
    })

    $('#s_role').change(function() {
        $('#m_search').click()
    });

    $('#s_status').change(function() {
        $('#m_search').click()
    });

</script>
@endsection