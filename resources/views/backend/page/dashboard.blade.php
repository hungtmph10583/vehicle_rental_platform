@extends('layouts.backend.app')
@section('title', 'Dashboard Backend')
@section('content')
<div class="m-content">
    <!--begin:: Widgets/Stats-->
    <div class="m-portlet  m-portlet--unair">
        <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::Total Profit-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                THU NHẬP
                            </h4><br>
                            <span class="m-widget24__desc">
                                Tổng Thu Nhập
                            </span>
                            <span class="m-widget24__stats m--font-brand">
                                78.123.000
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                78%
                            </span>
                        </div>
                    </div>

                    <!--end::Total Profit-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Orders-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                BOOKINGS 
                            </h4><br>
                            <span class="m-widget24__desc">
                                Tổng Số Bookings
                            </span>
                            <span class="m-widget24__stats m--font-danger">
                                12
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                69%
                            </span>
                        </div>
                    </div>

                    <!--end::New Orders-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Feedbacks-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                XE
                            </h4><br>
                            <span class="m-widget24__desc">
                                Tổng Số Xe
                            </span>
                            <span class="m-widget24__stats m--font-info">
                                1349
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                84%
                            </span>
                        </div>
                    </div>

                    <!--end::New Feedbacks-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Users-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                TÀI KHOẢN
                            </h4><br>
                            <span class="m-widget24__desc">
                                Số Lượng Tài Khoản
                            </span>
                            <span class="m-widget24__stats m--font-success">
                                0
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                90%
                            </span>
                        </div>
                    </div>

                    <!--end::New Users-->
                </div>
            </div>
        </div>
    </div>

    <!--end:: Widgets/Stats-->

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-4">

            <!--begin:: Widgets/New Users-->
            <div class="m-portlet m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Tài khoản quản trị
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_widget4_tab1_content">
                            <!--begin::Widget 14-->
                            <div class="m-widget4">
                                <!--begin::Widget 14 Item-->
                                
                                <!--end::Widget 14 Item-->
                            </div>
                            <!--end::Widget 14-->
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/New Users-->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Inbound Bandwidth-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit  m-portlet--unair" style="min-height: 300px">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Inbound Bandwidth
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                    Today
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Activity</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">

                    <!--begin::Widget5-->
                    <div class="m-widget20">
                        <div class="m-widget20__number m--font-success">670</div>
                        <div class="m-widget20__chart" style="height:160px;">
                            <canvas id="m_chart_bandwidth1"></canvas>
                        </div>
                    </div>

                    <!--end::Widget 5-->
                </div>
            </div>

            <!--end:: Widgets/Inbound Bandwidth-->
            <div class="m--space-30"></div>

            <!--begin:: Widgets/Outbound Bandwidth-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit  m-portlet--unair" style="min-height: 300px">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Outbound Bandwidth
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                    Today
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Activity</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">

                    <!--begin::Widget5-->
                    <div class="m-widget20">
                        <div class="m-widget20__number m--font-warning">340</div>
                        <div class="m-widget20__chart" style="height:160px;">
                            <canvas id="m_chart_bandwidth2"></canvas>
                        </div>
                    </div>

                    <!--end::Widget 5-->
                </div>
            </div>

            <!--end:: Widgets/Outbound Bandwidth-->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Top Products-->
            <div class="m-portlet m-portlet--full-height m-portlet--fit  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Top Products
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                    All
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Activity</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">

                    <!--begin::Widget5-->
                    <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 480px">
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="{{ asset('theme/demo12/assets/app/media/img/client-logos/logo3.png') }}" alt="">
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    Phyton
                                </span><br>
                                <span class="m-widget4__sub">
                                    A Programming Language
                                </span>
                            </div>
                            <span class="m-widget4__ext">
                                <span class="m-widget4__number m--font-brand">+$17</span>
                            </span>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="{{ asset('theme/demo12/assets/app/media/img/client-logos/logo1.png') }}" alt="">
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    FlyThemes
                                </span><br>
                                <span class="m-widget4__sub">
                                    A Let's Fly Fast Again Language
                                </span>
                            </div>
                            <span class="m-widget4__ext">
                                <span class="m-widget4__number m--font-brand">+$300</span>
                            </span>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="{{ asset('theme/demo12/assets/app/media/img/client-logos/logo4.png') }}" alt="">
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    Starbucks
                                </span><br>
                                <span class="m-widget4__sub">
                                    Good Coffee & Snacks
                                </span>
                            </div>
                            <span class="m-widget4__ext">
                                <span class="m-widget4__number m--font-brand">+$300</span>
                            </span>
                        </div>
                        <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20" style="height:260px;">
                            <canvas id="m_chart_trends_stats_2"></canvas>
                        </div>
                    </div>

                    <!--end::Widget 5-->
                </div>
            </div>

            <!--end:: Widgets/Top Products-->
        </div>
    </div>

    <!--End::Section-->

    <div class="row">
        <div class="col-xl-8">

            <!--begin:: Widgets/Best Sellers-->
            <div class="m-portlet m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Best Sellers
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active show" data-toggle="tab" href="#m_widget5_tab1_content" role="tab" aria-selected="true">
                                    Today
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab2_content" role="tab" aria-selected="false">
                                    This Month
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab3_content" role="tab" aria-selected="false">
                                    All time
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">

                    <!--begin::Content-->
                    <div class="tab-content">
                        <div class="tab-pane active show" id="m_widget5_tab1_content" aria-expanded="true">

                            <!--begin::m-widget5-->
                            <div class="m-widget5">
                                <div class="m-widget5__item">
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__pic">
                                            <img class="m-widget7__img" src="theme/backend/assets/app/media/img//products/product6.jpg" alt="">
                                        </div>
                                        <div class="m-widget5__section">
                                            <h4 class="m-widget5__title">
                                                Great Logo Designn
                                            </h4>
                                            <span class="m-widget5__desc">
                                                Make Metronic Great Again.Lorem Ipsum Amet
                                            </span>
                                            <div class="m-widget5__info">
                                                <span class="m-widget5__author">
                                                    E-Commerce Platform:
                                                </span>
                                                <span class="m-widget5__info-author m--font-brand">
                                                    Shopee:
                                                </span>
                                                <span class="m-widget5__info-author-name">
                                                    Fly themes
                                                </span>
                                                <span class="m-widget5__info-label">
                                                    Released:
                                                </span>
                                                <span class="m-widget5__info-date m--font-info">
                                                    23.08.17
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__stats1">
                                            <span class="m-widget5__number">19,200</span><br>
                                            <span class="m-widget5__sales">price</span>
                                        </div>
                                        <div class="m-widget5__stats2">
                                            <span class="m-widget5__number">1046</span><br>
                                            <span class="m-widget5__votes">clicks</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__item">
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__pic">
                                            <img class="m-widget7__img" src="theme/backend/assets/app/media/img//products/product10.jpg" alt="">
                                        </div>
                                        <div class="m-widget5__section">
                                            <h4 class="m-widget5__title">
                                                Branding Mockup
                                            </h4>
                                            <span class="m-widget5__desc">
                                                Make Metronic Great Again.Lorem Ipsum Amet
                                            </span>
                                            <div class="m-widget5__info">
                                                <span class="m-widget5__author">
                                                    E-Commerce Platform:
                                                </span>
                                                <span class="m-widget5__info-author m--font-brand">
                                                    Shopee
                                                </span>
                                                <span class="m-widget5__info-label">
                                                    Released:
                                                </span>
                                                <span class="m-widget5__info-date m--font-info">
                                                    23.08.17
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__stats1">
                                            <span class="m-widget5__number">24,583</span><br>
                                            <span class="m-widget5__sales">price</span>
                                        </div>
                                        <div class="m-widget5__stats2">
                                            <span class="m-widget5__number">3809</span><br>
                                            <span class="m-widget5__votes">clicks</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__item">
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__pic">
                                            <img class="m-widget7__img" src="theme/backend/assets/app/media/img//products/product11.jpg" alt="">
                                        </div>
                                        <div class="m-widget5__section">
                                            <h4 class="m-widget5__title">
                                                Awesome Mobile App
                                            </h4>
                                            <span class="m-widget5__desc">
                                                Make Metronic Great Again.Lorem Ipsum Amet
                                            </span>
                                            <div class="m-widget5__info">
                                                <span class="m-widget5__author">
                                                    E-Commerce Platform:
                                                </span>
                                                <span class="m-widget5__info-author m--font-brand">
                                                    Tiktok
                                                </span>
                                                <span class="m-widget5__info-label">
                                                    Released:
                                                </span>
                                                <span class="m-widget5__info-date m--font-info">
                                                    23.08.17
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__stats1">
                                            <span class="m-widget5__number">10,054</span><br>
                                            <span class="m-widget5__sales">price</span>
                                        </div>
                                        <div class="m-widget5__stats2">
                                            <span class="m-widget5__number">1103</span><br>
                                            <span class="m-widget5__votes">clicks</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end::m-widget5-->
                        </div>
                        <div class="tab-pane" id="m_widget5_tab2_content" aria-expanded="false">

                            <!--begin::m-widget5-->
                            <div class="m-widget5">
                                <div class="m-widget5__item">
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__pic">
                                            <img class="m-widget7__img" src="theme/backend/assets/app/media/img//products/product11.jpg" alt="">
                                        </div>
                                        <div class="m-widget5__section">
                                            <h4 class="m-widget5__title">
                                                Branding Mockup
                                            </h4>
                                            <span class="m-widget5__desc">
                                                Make Metronic Great Again.Lorem Ipsum Amet
                                            </span>
                                            <div class="m-widget5__info">
                                                <span class="m-widget5__author">
                                                    E-Commerce Platform:
                                                </span>
                                                <span class="m-widget5__info-author m--font-brand">
                                                    Tiktok
                                                </span>
                                                <span class="m-widget5__info-label">
                                                    Released:
                                                </span>
                                                <span class="m-widget5__info-date m--font-info">
                                                    23.08.17
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__stats1">
                                            <span class="m-widget5__number">24,583</span><br>
                                            <span class="m-widget5__sales">price</span>
                                        </div>
                                        <div class="m-widget5__stats2">
                                            <span class="m-widget5__number">3809</span><br>
                                            <span class="m-widget5__votes">clicks</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__item">
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__pic">
                                            <img class="m-widget7__img" src="theme/backend/assets/app/media/img//products/product6.jpg" alt="">
                                        </div>
                                        <div class="m-widget5__section">
                                            <h4 class="m-widget5__title">
                                                Great Logo Designn
                                            </h4>
                                            <span class="m-widget5__desc">
                                                Make Metronic Great Again.Lorem Ipsum Amet
                                            </span>
                                            <div class="m-widget5__info">
                                                <span class="m-widget5__author">
                                                    E-Commerce Platform:
                                                </span>
                                                <span class="m-widget5__info-author m--font-brand">
                                                    Lazada
                                                </span>
                                                <span class="m-widget5__info-label">
                                                    Released:
                                                </span>
                                                <span class="m-widget5__info-date m--font-info">
                                                    23.08.17
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__stats1">
                                            <span class="m-widget5__number">19,200</span><br>
                                            <span class="m-widget5__sales">price</span>
                                        </div>
                                        <div class="m-widget5__stats2">
                                            <span class="m-widget5__number">1046</span><br>
                                            <span class="m-widget5__votes">clicks</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__item">
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__pic">
                                            <img class="m-widget7__img" src="theme/backend/assets/app/media/img//products/product10.jpg" alt="">
                                        </div>
                                        <div class="m-widget5__section">
                                            <h4 class="m-widget5__title">
                                                Awesome Mobile App
                                            </h4>
                                            <span class="m-widget5__desc">
                                                Make Metronic Great Again.Lorem Ipsum Amet
                                            </span>
                                            <div class="m-widget5__info">
                                                <span class="m-widget5__author">
                                                    E-Commerce Platform:
                                                </span>
                                                <span class="m-widget5__info-author m--font-brand">
                                                    Shopee
                                                </span>
                                                <span class="m-widget5__info-label">
                                                    Released:
                                                </span>
                                                <span class="m-widget5__info-date m--font-info">
                                                    23.08.17
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__stats1">
                                            <span class="m-widget5__number">10,054</span><br>
                                            <span class="m-widget5__sales">price</span>
                                        </div>
                                        <div class="m-widget5__stats2">
                                            <span class="m-widget5__number">1103</span><br>
                                            <span class="m-widget5__votes">clicks</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end::m-widget5-->
                        </div>
                        <div class="tab-pane" id="m_widget5_tab3_content" aria-expanded="false">

                            <!--begin::m-widget5-->
                            <div class="m-widget5">
                                <div class="m-widget5__item">
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__pic">
                                            <img class="m-widget7__img" src="theme/backend/assets/app/media/img//products/product10.jpg" alt="">
                                        </div>
                                        <div class="m-widget5__section">
                                            <h4 class="m-widget5__title">
                                                Branding Mockup
                                            </h4>
                                            <span class="m-widget5__desc">
                                                Make Metronic Great Again.Lorem Ipsum Amet
                                            </span>
                                            <div class="m-widget5__info">
                                                <span class="m-widget5__author">
                                                    E-Commerce Platform:
                                                </span>
                                                <span class="m-widget5__info-author m--font-brand">
                                                    Tiktok
                                                </span>
                                                <span class="m-widget5__info-label">
                                                    Released:
                                                </span>
                                                <span class="m-widget5__info-date m--font-info">
                                                    23.08.17
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__stats1">
                                            <span class="m-widget5__number">10.054</span><br>
                                            <span class="m-widget5__sales">price</span>
                                        </div>
                                        <div class="m-widget5__stats2">
                                            <span class="m-widget5__number">1103</span><br>
                                            <span class="m-widget5__votes">clicks</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__item">
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__pic">
                                            <img class="m-widget7__img" src="theme/backend/assets/app/media/img//products/product11.jpg" alt="">
                                        </div>
                                        <div class="m-widget5__section">
                                            <h4 class="m-widget5__title">
                                                Great Logo Designn
                                            </h4>
                                            <span class="m-widget5__desc">
                                                Make Metronic Great Again.Lorem Ipsum Amet
                                            </span>
                                            <div class="m-widget5__info">
                                                <span class="m-widget5__author">
                                                    E-Commerce Platform:
                                                </span>
                                                <span class="m-widget5__info-author m--font-brand">
                                                    Tiktok
                                                </span>
                                                <span class="m-widget5__info-label">
                                                    Released:
                                                </span>
                                                <span class="m-widget5__info-date m--font-info">
                                                    23.08.17
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__stats1">
                                            <span class="m-widget5__number m--font-danger">24,583</span><br>
                                            <span class="m-widget5__sales">price</span>
                                        </div>
                                        <div class="m-widget5__stats2">
                                            <span class="m-widget5__number">3809</span><br>
                                            <span class="m-widget5__votes">clicks</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__item">
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__pic">
                                            <img class="m-widget7__img" src="theme/backend/assets/app/media/img//products/product6.jpg" alt="">
                                        </div>
                                        <div class="m-widget5__section">
                                            <h4 class="m-widget5__title">
                                                Awesome Mobile App
                                            </h4>
                                            <span class="m-widget5__desc">
                                                Make Metronic Great Again.Lorem Ipsum Amet
                                            </span>
                                            <div class="m-widget5__info">
                                                <span class="m-widget5__author">
                                                    E-Commerce Platform:
                                                </span>
                                                <span class="m-widget5__info-author m--font-brand">
                                                    Lazada
                                                </span>
                                                <span class="m-widget5__info-label">
                                                    Released:
                                                </span>
                                                <span class="m-widget5__info-date m--font-info">
                                                    23.08.17
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget5__content">
                                        <div class="m-widget5__stats1">
                                            <span class="m-widget5__number">19,200</span><br>
                                            <span class="m-widget5__sales">1046</span>
                                        </div>
                                        <div class="m-widget5__stats2">
                                            <span class="m-widget5__number">1046</span><br>
                                            <span class="m-widget5__votes">clicks</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end::m-widget5-->
                        </div>
                    </div>

                    <!--end::Content-->
                </div>
            </div>

            <!--end:: Widgets/Best Sellers-->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Authors Profit-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Authors Profit
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                    All
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">Quick Actions</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Activity</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget4">
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="theme/backend/assets/app/media/img/client-logos/logo5.png" alt="">
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    Trump Themes
                                </span><br>
                                <span class="m-widget4__sub">
                                    Make Metronic Great Again
                                </span>
                            </div>
                            <span class="m-widget4__ext">
                                <span class="m-widget4__number m--font-brand">+$2500</span>
                            </span>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="theme/backend/assets/app/media/img/client-logos/logo4.png" alt="">
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    StarBucks
                                </span><br>
                                <span class="m-widget4__sub">
                                    Good Coffee &amp; Snacks
                                </span>
                            </div>
                            <span class="m-widget4__ext">
                                <span class="m-widget4__number m--font-brand">-$290</span>
                            </span>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="theme/backend/assets/app/media/img/client-logos/logo3.png" alt="">
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    Phyton
                                </span><br>
                                <span class="m-widget4__sub">
                                    A Programming Language
                                </span>
                            </div>
                            <span class="m-widget4__ext">
                                <span class="m-widget4__number m--font-brand">+$17</span>
                            </span>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="theme/backend/assets/app/media/img/client-logos/logo2.png" alt="">
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    GreenMakers
                                </span><br>
                                <span class="m-widget4__sub">
                                    Make Green Great Again
                                </span>
                            </div>
                            <span class="m-widget4__ext">
                                <span class="m-widget4__number m--font-brand">-$2.50</span>
                            </span>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="theme/backend/assets/app/media/img/client-logos/logo1.png" alt="">
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__title">
                                    FlyThemes
                                </span><br>
                                <span class="m-widget4__sub">
                                    A Let's Fly Fast Again Language
                                </span>
                            </div>
                            <span class="m-widget4__ext">
                                <span class="m-widget4__number m--font-brand">+$200</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Authors Profit-->
        </div>
    </div>

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-6">

            <!--begin:: Widgets/Support Cases-->
            <div class="m-portlet  m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Support Cases
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">Quick Actions</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Activity</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget16">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="m-widget16__head">
                                    <div class="m-widget16__item">
                                        <span class="m-widget16__sceduled">
                                            Type
                                        </span>
                                        <span class="m-widget16__amount m--align-right">
                                            Amount
                                        </span>
                                    </div>
                                </div>
                                <div class="m-widget16__body">

                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
                                        <span class="m-widget16__date">
                                            EPS
                                        </span>
                                        <span class="m-widget16__price m--align-right m--font-brand">
                                            +78,05%
                                        </span>
                                    </div>

                                    <!--end::widget item-->

                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
                                        <span class="m-widget16__date">
                                            PDO
                                        </span>
                                        <span class="m-widget16__price m--align-right m--font-accent">
                                            21,700
                                        </span>
                                    </div>

                                    <!--end::widget item-->

                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
                                        <span class="m-widget16__date">
                                            OPL Status
                                        </span>
                                        <span class="m-widget16__price m--align-right m--font-danger">
                                            Negative
                                        </span>
                                    </div>

                                    <!--end::widget item-->

                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
                                        <span class="m-widget16__date">
                                            Priority
                                        </span>
                                        <span class="m-widget16__price m--align-right m--font-brand">
                                            +500,200
                                        </span>
                                    </div>

                                    <!--end::widget item-->

                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
                                        <span class="m-widget16__date">
                                            Net Prifit
                                        </span>
                                        <span class="m-widget16__price m--align-right m--font-brand">
                                            $18,540,60
                                        </span>
                                    </div>

                                    <!--end::widget item-->
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="m-widget16__stats">
                                    <div class="m-widget16__visual">
                                        <div id="m_chart_support_tickets" style="height: 180px">
                                        </div>
                                    </div>
                                    <div class="m-widget16__legends">
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-info"></span>
                                            <span class="m-widget16__legend-text">20% Margins</span>
                                        </div>
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-accent"></span>
                                            <span class="m-widget16__legend-text">80% Profit</span>
                                        </div>
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-danger"></span>
                                            <span class="m-widget16__legend-text">10% Lost</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Support Stats-->
        </div>
        <div class="col-xl-6">

            <!--begin:: Finance Stats-->
            <div class="m-portlet  m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Finance Stats
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">Quick Actions</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Activity</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget1 m-widget1--paddingless">
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">IPO Margin</h3>
                                    <span class="m-widget1__desc">Awerage IPO Margin</span>
                                </div>
                                <div class="col m--align-right">
                                    <span class="m-widget1__number m--font-accent">+24%</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">Payments</h3>
                                    <span class="m-widget1__desc">Yearly Expenses</span>
                                </div>
                                <div class="col m--align-right">
                                    <span class="m-widget1__number m--font-info">+$560,800</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">Logistics</h3>
                                    <span class="m-widget1__desc">Overall Regional Logistics</span>
                                </div>
                                <div class="col m--align-right">
                                    <span class="m-widget1__number m--font-warning">-10%</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">Expenses</h3>
                                    <span class="m-widget1__desc">Balance</span>
                                </div>
                                <div class="col m--align-right">
                                    <span class="m-widget1__number m--font-danger">$345,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Finance Stats-->
        </div>
    </div>

    <!--End::Section-->

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-6 col-lg-12">

            <!--Begin::Portlet-->
            <div class="m-portlet  m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Recent Activities
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">Quick Actions</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Activity</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-scrollable" data-scrollable="true" data-height="380" data-mobile-height="300">

                        <!--Begin::Timeline 2 -->
                        <div class="m-timeline-2">
                            <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
                                <div class="m-timeline-2__item">
                                    <span class="m-timeline-2__item-time">10:00</span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-danger"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text  m--padding-top-5">
                                        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                        incididunt ut labore et dolore magna
                                    </div>
                                </div>
                                <div class="m-timeline-2__item m--margin-top-30">
                                    <span class="m-timeline-2__item-time">12:45</span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-success"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
                                        AEOL Meeting With
                                    </div>
                                    <div class="m-list-pics m-list-pics--sm m--padding-left-20">
                                        <a href="#"><img src="{{ asset('theme/demo12/assets/app/media/img/users/100_4.jpg') }}" title=""></a>
                                        <a href="#"><img src="{{ asset('theme/demo12/assets/app/media/img/users/100_13.jpg') }}" title=""></a>
                                        <a href="#"><img src="{{ asset('theme/demo12/assets/app/media/img/users/100_11.jpg') }}" title=""></a>
                                        <a href="#"><img src="{{ asset('theme/demo12/assets/app/media/img/users/100_14.jpg') }}" title=""></a>
                                    </div>
                                </div>
                                <div class="m-timeline-2__item m--margin-top-30">
                                    <span class="m-timeline-2__item-time">14:00</span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-brand"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                        Make Deposit <a href="#" class="m-link m-link--brand m--font-bolder">USD 700</a> To ESL.
                                    </div>
                                </div>
                                <div class="m-timeline-2__item m--margin-top-30">
                                    <span class="m-timeline-2__item-time">16:00</span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-warning"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                        incididunt ut labore et dolore magna elit enim at minim<br>
                                        veniam quis nostrud
                                    </div>
                                </div>
                                <div class="m-timeline-2__item m--margin-top-30">
                                    <span class="m-timeline-2__item-time">17:00</span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-info"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                        Placed a new order in <a href="#" class="m-link m-link--brand m--font-bolder">SIGNATURE MOBILE</a> marketplace.
                                    </div>
                                </div>
                                <div class="m-timeline-2__item m--margin-top-30">
                                    <span class="m-timeline-2__item-time">16:00</span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-brand"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                        incididunt ut labore et dolore magna elit enim at minim<br>
                                        veniam quis nostrud
                                    </div>
                                </div>
                                <div class="m-timeline-2__item m--margin-top-30">
                                    <span class="m-timeline-2__item-time">17:00</span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-danger"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                        Received a new feedback on <a href="#" class="m-link m-link--brand m--font-bolder">FinancePro App</a> product.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--End::Timeline 2 -->
                    </div>
                </div>
            </div>

            <!--End::Portlet-->
        </div>
        <div class="col-xl-6 col-lg-12">

            <!--Begin::Portlet-->
            <div class="m-portlet m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Recent Notifications
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
                                    Today
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content" role="tab">
                                    Month
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_widget2_tab1_content">

                            <!--Begin::Timeline 3 -->
                            <div class="m-timeline-3">
                                <div class="m-timeline-3__items">
                                    <div class="m-timeline-3__item m-timeline-3__item--info">
                                        <span class="m-timeline-3__item-time">09:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Bob
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--warning">
                                        <span class="m-timeline-3__item-time">10:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor sit amit
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Sean
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
                                        <span class="m-timeline-3__item-time">11:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor sit amit eiusmdd tempor
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By James
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--success">
                                        <span class="m-timeline-3__item-time">12:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By James
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--danger">
                                        <span class="m-timeline-3__item-time">14:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Derrick
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--info">
                                        <span class="m-timeline-3__item-time">15:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor sit amit,consectetur
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Iman
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
                                        <span class="m-timeline-3__item-time">17:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor sit consectetur eiusmdd tempor
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Aziko
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--End::Timeline 3 -->
                        </div>
                        <div class="tab-pane" id="m_widget2_tab2_content">

                            <!--Begin::Timeline 3 -->
                            <div class="m-timeline-3">
                                <div class="m-timeline-3__items">
                                    <div class="m-timeline-3__item m-timeline-3__item--info">
                                        <span class="m-timeline-3__item-time m--font-focus">09:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Bob
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--warning">
                                        <span class="m-timeline-3__item-time m--font-warning">10:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                There are many variations of passages of Lorem Ipsum available.
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Sean
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
                                        <span class="m-timeline-3__item-time m--font-primary">11:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By James
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--success">
                                        <span class="m-timeline-3__item-time m--font-success">12:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By James
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--danger">
                                        <span class="m-timeline-3__item-time m--font-warning">14:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Latin words, combined with a handful of model sentence structures.
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Derrick
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--info">
                                        <span class="m-timeline-3__item-time m--font-info">15:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Iman
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
                                        <span class="m-timeline-3__item-time m--font-danger">17:00</span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem Ipsum is therefore always free from repetition, injected humour.
                                            </span><br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Aziko
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--End::Timeline 3 -->
                        </div>
                    </div>
                </div>
            </div>

            <!--End::Portlet-->
        </div>
    </div>

    <!--End::Section-->

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-8">

            <!--begin:: Widgets/Application Sales-->
            <div class="m-portlet m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Application Sales
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget11_tab1_content" role="tab">
                                    Last Month
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget11_tab2_content" role="tab">
                                    All Time
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_widget11_tab1_content">

                            <!--begin::Widget 11-->
                            <div class="m-widget11">
                                <div class="table-responsive">

                                    <!--begin::Table-->
                                    <table class="table">

                                        <!--begin::Thead-->
                                        <thead>
                                            <tr>
                                                <td class="m-widget11__label">#</td>
                                                <td class="m-widget11__app">Application</td>
                                                <td class="m-widget11__sales">Sales</td>
                                                <td class="m-widget11__change">Change</td>
                                                <td class="m-widget11__price">Avg Price</td>
                                                <td class="m-widget11__total m--align-right">Total</td>
                                            </tr>
                                        </thead>

                                        <!--end::Thead-->

                                        <!--begin::Tbody-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <span class="m-widget11__title">Vertex 2.0</span>
                                                    <span class="m-widget11__sub">Vertex To By Again</span>
                                                </td>
                                                <td>19,200</td>
                                                <td>
                                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                        <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                        <canvas id="m_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                    </div>
                                                </td>
                                                <td>$63</td>
                                                <td class="m--align-right m--font-brand">$14,740</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="m-widget11__title">Metronic</span>
                                                    <span class="m-widget11__sub">Powerful Admin Theme</span>
                                                </td>
                                                <td>24,310</td>
                                                <td>
                                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                        <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                        <canvas id="m_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                    </div>
                                                </td>
                                                <td>$39</td>
                                                <td class="m--align-right m--font-brand">$16,010</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="m-widget11__title">Apex</span>
                                                    <span class="m-widget11__sub">The Best Selling App</span>
                                                </td>
                                                <td>9,076</td>
                                                <td>
                                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                        <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                        <canvas id="m_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                    </div>
                                                </td>
                                                <td>$105</td>
                                                <td class="m--align-right m--font-brand">$37,200</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="m-widget11__title">Cascades</span>
                                                    <span class="m-widget11__sub">Design Tool</span>
                                                </td>
                                                <td>11,094</td>
                                                <td>
                                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                        <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                        <canvas id="m_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                    </div>
                                                </td>
                                                <td>$16</td>
                                                <td class="m--align-right m--font-brand">$8,520</td>
                                            </tr>
                                        </tbody>

                                        <!--end::Tbody-->
                                    </table>

                                    <!--end::Table-->
                                </div>
                                <div class="m-widget11__action m--align-right">
                                    <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">Generate Report</button>
                                </div>
                            </div>

                            <!--end::Widget 11-->
                        </div>
                        <div class="tab-pane" id="m_widget11_tab2_content">

                            <!--begin::Widget 11-->
                            <div class="m-widget11">
                                <div class="table-responsive">

                                    <!--begin::Table-->
                                    <table class="table">

                                        <!--begin::Thead-->
                                        <thead>
                                            <tr>
                                                <td class="m-widget11__label">#</td>
                                                <td class="m-widget11__app">Application</td>
                                                <td class="m-widget11__sales">Sales</td>
                                                <td class="m-widget11__change">Change</td>
                                                <td class="m-widget11__price">Avg Price</td>
                                                <td class="m-widget11__total m--align-right">Total</td>
                                            </tr>
                                        </thead>

                                        <!--end::Thead-->

                                        <!--begin::Tbody-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <span class="m-widget11__title">Loop</span>
                                                    <span class="m-widget11__sub">CRM System</span>
                                                </td>
                                                <td>19,200</td>
                                                <td>
                                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                        <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                        <canvas id="m_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                    </div>
                                                </td>
                                                <td>$63</td>
                                                <td class="m--align-right m--font-brand">$34,740</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="m-widget11__title">Selto</span>
                                                    <span class="m-widget11__sub">Powerful Website Builder</span>
                                                </td>
                                                <td>24,310</td>
                                                <td>
                                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                        <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                        <canvas id="m_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                    </div>
                                                </td>
                                                <td>$39</td>
                                                <td class="m--align-right m--font-brand">$46,010</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="m-widget11__title">Jippo</span>
                                                    <span class="m-widget11__sub">The Best Selling App</span>
                                                </td>
                                                <td>9,076</td>
                                                <td>
                                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                        <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                        <canvas id="m_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                    </div>
                                                </td>
                                                <td>$105</td>
                                                <td class="m--align-right m--font-brand">$67,800</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="m-widget11__title">Verto</span>
                                                    <span class="m-widget11__sub">Web Development Tool</span>
                                                </td>
                                                <td>11,094</td>
                                                <td>
                                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                        <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                        <canvas id="m_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                    </div>
                                                </td>
                                                <td>$16</td>
                                                <td class="m--align-right m--font-brand">$18,520</td>
                                            </tr>
                                        </tbody>

                                        <!--end::Tbody-->
                                    </table>

                                    <!--end::Table-->
                                </div>
                                <div class="m-widget11__action m--align-right">
                                    <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">Generate Report</button>
                                </div>
                            </div>

                            <!--end::Widget 11-->
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Application Sales-->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Latest Updates-->
            <div class="m-portlet m-portlet--full-height m-portlet--fit  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Latest Updates
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                    Today
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Activity</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 350px">
                        <div class="m-widget4__item">
                            <div class="m-widget4__ext">
                                <a href="#" class="m-widget4__icon m--font-brand">
                                    <i class="flaticon-interface-3"></i>
                                </a>
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__text">
                                    Make Metronic Great Again
                                </span>
                            </div>
                            <div class="m-widget4__ext">
                                <span class="m-widget4__number m--font-accent">+500</span>
                            </div>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__ext">
                                <a href="#" class="m-widget4__icon m--font-brand">
                                    <i class="flaticon-folder-4"></i>
                                </a>
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__text">
                                    Green Maker Team
                                </span>
                            </div>
                            <div class="m-widget4__ext">
                                <span class="m-widget4__stats m--font-info">
                                    <span class="m-widget4__number m--font-accent">-64</span>
                                </span>
                            </div>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__ext">
                                <a href="#" class="m-widget4__icon m--font-brand">
                                    <i class="flaticon-line-graph"></i>
                                </a>
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__text">
                                    Make Apex Great Again
                                </span>
                            </div>
                            <div class="m-widget4__ext">
                                <span class="m-widget4__stats m--font-info">
                                    <span class="m-widget4__number m--font-accent">+1080</span>
                                </span>
                            </div>
                        </div>
                        <div class="m-widget4__item m-widget4__item--last">
                            <div class="m-widget4__ext">
                                <a href="#" class="m-widget4__icon m--font-brand">
                                    <i class="flaticon-diagram"></i>
                                </a>
                            </div>
                            <div class="m-widget4__info">
                                <span class="m-widget4__text">
                                    A Programming Language
                                </span>
                            </div>
                            <div class="m-widget4__ext">
                                <span class="m-widget4__stats m--font-info">
                                    <span class="m-widget4__number m--font-accent">+19</span>
                                </span>
                            </div>
                        </div>
                        <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20 m-portlet-fit--bottom1" style="height:120px;">
                            <canvas id="m_chart_latest_updates"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Latest Updates-->
        </div>
    </div>

    <!--End::Section-->

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-8">
            <div class="m-portlet m-portlet--mobile  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Exclusive Datatable Plugin
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__section m-nav__section--first">
                                                            <span class="m-nav__section-text">Quick Actions</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Create Post</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Send Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                <span class="m-nav__link-text">Upload File</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__section">
                                                            <span class="m-nav__section-text">Useful Links</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">FAQ</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Support</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                        </li>
                                                        <li class="m-nav__item m--hide">
                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">

                    <!--begin: Datatable -->
                    <div class="m_datatable" id="m_datatable_latest_orders"></div>

                    <!--end: Datatable -->
                </div>
            </div>
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Audit Log-->
            <div class="m-portlet m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Audit Log
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                                    Today
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                                    Week
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
                                    Month
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_widget4_tab1_content">
                            <div class="m-scrollable" data-scrollable="true" data-height="400" style="height: 400px; overflow: hidden;">
                                <div class="m-list-timeline m-list-timeline--skin-light">
                                    <div class="m-list-timeline__items">
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                            <span class="m-list-timeline__text">12 new users registered</span>
                                            <span class="m-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                            <span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                            <span class="m-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                            <span class="m-list-timeline__text">New invoice received</span>
                                            <span class="m-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                            <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                            <span class="m-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                            <span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
                                            <span class="m-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                            <span class="m-list-timeline__text">Production server down</span>
                                            <span class="m-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                            <span class="m-list-timeline__text">Production server up</span>
                                            <span class="m-list-timeline__time">5 hrs</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                            <span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                            <span class="m-list-timeline__time">7 hrs</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                            <span class="m-list-timeline__text">12 new users registered</span>
                                            <span class="m-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                            <span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                            <span class="m-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                            <span class="m-list-timeline__text">New invoice received</span>
                                            <span class="m-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                            <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                            <span class="m-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                            <span class="m-list-timeline__text">New invoice received</span>
                                            <span class="m-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                            <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                            <span class="m-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                            <span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
                                            <span class="m-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                            <span class="m-list-timeline__text">Production server down</span>
                                            <span class="m-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                            <span class="m-list-timeline__text">Production server up</span>
                                            <span class="m-list-timeline__time">5 hrs</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                            <span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                            <span class="m-list-timeline__time">7 hrs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="m_widget4_tab2_content">
                        </div>
                        <div class="tab-pane" id="m_widget4_tab3_content">
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Audit Log-->
        </div>
    </div>

    <!--End::Section-->
</div>
@endsection