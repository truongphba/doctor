<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                    <span>
                        <button type="button"
                                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>
                <li class="mm-active">
                    <a href="{{route('admin')}}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Quản trị hệ thống
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                </li>
                <li>
                    <a href="{{route('locations.index')}}">
                        <i class="metismenu-icon pe-7s-browser"></i>
                        Quản trị bộ phận khám
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                </li>
                <li>
                    <a href="{{route('symptoms.index')}}">
                        <i class="metismenu-icon pe-7s-plugin"></i>
                        Quản trị triệu chứng
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                </li>
                <li>
                    <a href="{{route('appointments.index')}}">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Quản trị đặt lịch khám
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                </li>
                <li>
                    <a href="{{route('doctors.index')}}">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Quản trị bác sĩ
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                </li>
                <li>
                    <a href="{{route('patients.index')}}">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Quản trị bệnh nhân
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                </li>
                <li>
                    <a href="{{route('records.index')}}">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Quản trị đơn thuôc
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
