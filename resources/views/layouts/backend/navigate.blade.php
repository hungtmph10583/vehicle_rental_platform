<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item  {{ isset($activeDashboard) ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="{{ route('backend.dashboard') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">Dashboard</span>
                        </span>
                    </span>
                </a>
            </li>
            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">QUẢN LÝ</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>
            <li class="m-menu__item  {{ isset($activeBooking) ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="#" class="m-menu__link ">
                    <i class="m-menu__link-icon la la-check-square-o"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">Danh Sách Đặt Xe</span>
                        </span>
                    </span>
                </a>
            </li>
            <li class="m-menu__item  {{ isset($activeBooking) ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="#" class="m-menu__link ">
                    <i class="m-menu__link-icon la la-money"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">Thanh Toán</span>
                        </span>
                    </span>
                </a>
            </li>
            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">SẢN PHẨM</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>
            <li class="m-menu__item  m-menu__item--submenu {{ isset($activeCarParent) ? 'm-menu__item--open' : '' }}" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i>
                    <span class="m-menu__link-text">Quản Lý Xe</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item {{ isset($activeCarList) ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('backend.car.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Danh Sách Xe</span>
                            </a>
                        </li>
                        <li class="m-menu__item {{ isset($activeCarReport) ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                            <a href="#" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Xe bảo dưỡng</span>
                            </a>
                        </li>
                        <li class="m-menu__item {{ isset($activeCarDeleted) ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('backend.user.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Xe Bị Khóa</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu {{ isset($activeClassify) ? 'm-menu__item--open' : '' }}" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon la la la-list"></i>
                    <span class="m-menu__link-text">Phân loại</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item {{ isset($activeBrand) ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('backend.brand.index') }}" class="m-menu__link ">     
                                <i class="m-menu__link-icon la la-leaf"><span></span></i>
                                <span class="m-menu__link-text">Hãng xe</span>
                            </a>
                        </li>
                        <li class="m-menu__item {{ isset($activeCarType) ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                            <a href="#" class="m-menu__link ">
                                <i class="m-menu__link-icon la la-tag"><span></span></i>
                                <span class="m-menu__link-text">Kiểu xe</span>
                            </a>
                        </li>
                        <li class="m-menu__item {{ isset($activeGroup) ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                            <a href="#" class="m-menu__link ">
                                <i class="m-menu__link-icon la la-tag"><span></span></i>
                                <span class="m-menu__link-text">Group</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  {{ isset($activeCarError) ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                <a href="#" class="m-menu__link ">
                    <i class="m-menu__link-icon la la-bug"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">Sản phẩm lỗi</span>
                        </span>
                    </span>
                </a>
            </li>
            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Administration</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>
            <li class="m-menu__item  m-menu__item--submenu {{ isset($activeUserManagement) ? 'm-menu__item--open' : '' }}" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon la la-shield"></i>
                    <span class="m-menu__link-text">Authentication</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                            <span class="m-menu__link"><span class="m-menu__link-text">Authentication</span></span>
                        </li>
                        <li class="m-menu__item  {{ isset($activeUser) ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('backend.user.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon la la-user"><span></span></i>
                                <span class="m-menu__link-text">Users</span>
                            </a>
                        </li>
                        <li class="m-menu__item  {{ isset($activeRole) ? 'm-menu__item--active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('backend.user.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-map"><span></span></i>
                                <span class="m-menu__link-text">Roles</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <!-- END: Aside Menu -->
</div>