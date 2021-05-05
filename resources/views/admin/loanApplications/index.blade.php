@extends('layout.admin_app')
@section('content')

                   <!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    @include('partials.main.sub_header')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Notice-->
        <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
            <div class="alert-icon">
                <span class="svg-icon svg-icon-primary svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                fill="#000000" opacity="0.3" />
                            <path
                                d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </div>
            <div class="alert-text">The Metronic KTDatatable various API methods ready to use to enhance the
                datatable features. For more information visit
                <a class="font-weight-bold"
                    href="https://keenthemes.com/metronic/?page=docs&amp;section=html/components/datatable"
                    target="_blank">Metronic KTDatatable Documentation</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Loan Application List </h3>
                </div>
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
                         <!--begin::Button-->
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
                        <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Search Form-->
                <!--begin::Search Form-->
                <div class="mb-7">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-xl-8">
                            <div class="row align-items-center">
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            id="kt_datatable_search_query">
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                    <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Search Form-->
                <!--end: Search Form-->
                <div class="row py-5">
                    <div class="col-lg-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">ID:</span>
                            </div>
                            <input type="text" class="form-control" id="kt_datatable_check_input" value="1">
                            <div class="input-group-append">
                                <button class="btn btn-secondary font-weight-bold" type="button"
                                    id="kt_datatable_check">Select row</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--begin: Datatable-->
                <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-scroll datatable-loaded"
                    id="kt_datatable" style="">
                    <table class="datatable-table" style="display: block; max-height: 550px;">
                        <thead class="datatable-head">
                            <tr class="datatable-row" style="left: 0px;">
                                <th data-field="RecordID"
                                    class="datatable-cell-center datatable-cell datatable-cell-check"><span
                                        style="width: 30px;"><label
                                            class="checkbox checkbox-single checkbox-all kt-checkbox--solid"><input
                                                type="checkbox">&nbsp;<span></span></label></span></th>
                                <th data-field="ID" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 30px;">ID</span></th>
                                <th data-field="OrderID" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 120px;">Loan Amount</span></th>
                                <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 120px;">Applicant</span></th>
                                <th data-field="ShipDate" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 120px;">Analyst</span></th>
                                <th data-field="CompanyName" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 120px;">CFO</span></th>
                                <th data-field="Status"
                                    class="datatable-cell datatable-cell-sort datatable-cell-sorted"
                                    data-sort="desc"><span style="width: 120px;">Status<i
                                            class="flaticon2-arrow-down"></i></span></th>
                                <th data-field="Type" data-autohide-disabled="false"
                                    class="datatable-cell datatable-cell-sort"><span
                                        style="width: 120px;">Description</span></th>
                                <th data-field="Actions" data-autohide-disabled="false"
                                    class="datatable-cell datatable-cell-sort"><span
                                        style="width: 200px;">Actions</span></th>
                            </tr>
                        </thead>
                        <tbody class="datatable-body ps ps--active-y" style="max-height: 511px;">
                            <tr data-row="0" class="datatable-row" style="left: 0px;">
                                <td class="datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="233"><span style="width: 30px;"><label
                                            class="checkbox checkbox-single kt-checkbox--solid"><input
                                                type="checkbox" value="233">&nbsp;<span></span></label></span>
                                </td>
                                <td data-field="ID" aria-label="null" class="datatable-cell"><span
                                        style="width: 30px;">1</span></td>
                                <td data-field="OrderID" aria-label="0179-1952" class="datatable-cell"><span
                                        style="width: 120px;">100,000</span></td>
                                <td data-field="Country" aria-label="New Zealand" class="datatable-cell"><span
                                        style="width: 120px;">John Doe</span></td>
                                <td data-field="ShipDate" aria-label="11/12/2016" class="datatable-cell"><span
                                        style="width: 120px;">Analyst John</span></td>
                                <td data-field="CompanyName" aria-label="Konopelski-Rohan"
                                    class="datatable-cell"><span style="width: 120px;">CFO Stone</span>
                                </td>
                                <td class="datatable-cell-sorted datatable-cell" data-field="Status"
                                    aria-label="6"><span style="width: 120px;"><span
                                            class="label  label-light-danger label-inline font-weight-bold label-lg">Pending</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="2"
                                    class="datatable-cell"><span style="width: 120px;"><span
                                            class="mr-2"></span><span
                                            class="font-weight-bold">Retail</span></span></td>
                                            <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                            class="datatable-cell"><span style="overflow: visible; position: relative; width: 200px;">

                                                    <a href="{{ url('send') }}" class="btn btn-md btn-default btn-text-white btn-success mr-2" title="Send">Send to CFO
                                                     </a>

                                                    <a href="{{ url('view_loan') }}"
                                                    class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2"
                                                    title="View Status"> <span class="svg-icon svg-icon-md"><img src="assets/media/svg/icons/Home/Door-open.svg"/></span> </a>

                                                    <a href="javascript:;"
                                                    class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon"
                                                    title="Delete Status"> <span class="svg-icon svg-icon-md"><img src="assets/media/svg/icons/General/Trash.svg"/></span> </a>
                                            </span></td>


                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; height: 511px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 41px;"></div>
                            </div>
                        </tbody>
                    </table>
                    <div class="datatable-pager datatable-paging-loaded">
                        <ul class="datatable-pager-nav mb-5 mb-sm-0">
                            <li><a title="First"
                                    class="datatable-pager-link datatable-pager-link-first datatable-pager-link-disabled"
                                    data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a>
                            </li>
                            <li><a title="Previous"
                                    class="datatable-pager-link datatable-pager-link-prev datatable-pager-link-disabled"
                                    data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                            <li style=""></li>
                            <li style="display: none;"><input type="text"
                                    class="datatable-pager-input form-control" title="Page number"></li>
                            <li><a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active"
                                    data-page="1" title="1">1</a></li>
                            <li><a class="datatable-pager-link datatable-pager-link-number" data-page="2"
                                    title="2">2</a></li>
                            <li><a class="datatable-pager-link datatable-pager-link-number" data-page="3"
                                    title="3">3</a></li>
                            <li><a class="datatable-pager-link datatable-pager-link-number" data-page="4"
                                    title="4">4</a></li>
                            <li style=""></li>
                            <li><a title="Next" class="datatable-pager-link datatable-pager-link-next"
                                    data-page="2"><i class="flaticon2-next"></i></a></li>
                            <li><a title="Last" class="datatable-pager-link datatable-pager-link-last"
                                    data-page="4"><i class="flaticon2-fast-next"></i></a></li>
                        </ul>
                        <div class="datatable-pager-info">
                            <div class="dropdown bootstrap-select datatable-pager-size" style="width: 60px;">
                                <select class="selectpicker datatable-pager-size" title="1"
                                    data-width="60px" data-container="body" data-selected="100">
                                    <option class="bs-title-option" value=""></option>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <div class="dropdown-menu ">
                                    <div class="inner show" role="listbox" id="bs-select-3" tabindex="-1">
                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                    </div>
                                </div>
                            </div><span class="datatable-pager-detail">Showing 1 - 100 of 350</span>
                        </div>
                    </div>
                </div>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->

@endsection
