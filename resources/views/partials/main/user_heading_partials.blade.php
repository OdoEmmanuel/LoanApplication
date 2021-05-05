
    <!--begin::Main-->
    @include('partials.main.header_mobile')
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            @include('partials.aside_partials.user_menu_aside')
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header bg-white header-fixed">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Left-->
                        <div class="d-flex align-items-stretch mr-2">
                            <!--begin::Page Title-->
                            <h3 class="d-none text-dark d-lg-flex align-items-center mr-10 mb-0">Methods</h3>
                            <!--end::Page Title-->
                            <!--begin::Header Menu Wrapper-->
                            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                <!--begin::Header Menu-->
                                <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                                    <!--begin::Header Nav-->
                                    <ul class="menu-nav">
                                        <li class="menu-item" aria-haspopup="true">
                                            <a href="index.html" class="menu-link">
                                                <span class="menu-text">Dashboard</span>
                                            </a>
                                        </li>
                                        @include('partials.left_menu_partials.feautres')
                                        @include('partials.left_menu_partials.crude')
                                        @include('partials.left_menu_partials.apps')
                                        @include('partials.left_menu_partials.pages')
                                    </ul>
                                    <!--end::Header Nav-->
                                </div>
                                <!--end::Header Menu-->
                            </div>
                            <!--end::Header Menu Wrapper-->
                        </div>
                        <!--end::Left-->
                        <!--begin::Topbar-->
                        <div class="topbar">
                            @include('partials.main.search')
                            @include('partials.right_menu_partials.notification')
                            @include('partials.right_menu_partials.quick_action')
                            @include('partials.right_menu_partials.chat')
                            @include('partials.right_menu_partials.user')
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
