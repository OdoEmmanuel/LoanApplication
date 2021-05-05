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
                                            <span class="card-label font-weight-bolder text-dark">Show Loan Applications
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
                                                        <th scope="row">Loan Amount </th>
                                                        <td>10000.00
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Description</th>
                                                        <td>Feeding</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Status</th>
                                                        <td>CFO processing
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Analyst</th>
                                                        <td>John Analyst</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">CFO</th>
                                                        <td>CFO Emmanuel
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Loan Logs
                                                </span>
                                            </h3>



                                            <table class="table table-bordered table-head-custom table-vertical-center mb-4"
                                                id="kt_advance_table_widget_4">
                                                <thead>
                                                    <tr class="text-left">
                                                        <th class="pl-2" style="min-width: 120px">
                                                            User </th>
                                                        <th style="min-width: 110px">Changes</th>
                                                        <th class="pr-10 text-right" style="min-width: 160px">Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-2">
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                Trevor Admin Stanbridge
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Status:
                                                                from Processing to Analyst processing
                                                                Analyst: set to John Analyst Stone</span>
                                                        </td>
                                                        <td class="pr-5 text-right">
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                                2021-03-20 11:22:43</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="card-toolbar mb-4">
                                                <div class="mb-4">
                                                    <!--begin::Button-->
                                                    <a href="#" class="btn btn-danger font-weight-bolder">
                                                        <span class="svg-icon svg-icon-md">
                                                            <img src="assets/media/svg/icons/General/Trash.svg" /> </span>Delete</a>
                                                    <!--end::Button-->
                                                </div>
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

    @include('partials.main.demo_panel')
@endsection
