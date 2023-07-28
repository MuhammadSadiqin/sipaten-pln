@extends('layouts.master')
@section('content')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <!--Statistics cards Starts-->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-blackberry">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <span>Total TO Ganti Meter</span>
                                            <h3 class="font-large-1 mb-0">7000</h3>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-pie-chart font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-ibiza-sunset">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">$1567</h3>
                                            <span>Total Cost</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-bulb font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-green-tea">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">$4566</h3>
                                            <span>Total Sales</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-graph font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card gradient-pomegranate">
                            <div class="card-content">
                                <div class="card-body pt-2 pb-0">
                                    <div class="media">
                                        <div class="media-body white text-left">
                                            <h3 class="font-large-1 mb-0">$8695</h3>
                                            <span>Total Earning</span>
                                        </div>
                                        <div class="media-right white text-right">
                                            <i class="icon-wallet font-large-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Statistics cards Ends-->

                <!--Line with Area Chart 1 Starts-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">PRODUCTS SALES</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="chart-info mb-3 ml-3">
                                        <span class="gradient-blackberry d-inline-block rounded-circle mr-1"
                                            style="width: 15px; height: 15px"></span>
                                        Sales
                                        <span class="gradient-mint d-inline-block rounded-circle mr-1 ml-2"
                                            style="width: 15px; height: 15px"></span>
                                        Visits
                                    </div>
                                    <div id="line-area" class="height-350 lineArea"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Line with Area Chart 1 Ends-->
            </div>
        </div>
        <!-- END : End Main Content-->
    </div>
@endsection
