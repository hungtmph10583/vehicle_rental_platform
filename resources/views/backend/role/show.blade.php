@extends('layouts.demo12.app')
@section('title', 'View Role Details')
@section('subheader__title', 'View Role Details')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{ route('backend.dashboard') }}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">View Role Details</span>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <a href="{{ route('backend.role.index') }}" class="m-nav__link">
            <span class="m-link m--font-bold">Back to all Roles</span>
        </a>
    </li>
@endsection
@section('content')
<div class="m-content">
@include('layouts.backend.alert')
    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-3">
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__body">
                    <div class="m-form__heading mb-4">
                        <h3 class="m-form__heading-title">{{ $role->name }}</h3>
                    </div>
                    <div class="form-group m-form__group mb-5 p-1">
                        <div class="m-scrollable m-scroller ps ps--active-y" data-scrollable="true" style="max-height: 500px; overflow: hidden;">
                            @foreach($role->permissions as $permission)
                                    <p><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-secondary">{{ $permission->name }}</span></p>
                                @endforeach
                            @if($role->permissions->isEmpty())
                                <p class="m--font-bold m--font-secondary text-center"><mark>The role does not have any permissions</mark></p>
                            @endif
                        </div>
                    </div>
                    <div class="m-section m-section--last">
                        <div class="m-form__actions m-form__actions">
                            <a href="{{ route('backend.role.edit', [$role->id]) }}" class="btn btn-secondary">Edit Role</a>
                            <a href="{{ route('backend.role.destroy', [$role->id]) }}" class="btn btn-secondary">Delete Role</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="m-portlet m-portlet--mobile ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Users Assigned <small class="text-muted"><strong>({{ count($users) }})</strong></small>
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input m-input--solid" placeholder="Search Users">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                        <span><i class="la la-search"></i></span>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded">
                        <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
                            <thead class="m-datatable__head">
                                <tr class="m-datatable__row">
                                    <th class="m-datatable__cell">
                                        <span style="width: 300px;">USER</span>
                                    </th>
                                    <th class="m-datatable__cell">
                                        <span style="width: 150px;">JOINED DATE</span>
                                    </th>
                                    <th class="m-datatable__cell">
                                        <span style="width: 110px; float: right;">ACTIONS</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="m-datatable__body">
                                @foreach($users as $user)
                                    <tr class="m-datatable__row" style="left: 0px; @if($user->id == Auth::user()->id) background-color:#faf9fc; @endif">
                                        <td data-field="User" class="m-datatable__cell">
                                            <span style="width: 300px;">
                                                <div class="m-card-user m-card-user--sm">
                                                    <div class="m-card-user__pic">
                                                        
                                                        @if(!empty($user->avatar))
                                                            <img src="{{ asset( $user->avatar )}}" class="m--img-rounded m--marginless" alt="" />
                                                        @else
                                                            <div class="m-card-user__no-photo m--bg-fill-danger"><span>M</span></div>
                                                        @endif
                                                    </div>
                                                    <div class="m-card-user__details">
                                                        <span class="m-card-user__name">{{ $user->name }}</span>
                                                        <a href="javascript:;" class="m-card-user__email m-link">{{ $user->email }}</a>
                                                    </div>
                                                </div>
                                            </span>
                                        </td>
                                        <td data-field="JoinedDate" class="m-datatable__cell">
                                            <!-- <span style="width: 150px;">{{ Carbon\Carbon::parse($user->last_login_at)->format('d M Y') }}</span> -->
                                            <span style="width: 150px;">{{ $user->created_at->format('d M Y') }}</span>
                                        </td>
                                        <td data-field="Actions" class="m-datatable__cell">
                                            <span style="overflow: visible; position: relative; width: 110px; float: right;">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownActions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @if($user->id == Auth::user()->id) disabled @endif>
                                                        Actions
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownActions" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                                        <a class="dropdown-item" href="{{ route('backend.user.view', [$user->id]) }}">View</a>
                                                        <a class="dropdown-item destroy-role-user" href="javascript:void(0)" data-url="{{ route('backend.role.destroyRoleUser', [$role->id, $user->id]) }}">Delete Role</a>
                                                    </div>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                                @if($users->isEmpty())
                                <tr class="m-datatable__row">
                                    <td class="m-datatable__cell text-center">No record found</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
                            {{ $users->links('layouts.backend.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End::Section-->
</div>
@endsection
@section('script')
<script src="{{ asset('theme/backend/assets/demo/default/custom/components/base/sweetalert2.js')}}" type="text/javascript"></script>
<script type="text/javascript">    
    $(".destroy-role-user").click(function(e) {
        swal({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!"
        }).then((e) => {
            if (e.value == true) {
                console.log($(this))
                console.log($(this).data('url'))
                const locatedTr = $(this);
                $.ajax({
                    type: "DELETE",
                    url: $(this).data('url'),
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    success: function(response){
                        if (response.status == 200) { locatedTr.parents("tr").remove(); }
                        if (response.status) {
                            swal({
                                position: "top-right",
                                type: response.type,
                                title: response.title,
                                showConfirmButton: !1,
                                timer: 1500
                            })
                        }
                    },
                    error: function(){
                        swal("Has Error!", "An error has occurred.", "warning")
                    }
                });
            }
        })
    })
</script>
@endsection