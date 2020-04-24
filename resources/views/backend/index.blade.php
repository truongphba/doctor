@extends('backend.layouts.layout')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-inner-layout">
                <div class="app-inner-layout__header-boxed p-0">
                    <div class="app-inner-layout__header page-title-icon-rounded text-white bg-premium-dark mb-4">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon"><i
                                            class="pe-7s-umbrella icon-gradient bg-sunny-morning"></i></div>
                                    <div>
                                        Quản trị hệ thống
                                        <div class="page-title-subheading">Báo cáo doanh thu, số lượng người dùng
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card mb-3 widget-chart widget-chart2 bg-tempting-azure text-left">
                                <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content text-white">
                                        <div class="widget-chart-flex">
                                            <div class="widget-title">Doanh thu</div>
                                            <div class="widget-subtitle text-white">Mục tiêu tháng</div>
                                        </div>
                                        <div class="widget-chart-flex">
                                            <div class="widget-numbers">
                                                1,000,000,000
                                                <small>VNĐ</small>
                                            </div>
                                            <div class="widget-description ml-auto text-white">
                                                <i class="fa fa-angle-up "></i>
                                                <span class="pl-1">175.5%</span></div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper">
                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                                        </div>
                                        <div class="progress-sub-label text-white">Tăng trưởng</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card mb-3 widget-chart widget-chart2 bg-warm-flame text-left">
                                <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content text-white">
                                        <div class="widget-chart-flex">
                                            <div class="widget-title">Người dùng</div>
                                            <div class="widget-subtitle text-white">Mục tiêu tháng</div>
                                        </div>
                                        <div class="widget-chart-flex">
                                            <div class="widget-numbers">
                                                1283
                                                <small>Người</small>
                                            </div>
                                            <div class="widget-description ml-auto text-white">
                                                <i class="fa fa-angle-up "></i>
                                                <span class="pl-1">120.5%</span></div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper">
                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                        </div>
                                        <div class="progress-sub-label text-white">Tăng trưởng</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div style="width: 100%" class="main-card mb-3 card">
                            <div class="card-body" style="position: relative;">
                                <h5 class="card-title">Biểu đồ doanh thu</h5>
                                <div id="chart-apex-area" style="min-height: 700px;">
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 502px; height: 433px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-wrapper-footer">
                <div class="app-footer">

                </div>
            </div>
        </div>
    </div>
    @endsection
