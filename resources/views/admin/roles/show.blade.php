@extends('layout.admin_app')
@section('content')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    @include('partials.main.sub_header')

                    <!--begin::Dashboard-->
                    <div class="container">
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-xl-12">
                                <!--begin::Advance Table Widget 10-->
                                <div class="card card-custom gutter-b card-stretch">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 py-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">Show Roles
                                            </span>
                                            <div class="card-toolbar">
                                                <div>
                                                    <!--begin::Button-->
                                                    <a href="#" class="btn btn-primary font-weight-bolder">
                                                        <span class="svg-icon svg-icon-md">
                                                            <img src="assets/media/svg/icons/Navigation/Arrow-to-left.svg" />
                                                        </span>Back to list</a>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                        </h3>

                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-0">
                                        <!--begin::Table-->
                                        <div class="table-responsive mb-4">
                                            <table class="table table-striped table-dark table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">ID</th>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Title</th>
                                                        <td>admin
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Permissions</th>
                                                        <td>user_management_access permission_create permission_edit permission_show permission_delete permission_access role_create role_edit role_show role_delete role_access user_create user_edit user_show user_delete user_access audit_log_show audit_log_access status_create status_edit status_show status_delete status_access loan_application_edit loan_application_show loan_application_delete loan_application_access comment_create comment_edit comment_show comment_delete comment_access profile_password_edit

                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                            <div class="card-toolbar mb-4">
                                                <div>
                                                    <!--begin::Button-->
                                                    <a href="#" class="btn btn-primary font-weight-bolder">
                                                        <span class="svg-icon svg-icon-md">
                                                            <img src="assets/media/svg/icons/Navigation/Arrow-to-left.svg" />
                                                        </span>Back to list</a>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
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
                </div>
@endsection
