@extends('layout.admin_app')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">User</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">450 Total</span>
                    <form class="ml-5">
                        <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                            <input type="text" class="form-control" id="kt_subheader_search_form"
                                placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path
                                                    d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                <path
                                                    d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                    fill="#000000" fill-rule="nonzero"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <!--<i class="flaticon2-search-1 icon-sm"></i>-->
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Search Form-->
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="#" class=""></a>
                <!--end::Button-->
                <!--begin::Button-->
                <a href="{{ url('create_users') }}"
                    class="btn btn-light-success font-weight-bold btn-sm px-4 font-size-base ml-2">Add User</a>
                <!--end::Button-->
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="left"
                    data-original-title="Quick actions">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="svg-icon svg-icon-success svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path
                                        d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path
                                        d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </a>
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                        <!--begin::Naviigation-->
                        <ul class="navi">
                            <li class="navi-header font-weight-bold py-5">
                                <span class="font-size-lg">Add New:</span>
                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                    data-placement="right" title="" data-original-title="Click to learn more..."></i>
                            </li>
                            <li class="navi-separator mb-3 opacity-70"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-shopping-cart-1"></i>
                                    </span>
                                    <span class="navi-text">Order</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="navi-icon flaticon2-calendar-8"></i>
                                    </span>
                                    <span class="navi-text">Members</span>
                                    <span class="navi-label">
                                        <span class="label label-light-danger label-rounded font-weight-bold">3</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="navi-icon flaticon2-telegram-logo"></i>
                                    </span>
                                    <span class="navi-text">Project</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="navi-icon flaticon2-new-email"></i>
                                    </span>
                                    <span class="navi-text">Record</span>
                                    <span class="navi-label">
                                        <span class="label label-light-success label-rounded font-weight-bold">5</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-separator mt-3 opacity-70"></li>
                            <li class="navi-footer pt-5 pb-4">
                                <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                                <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip"
                                    data-placement="right" title="" data-original-title="Click to learn more...">Learn
                                    more</a>
                            </li>
                        </ul>
                        <!--end::Naviigation-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">User List
                            <span class="d-block text-muted pt-2 font-size-sm">User management made easy</span>
                        </h3>
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
                <div class="card-body">
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                        id="kt_datatable" style="">
                        <table class="datatable-table table table-bordered" style="display: block;">
                            <thead class="datatable-head">
                                <tr class="datatable-row" style="left: 0px;">
                                    <th data-field="RecordID"
                                        class="datatable-cell-left datatable-cell datatable-cell-sort"><span
                                            style="width: 40px;"></span></th>
                                    <th data-field="OrderID" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 40px;" data-sort="asc">ID<i
                                            class="flaticon2-arrow-up"></i></span></th>
                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 158px;">Name</span></th>
                                    <th data-field="ShipDate" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 158px;">Email</span></th>
                                    <th data-field="ShipDate" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 158px;">Email verified at</span></th>
                                    <th data-field="ShipDate" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 158px;">Role</span></th>
                                    <th data-field="Actions" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 158px;">Actions</span></th>
                                </tr>
                            </thead>
                            <tbody class="datatable-body" style="">
                                <tr data-row="0" class="datatable-row align-items-center" style="left: 0px;">
                                    <td class="datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="233"><span style="width: 40px;"><label
                                            class="checkbox checkbox-single kt-checkbox--solid"><input
                                                type="checkbox" value="233">&nbsp;<span></span></label></span>
                                </td>
                                    <td data-field="OrderID" aria-label="50051-0022" class="datatable-cell"><span
                                            style="width: 40px;">
                                            <div class="d-flex align-items-center">
                                                <div class="ml-4">
                                                    <div class="text-dark-75 font-weight-bolder font-size-lg mb-0">1
                                                        </div>
                                                </div>
                                            </div>
                                        </span></td>
                                    <td data-field="Country" aria-label="Czech Republic" class="datatable-cell"><span
                                            style="width: 158px;">
                                            <div class="font-weight-bolder font-size-lg mb-0">Emmanuel Odo</div>
                                        </span></td>
                                    <td data-field="ShipDate" aria-label="11/25/2016" class="datatable-cell"><span
                                            style="width: 158px;">
                                            <div class="font-weight-bolder font-size-lg mb-0">odoemmanuel100@gmail.com</div>
                                        </span></td>
                                    <td data-field="CompanyName" aria-label="Gleason-Beahan" class="datatable-cell">
                                        <span style="width: 158px;">
                                            <div class="font-weight-bolder font-size-lg mb-0">User</div>
                                        </span></td>
                                        <td class="datatable-cell-sorted datatable-cell" data-field="Status"
                                        aria-label="6"><span style="width: 158px;"><span
                                                class="label  label-light-primary label-inline font-weight-bolder label-lg">Pending</span></span>
                                    </td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 158px;">
                                            <a href="{{ url('view_user') }}"
                                            class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2"
                                            title="View User"> <span class="svg-icon svg-icon-md"><img src="assets/media/svg/icons/Home/Door-open.svg"/>
                                            </span> </a>
                                                <a href="{{ url('edit_user') }}"
                                            class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2"
                                            title="Edit User"> <span class="svg-icon svg-icon-md"><img src="assets/media/svg/icons/Design/Edit.svg"/></span> </a>

                                                <a href="javascript:;"
                                            class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon"
                                            title="Delete User"> <span class="svg-icon svg-icon-md"><img src="assets/media/svg/icons/General/Trash.svg"/></span> </a>
                                    </span></td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="datatable-pager datatable-paging-loaded">
                            <ul class="datatable-pager-nav mb-5 mb-sm-0">
                                <li><a title="First"
                                        class="datatable-pager-link datatable-pager-link-first datatable-pager-link-disabled"
                                        data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
                                <li><a title="Previous"
                                        class="datatable-pager-link datatable-pager-link-prev datatable-pager-link-disabled"
                                        data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                                <li style=""></li>
                                <li style="display: none;"><input type="text" class="datatable-pager-input form-control"
                                        title="Page number"></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active"
                                        data-page="1" title="1">1</a></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="2"
                                        title="2">2</a></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="3"
                                        title="3">3</a></li>
                                <li></li>
                                <li><a title="Next" class="datatable-pager-link datatable-pager-link-next"
                                        data-page="2"><i class="flaticon2-next"></i></a></li>
                                <li><a title="Last" class="datatable-pager-link datatable-pager-link-last"
                                        data-page="35"><i class="flaticon2-fast-next"></i></a></li>
                            </ul>
                            <div class="datatable-pager-info">
                                <div class="dropdown bootstrap-select datatable-pager-size" style="width: 60px;"><select
                                        class="selectpicker datatable-pager-size" title="5"
                                        data-width="60px" data-container="body" data-selected="10">
                                        <option class="bs-title-option" value=""></option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                    <div class="dropdown-menu ">
                                        <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div><span class="datatable-pager-detail">Showing 1 - 10 of 350</span>
                            </div>
                        </div>
                    </div>
                    <!--end: Datatable-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>


@endsection
