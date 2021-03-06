<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <!--begin::Header-->
    <div id="kt_header" class="header header-fixed">
        <!--begin::Container-->
        <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

            </div>
            <!--end::Header Menu Wrapper-->
            <!--begin::Topbar-->
            <div class="topbar">

                <div class="kt-header__topbar-item kt-header__topbar-item--search mt-4 mr-3">
                    <div class="kt-header__topbar-wrapper">
                        <div class="kt-quick-search" id="kt_quick_search_default">
                            
                        </div>
                    </div>
                </div>

                <div class="topbar-item">
                    <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hoşgeldiniz,</span>
                        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ @$authenticated->name }}</span>
                        <span class="symbol symbol-35 symbol-light-success">
                            <span class="symbol-label font-size-h5 font-weight-bold"></span>
                        </span>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <div class="loader" id="loader-1"></div>

        <div class="container-fluid loaded" style="margin-top: -50px; visibility: hidden">

            @yield('content')

        </div>

    </div>
    <!--end::Content-->
    <!--begin::Footer-->
    @include('layouts.footer')
    <!--end::Footer-->
    @include('layouts.rightbar')
</div>
