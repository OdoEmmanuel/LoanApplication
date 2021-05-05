@extends('layout.admin_app')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    @include('partials.main.sub_header')

    <!--begin::Dashboard-->
    <div class="container">
    <!--begin::Button-->
    <a href="{{ url('create_roles') }}"
    class="btn btn-light-success font-weight-bold btn-sm px-4 font-size-base ml-2 mb-4">Add Roles</a>
<!--end::Button-->
    <!--begin::Row-->
    <div class="row">
        <div class="col-xl-12">
            <!--begin::Advance Table Widget 10-->
            <div class="card card-custom gutter-b card-stretch">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Role List</span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">
                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-md">
                                    <img src="assets/media/svg/icons/Design/PenAndRuller.svg"/>
                                </span>Export</button>
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi flex-column navi-hover py-2">
                                    <li
                                        class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                        Choose an option:</li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-print"></i>
                                            </span>
                                            <span class="navi-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-copy"></i>
                                            </span>
                                            <span class="navi-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-file-excel-o"></i>
                                            </span>
                                            <span class="navi-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-file-text-o"></i>
                                            </span>
                                            <span class="navi-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-file-pdf-o"></i>
                                            </span>
                                            <span class="navi-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <!--end::Dropdown-->
                        <div class="mr-2">
                            <!--begin::Button-->
                            <a href="#" class="btn btn-warning font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
                                    <img src="assets/media/svg/icons/Design/Interselect.svg"/>
                                </span>Select all</a>
                            <!--end::Button-->
                        </div>
                        <div class="mr-2">
                            <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <img src="assets/media/svg/icons/Design/Rectangle.svg"/>
                            </span>Deselect all</a>
                        <!--end::Button-->
                        </div>
                              <div>
                                <!--begin::Button-->
                            <a href="#" class="btn btn-danger font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
                                    <img src="assets/media/svg/icons/General/Trash.svg"/>
                                </span>Delete selected</a>
                            <!--end::Button-->
                          </div>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-bordered table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
                            <thead>
                                <tr class="text-left">
                                    <th class="pl-2" style="width: 30px">
                                        <label class="checkbox checkbox-lg checkbox-inline mr-2">
                                            <input type="checkbox" value="1">
                                            <span></span>
                                        </label>
                                    </th>
                                    <th class="pl-2" style="min-width: 120px">
                                        <span class="text-info">Id</span>
                                        <span class="svg-icon svg-icon-sm svg-icon-primary">
                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Navigation/Down-2.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <rect fill="#000000" opacity="0.3" x="11" y="4" width="2" height="10" rx="1"></rect>
                                                    <path d="M6.70710678,19.7071068 C6.31658249,20.0976311 5.68341751,20.0976311 5.29289322,19.7071068 C4.90236893,19.3165825 4.90236893,18.6834175 5.29289322,18.2928932 L11.2928932,12.2928932 C11.6714722,11.9143143 12.2810586,11.9010687 12.6757246,12.2628459 L18.6757246,17.7628459 C19.0828436,18.1360383 19.1103465,18.7686056 18.7371541,19.1757246 C18.3639617,19.5828436 17.7313944,19.6103465 17.3242754,19.2371541 L12.0300757,14.3841378 L6.70710678,19.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 15.999999) scale(1, -1) translate(-12.000003, -15.999999)"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </th>
                                    <th style="min-width: 110px">Title</th>
                                    <th style="min-width: 110px">Permission</th>
                                    <th class="pr-10 text-right" style="min-width: 160px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-2 py-6">
                                        <label class="checkbox checkbox-lg checkbox-inline">
                                            <input type="checkbox" value="1">
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="pl-2">
                                        <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-lg">1</a>
                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">admin</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">user_management_access permission_create permission_edit permission_show permission_delete permission_access role_create role_edit role_show role_delete role_access user_create user_edit user_show user_delete user_access audit_log_show audit_log_access status_create status_edit status_show status_delete status_access loan_application_edit loan_application_show loan_application_delete loan_application_access comment_create comment_edit comment_show comment_delete comment_access profile_password_edit</span>
                                    </td>
                                    <td class="pr-5 text-right">
                                        <a href="{{ url('view_roles') }}" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="View Role">
                                            <img src="assets/media/svg/icons/Home/Door-open.svg"/>
                                        </a>
                                        <a href="{{ url('edit_roles') }}" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3" title="Edit Role">
                                            <img src="assets/media/svg/icons/Design/Edit.svg"/>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="Delete Role">
                                            <img src="assets/media/svg/icons/General/Trash.svg"/>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Advance Table Widget 10-->
        </div>
    </div>
    <!--end::Row-->
    <!--end::Dashboard-->
</div>
@endsection
