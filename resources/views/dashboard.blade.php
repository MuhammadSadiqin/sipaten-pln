<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!DOCTYPE html>
                <html lang="en">
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                        <meta
                          name="viewport"
                          content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
                        />
                        <meta
                          name="description"
                          content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities."
                        />
                        <meta
                          name="keywords"
                          content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app"
                        />
                        <meta name="author" content="PIXINVENT" />
                        <title>Dashboard1 - Apex responsive bootstrap 4 admin template</title>
                        <link
                          rel="apple-touch-icon"
                          sizes="60x60"
                          href="app-assets/img/ico/apple-icon-60.png"
                        />
                        <link
                          rel="apple-touch-icon"
                          sizes="76x76"
                          href="app-assets/img/ico/apple-icon-76.png"
                        />
                        <link
                          rel="apple-touch-icon"
                          sizes="120x120"
                          href="app-assets/img/ico/apple-icon-120.png"
                        />
                        <link
                          rel="apple-touch-icon"
                          sizes="152x152"
                          href="app-assets/img/ico/apple-icon-152.png"
                        />
                        <link
                          rel="shortcut icon"
                          type="image/x-icon"
                          href="app-assets/img/ico/favicon.ico"
                        />
                        <link
                          rel="shortcut icon"
                          type="image/png"
                          href="app-assets/img/ico/favicon-32.png"
                        />
                        <meta name="apple-mobile-web-app-capable" content="yes" />
                        <meta name="apple-touch-fullscreen" content="yes" />
                        <meta name="apple-mobile-web-app-status-bar-style" content="default" />
                        <link
                          href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900"
                          rel="stylesheet"
                        />
                        <!-- BEGIN VENDOR CSS-->
                        <!-- font icons-->
                        <link
                          rel="stylesheet"
                          type="text/css"
                          href="app-assets/fonts/feather/style.min.css"
                        />
                        <link
                          rel="stylesheet"
                          type="text/css"
                          href="app-assets/fonts/simple-line-icons/style.css"
                        />
                        <link
                          rel="stylesheet"
                          type="text/css"
                          href="app-assets/fonts/font-awesome/css/font-awesome.min.css"
                        />
                        <link
                          rel="stylesheet"
                          type="text/css"
                          href="app-assets/vendors/css/perfect-scrollbar.min.css"
                        />
                        <link
                          rel="stylesheet"
                          type="text/css"
                          href="app-assets/vendors/css/prism.min.css"
                        />
                        <link
                          rel="stylesheet"
                          type="text/css"
                          href="app-assets/vendors/css/chartist.min.css"
                        />
                        <!-- END VENDOR CSS-->
                        <!-- BEGIN APEX CSS-->
                        <link rel="stylesheet" type="text/css" href="app-assets/css/app.css" />
                        <!-- END APEX CSS-->
                        <!-- BEGIN Page Level CSS-->
                        <!-- END Page Level CSS-->
                      </head>
                <body>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                          <div class="card gradient-blackberry">
                            <div class="card-content">
                              <div class="card-body pt-2 pb-0">
                                <div class="media">
                                  <div class="media-body white text-left">
                                    <h3 class="font-large-1 mb-0">$2156</h3>
                                    <span>Total Tax</span>
                                  </div>
                                  <div class="media-right white text-right">
                                    <i class="icon-pie-chart font-large-1"></i>
                                  </div>
                                </div>
                              </div>
                              <div
                                id="Widget-line-chart"
                                class="height-75 WidgetlineChart WidgetlineChartshadow mb-2"
                              ></div>
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
                            <div
                              id="Widget-line-chart1"
                              class="height-75 WidgetlineChart WidgetlineChartshadow mb-2"
                            ></div>
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
                            <div
                              id="Widget-line-chart2"
                              class="height-75 WidgetlineChart WidgetlineChartshadow mb-2"
                            ></div>
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
                            <div
                              id="Widget-line-chart3"
                              class="height-75 WidgetlineChart WidgetlineChartshadow mb-2"
                            ></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Statistics cards Ends-->

                      <!-- BEGIN VENDOR JS-->
    <script
    src="app-assets/vendors/js/core/jquery-3.2.1.min.js"
    type="text/javascript"
  ></script>
  <script
    src="app-assets/vendors/js/core/popper.min.js"
    type="text/javascript"
  ></script>
  <script
    src="app-assets/vendors/js/core/bootstrap.min.js"
    type="text/javascript"
  ></script>
  <script
    src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js"
    type="text/javascript"
  ></script>
  <script
    src="app-assets/vendors/js/prism.min.js"
    type="text/javascript"
  ></script>
  <script
    src="app-assets/vendors/js/jquery.matchHeight-min.js"
    type="text/javascript"
  ></script>
  <script
    src="app-assets/vendors/js/screenfull.min.js"
    type="text/javascript"
  ></script>
  <script
    src="app-assets/vendors/js/pace/pace.min.js"
    type="text/javascript"
  ></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script
    src="app-assets/vendors/js/chartist.min.js"
    type="text/javascript"
  ></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN APEX JS-->
  <script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
  <script
    src="app-assets/js/notification-sidebar.js"
    type="text/javascript"
  ></script>
  <script src="app-assets/js/customizer.js" type="text/javascript"></script>
  <!-- END APEX JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/dashboard1.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
                </body>
                
                </html>
            </div>
        </div>
    </div>
</x-app-layout>
