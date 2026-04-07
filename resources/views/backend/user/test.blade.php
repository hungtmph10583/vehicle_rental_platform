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
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-4">
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                                            <span class="m-input-icon__icon m-input-icon__icon--left">
                                                <span><i class="la la-search"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                                <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
                                    <span>
                                        <i class="la la-cart-plus"></i>
                                        <span>New User</span>
                                    </span>
                                </a>
                                <div class="m-separator m-separator--dashed d-xl-none"></div>
                            </div>
                        </div>
                    </div>

                    <!--end: Search Form -->

                    <!--begin: Datatable -->
                    <div class="m_datatable" id="api_events"></div>

                    <!--end: Datatable -->
                    <textarea id="m_datatable_console" class="form-control m--margin-top-30" cols="100" rows="10" title="Console" readonly="readonly"></textarea>
                    <div class="m--margin-top-10">
                        <button class="btn btn-secondary" type="button" id="m_datatable_clear">Clear Console</button>
                        <button class="btn btn-secondary" type="button" id="m_datatable_reload">Reload Data</button>
                    </div>
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

    var DefaultDatatableDemo = function() {
    var t = function(t) {
        var a = $("#m_datatable_console").append(t + "\t\n");
        $(a).scrollTop(a[0].scrollHeight - $(a).height())
    };
    return {
        init: function() {
        var a;
        a = $(".m_datatable").mDatatable({
            data: {
                type: "remote",
                source: {
                    read: {
                        url: "/api/users",
                        method: "GET"
                    }
                },
                pageSize: 5,
                serverPaging: !0,
                serverFiltering: !0,
                serverSorting: !0
            },
            layout: {
                theme: "default",
                class: "",
                scroll: !0,
                height: "auto",
                footer: !1
            },
            sortable: !0,
            toolbar: {
                placement: ["bottom"],
                items: {
                    pagination: {
                        pageSizeSelect: [5, 10, 20, 30, 50]
                        }
                    }
                },
            search: {
                input: $("#generalSearch")
            },
            columns: [
                { field: "id", title: "ID", width: 50 },
                {
                    field: "avatar",
                    title: "Avatar",
                    template: function(row){
                        let url = row.avatar;
                        // nếu chưa phải absolute URL thì thêm domain
                        if(!url.startsWith('http')){
                            url = window.location.origin + '/' + url.replace(/^\/+/, '');
                        }
                        return `<img src="${url}" width="40" height="40" style="border-radius:50%">`;
                    }
                },
                { field: "name", title: "Name" },
                { field: "email", title: "Email" }, {
                    field: "status",
                    title: "Status",
                    template: function(row){
                    var map = {
                        1: { title: "Active", class: "m-badge--success" },
                        0: { title: "Inactive", class: "m-badge--danger" }
                    };
                    return '<span class="m-badge '+map[row.status].class+' m-badge--wide">'+map[row.status].title+'</span>';
                    }
                }, {
                    field: "roles",
                    title: "Roles",
                    template: function(row){
                    return row.roles.join(", ");
                    }
                }, {
                    field: "Actions",
                    width: 110,
                    title: "Actions",
                    sortable: !1,
                    overflow: "visible",
                    template: function(t, a, e) {
                        return '\t\t\t\t\t\t<div class="dropdown ' + (e.getPageSize() - a <= 4 ? "dropup" : "") + '">\t\t\t\t\t\t\t<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>\t\t\t\t\t\t  \t<div class="dropdown-menu dropdown-menu-right">\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\t\t\t\t\t\t  \t</div>\t\t\t\t\t\t</div>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">\t\t\t\t\t\t\t<i class="la la-edit"></i>\t\t\t\t\t\t</a>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">\t\t\t\t\t\t\t<i class="la la-trash"></i>\t\t\t\t\t\t</a>\t\t\t\t\t'
                    }
                }
            ]
            }), $("#m_datatable_clear").on("click", function() {
                $("#m_datatable_console").html("")
            }), $("#m_datatable_reload").on("click", function() {
                a.reload()
            }), $(".m_datatable").on("m-datatable--on-init", function() {
                t("Datatable init")
            }).on("m-datatable--on-layout-updated", function() {
                t("Layout render updated")
            }).on("m-datatable--on-ajax-done", function() {
                t("Ajax data successfully updated")
            }).on("m-datatable--on-ajax-fail", function(a, e) {
                t("Ajax error")
            }).on("m-datatable--on-goto-page", function(a, e) {
                t("Goto to pagination: " + e.page)
            }).on("m-datatable--on-update-perpage", function(a, e) {
                t("Update page size: " + e.perpage)
            }).on("m-datatable--on-reloaded", function(a) {
                t("Datatable reloaded")
            }).on("m-datatable--on-check", function(a, e) {
                t("Checkbox active: " + e.toString())
            }).on("m-datatable--on-uncheck", function(a, e) {
                t("Checkbox inactive: " + e.toString())
            }).on("m-datatable--on-sort", function(a, e) {
                t("Datatable sorted by " + e.field + " " + e.sort)
            })
            }
        }
    }();
    jQuery(document).ready(function() {
        DefaultDatatableDemo.init()
    });

</script>
@endsection