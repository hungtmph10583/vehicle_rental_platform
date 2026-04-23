@extends('layouts.backend.app')
@section('title', 'Booking')
@section('subheader__title', 'Booking')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{route('backend.dashboard')}}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <span class="m-nav__link-text">Booking</span>
    </li>
@endsection
@section('content')
<div class="m-content">
    <div class="row">
        <div class="col-xl-9">
            <div class="m-portlet m-portlet--mobile ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Bookings ({{ $bookings_count ?? 0 }})
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="{{route('backend.booking.create')}}" class="btn btn-primary m-btn m-btn--icon">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>Add booking</span>
                                    </span>
                                </a>
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
                                        <span style="width: 140px;">Name</span>
                                    </th>
                                    <th class="m-datatable__cell">
										<span style="width: 140px;">Slug</span>
									</th>
                                    <th class="m-datatable__cell">
                                        <span style="width: 100px;">Mangas</span>
                                    </th>
                                    <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort text-right">
                                        <span style="width: 110px; float: right;">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="m-datatable__body">
                                @foreach($bookings as $item)
                                <tr class="m-datatable__row" style="left: 0px;">
                                    <td class="m-datatable__cell">
                                        <span class="d-inline-block text-truncate" style="width: 140px;">
                                            {{$item->g_name}}
                                        </span>
                                    </td>
                                    <td class="m-datatable__cell">
                                        <span class="d-inline-block text-truncate" style="width: 140px">
                                            {{$item->g_slug}}
                                        </span>
                                    </td>
                                    <td class="m-datatable__cell">
                                        <span style="width: 100px;">
                                            @if($item->books_count <= 0)
                                                <p class="m--font-bold m--font-secondary"><mark>0 Book</mark></p>
                                            @else
                                                <p class="m-badge m-badge--bold m-badge--wide m-badge--rounded mb-2">{{ $item->books_count }} Books</p>
                                            @endif
                                        </span>
                                    </td>
                                    <td data-field="Actions" class="m-datatable__cell text-right">
                                        <span style="overflow: visible; position: relative; width: 110px; float: right;">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                                    <a class="dropdown-item" href="{{ route('backend.booking.edit', [$item->id]) }}">Edit</a>
                                                    <a class="dropdown-item destroy-booking" href="javascript:void(0);" data-href="{{ route('backend.booking.destroy', [$item->id]) }}" data-id="{{ $item->id }}" title="Delete">Delete</a>
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
                            {{ $bookings->links('layouts.backend.pagination') }}
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
<script>
    $(document).ready(function() {
        
    });
</script>
@endsection