@extends('layouts.backend.app')
@section('title', 'Roles')
@section('subheader__title', 'Roles')
@section('subheader__breadcrumbs')
    <li class="m-nav__item m-nav__item--home">
        <a href="{{ route('backend.dashboard') }}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
@endsection
@section('content')
    <div class="m-content">
        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-4">
                <div class="m-portlet m-portlet--full-height">
                    <div class="m-portlet__body">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--demo">
                            <a href="{{ route('backend.role.create') }}" class="m-link m-stack__item m-stack__item--center m-stack__item--middle">
                                <div class="form-group m-form__group pt-3">
                                    <img style="width: 150px; height: 150px; object-fit: cover;" id="preImage" src="{{ asset('theme/backend/assets/app/media/img/bg/4.png')}}" alt="">
                                </div>
                                <div class="m-form__heading">
                                    <h3 class="m-form__heading-title">Add New Role</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($roles as $item)
            <div class="col-xl-4">
                <div class="m-portlet m-portlet--full-height">
                    <div class="m-portlet__body">
                        <div class="m-form__section m-form__section--first">
                            <div class="m-form__heading">
                                <h3 class="m-form__heading-title">{{ $item->name }}</h3>
                            </div>
                            <div class="form-group m-form__group pt-3">
                                <span class="text-muted"><strong>Total users with this role: {{ $item->users_count }}</strong></span>
                            </div>
                        </div>
                        <div class="m-scrollable m-scroller ps ps--active-y" data-scrollable="true" style="height: 200px; overflow: hidden;">
                            <div class="form-group m-form__group p-1">
                                @foreach($item->permissions as $permission)
                                    <p><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-secondary text-capitalize">{{ $permission->name }}</span></p>
                                @endforeach
                                @if($item->permissions->isEmpty())
                                    <p class="m--font-bold m--font-secondary text-center"><mark>The role does not have any permissions</mark></p>
                                @endif
                            </div>
                        </div>
                        <div class="m-section m-section--last">
                            <div class="m-form__actions m-form__actions">
                                <a href="{{ route('backend.role.show', [$item->id]) }}" class="btn btn-secondary">View Role</a>
                                <a href="{{ route('backend.role.edit', [$item->id]) }}" class="btn btn-secondary">Edit Role</a>
                                <a href="javascript:void(0);" class="btn btn-secondary destroy_role" data-url="{{ route('backend.role.destroy', [$item->id]) }}" title="Delete">Delete Role</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--begin::Modal-->
        <!-- <div class="modal fade" id="m_scrollable_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="margin: 20rem auto; max-width: 800px" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{route('backend.role.create')}}" id="addRole">
                    @csrf
                        <div class="modal-body">
                            <div class="m-scrollable" data-scrollbar-shown="true" data-scrollable="true" data-height="">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">Name:</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter the role's name">
                                    @error('name')
                                        <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="form-control-label">Permisstion:</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="m-checkbox-list">
                                                <label class="m-checkbox m-checkbox--solid">
                                                    <input type="checkbox" checked> Create story
                                                    <span></span>
                                                </label>
                                                <label class="m-checkbox m-checkbox--solid">
                                                    <input type="checkbox"> Read story
                                                    <span></span>
                                                </label>
                                                <label class="m-checkbox m-checkbox--solid">
                                                    <input type="checkbox"> Update story
                                                    <span></span>
                                                </label>
                                                <label class="m-checkbox m-checkbox--solid">
                                                    <input type="checkbox"> Delete story
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="m-checkbox-list">
                                                <label class="m-checkbox m-checkbox--solid">
                                                    <input type="checkbox"> Create category
                                                    <span></span>
                                                </label>
                                                <label class="m-checkbox m-checkbox--solid">
                                                    <input type="checkbox"> Read category
                                                    <span></span>
                                                </label>
                                                <label class="m-checkbox m-checkbox--solid">
                                                    <input type="checkbox"> Update category
                                                    <span></span>
                                                </label>
                                                <label class="m-checkbox m-checkbox--solid">
                                                    <input type="checkbox"> Delete category
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="m_blockui_4_1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->

        <!--end::Modal-->

        <!--End::Section-->
    </div>
@endsection
@section('script')
<script type="text/javascript">
    $(".destroy_role").click(function(e) {
        swal({
            title: "Are you sure?",
            text: "You won't be able to revert this role!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete this role!"
        }).then((e) => {
            if (e.value == true) {
                const locatedCard = $(this);
                $.ajax({
                    type: "DELETE",
                    url: $(this).data('url'),
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    success: function(response){
                        if (response.status == 200) { locatedCard.parents(".col-xl-4").remove(); }
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
                        console.log("ERROR");
                        swal("Has Error!", "An error has occurred.", "warning")
                    }
                });
            }
        })
    })

    // $(document).realy(function(){
    //     $('#addRole').on('submit', function(event){
    //         event.preventDefault();
    //         jQuery.ajax({
    //             url:"{{route('backend.role.create')}}",
    //             data:jQuery('#addRole').serialize(),
    //             type:'POST',
    //             success:function(result)
    //             {
                    
    //             }
    //         })
    //     });
    // });
    // var deleteLinks = document.querySelectorAll('.delete_role');
    // for (var i = 0; i < deleteLinks.length; i++) {
    //     deleteLinks[i].addEventListener('click', function(event) {
    //         event.preventDefault();
    //         var url = this.getAttribute('data-href');
    //         swal({
    //             title:"Are you sure?",
    //             text:"You won't be able to revert this role!",
    //             type:"warning",showCancelButton:!0,
    //             confirmButtonText:"Yes, delete this role!"
    //         }).then(function(e){
    //             e.value&&swal("Deleted!","This role has been deleted.","success")
    //             if (e.value) {
    //                 window.location.href = url;
    //             }
    //         })
    //     });
    // }
</script>
@endsection