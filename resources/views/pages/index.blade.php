
@extends('layouts.app')
@section('content')
    

<div class="page-wrapper">
    <!-- START HEADER-->
    <header class="header">
        <div class="page-brand">
            <a href="index-2.html">
                <span class="brand">AdminCa</span>
                <span class="brand-mini">AC</span>
            </a>
        </div>
        <div class="flexbox flex-1">
            <!-- START TOP-LEFT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li>
                    <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </li>
                <li>
                    <a class="nav-link search-toggler js-search-toggler"><i class="ti-search"></i>
                        <span>Search here...</span>
                    </a>
                </li>
            </ul>
            <!-- END TOP-LEFT TOOLBAR-->
            <!-- START TOP-RIGHT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li class="timeout-toggler">
                    <a class="nav-link toolbar-icon" data-toggle="modal" data-target="#session-dialog" href="javascript:;"><i class="ti-alarm-clock timeout-toggler-icon rel"><span class="notify-signal"></span></i></a>
                </li>
                <li class="dropdown dropdown-inbox">
                    <a class="nav-link dropdown-toggle toolbar-icon" data-toggle="dropdown" href="javascript:;"><i class="ti-email"></i>
                        <span class="envelope-badge">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                        <div class="dropdown-arrow"></div>
                        <div class="dropdown-header text-center">
                            <div>
                                <span class="font-18"><strong>7 New</strong> Messages</span>
                            </div>
                            <a class="text-muted font-13" href="javascript:;">view all</a>
                        </div>
                        <div class="p-3">
                            <div class="media-list media-list-divider scroller" data-height="350px" data-color="#71808f">
                                <a class="media p-3">
                                    <div class="media-img">
                                        <img class="img-circle" src="assets/img/users/u8.jpg" alt="image" />
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">Lynn Weaver<small class="text-muted float-right">Just now</small></div>
                                        <div class="font-13 text-muted">Your proposal interested me.</div>
                                        <div class="font-13 mt-1">
                                            <span class="d-inline-flex align-items-center text-primary"><i class="ti-support mr-2"></i>Support</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="media p-3">
                                    <div class="media-img">
                                        <img class="img-circle" src="assets/img/users/u6.jpg" alt="image" />
                                    </div>
                                    <div class="media-body">
                                        <div class="font-strong">Connor Perez<small class="text-muted float-right">18 mins</small></div>
                                        <div class="font-13 text-muted">Your proposal interested me.</div>
                                        <div class="font-13 mt-1">
                                            <span class="d-inline-flex align-items-center text-success mr-3"><i class="ti-lock mr-2"></i>Security</span>
                                            <span class="d-inline-flex align-items-center text-pink"><i class="ti-credit-card mr-2"></i>Payment</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="media p-3">
                                    <div class="media-img">
                                        <img class="img-circle" src="assets/img/users/u11.jpg" alt="image" />
                                    </div>
                                    <div class="media-body">
                                        <div class="font-strong">Tyrone Carroll<small class="text-muted float-right">42 mins</small></div>
                                        <div class="font-13 text-muted">Your proposal interested me.</div>
                                    </div>
                                </a>
                                <a class="media p-3">
                                    <div class="media-img">
                                        <img class="img-circle" src="assets/img/users/u10.jpg" alt="image" />
                                    </div>
                                    <div class="media-body">
                                        <div class="font-strong">Stella Obrien<small class="text-muted float-right">1 hrs</small></div>
                                        <div class="font-13 text-muted">Your proposal interested me.</div>
                                        <div class="font-13 mt-1">
                                            <span class="d-inline-flex align-items-center text-purple"><i class="ti-settings mr-2"></i>Technical</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="media p-3">
                                    <div class="media-img">
                                        <img class="img-circle" src="assets/img/users/u2.jpg" alt="image" />
                                    </div>
                                    <div class="media-body">
                                        <div class="font-strong">Becky Brooks<small class="text-muted float-right">3 hrs</small></div>
                                        <div class="font-13 text-muted">Your proposal interested me.</div>
                                    </div>
                                </a>
                                <a class="media p-3">
                                    <div class="media-img">
                                        <img class="img-circle" src="assets/img/users/u5.jpg" alt="image" />
                                    </div>
                                    <div class="media-body">
                                        <div class="font-strong">Bob Gonzalez<small class="text-muted float-right">3 hrs</small></div>
                                        <div class="font-13 text-muted">Your proposal interested me.</div>
                                        <div class="font-13 mt-1">
                                            <span class="d-inline-flex align-items-center text-primary mr-3"><i class="ti-support mr-2"></i>Support</span>
                                            <span class="d-inline-flex align-items-center text-pink"><i class="ti-shopping-cart mr-2"></i>Shopping</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="media p-3">
                                    <div class="media-img">
                                        <img class="img-circle" src="assets/img/users/u9.jpg" alt="image" />
                                    </div>
                                    <div class="media-body">
                                        <div class="font-strong">Tammy Newman<small class="text-muted float-right">3 hrs</small></div>
                                        <div class="font-13 text-muted">Your proposal interested me.</div>
                                        <div class="font-13 mt-1">
                                            <span class="d-inline-flex align-items-center text-primary"><i class="ti-ticket mr-2"></i>Client Support</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropdown-notification">
                    <a class="nav-link dropdown-toggle toolbar-icon" data-toggle="dropdown" href="javascript:;"><i class="ti-bell rel"><span class="notify-signal"></span></i></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                        <div class="dropdown-arrow"></div>
                        <div class="dropdown-header text-center">
                            <div>
                                <span class="font-18"><strong>14 New</strong> Notifications</span>
                            </div>
                            <a class="text-muted font-13" href="javascript:;">view all</a>
                        </div>
                        <div class="p-3">
                            <ul class="timeline scroller" data-height="320px">
                                <li class="timeline-item"><i class="ti-check timeline-icon"></i>2 Issue fixed<small class="float-right text-muted ml-2 nowrap">Just now</small></li>
                                <li class="timeline-item"><i class="ti-announcement timeline-icon"></i>
                                    <span>7 new feedback
                                        <span class="badge badge-warning badge-pill ml-2">important</span>
                                    </span><small class="float-right text-muted">5 mins</small></li>
                                <li class="timeline-item"><i class="ti-truck timeline-icon"></i>25 new orders sent<small class="float-right text-muted ml-2 nowrap">24 mins</small></li>
                                <li class="timeline-item"><i class="ti-shopping-cart timeline-icon"></i>12 New orders<small class="float-right text-muted ml-2 nowrap">45 mins</small></li>
                                <li class="timeline-item"><i class="ti-user timeline-icon"></i>18 new users registered<small class="float-right text-muted ml-2 nowrap">1 hrs</small></li>
                                <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>
                                    <span>Server Error
                                        <span class="badge badge-success badge-pill ml-2">resolved</span>
                                    </span><small class="float-right text-muted">2 hrs</small></li>
                                <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>
                                    <span>System Warning
                                        <a class="text-purple ml-2">Check</a>
                                    </span><small class="float-right text-muted ml-2 nowrap">12:07</small></li>
                                <li class="timeline-item"><i class="fa fa-file-excel-o timeline-icon"></i>The invoice is ready<small class="float-right text-muted ml-2 nowrap">12:30</small></li>
                                <li class="timeline-item"><i class="ti-shopping-cart timeline-icon"></i>5 New Orders<small class="float-right text-muted ml-2 nowrap">13:45</small></li>
                                <li class="timeline-item"><i class="ti-arrow-circle-up timeline-icon"></i>Production server up<small class="float-right text-muted ml-2 nowrap">1 days ago</small></li>
                                <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>Server overloaded 91%<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                                <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>Server error<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                        <span>Super User</span>
                        <img src="assets/img/users/admin-image.png" alt="image" />
                    </a>
                    <div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu">
                        <div class="dropdown-arrow"></div>
                        <div class="dropdown-header">
                            <div class="admin-avatar">
                                <img src="assets/img/users/admin-image.png" alt="image" />
                            </div>
                            <div>
                                <h5 class="font-strong text-white">Super User</h5>
                                <div>
                                    <span class="admin-badge mr-3"><i class="ti-alarm-clock mr-2"></i>30m.</span>
                                    <span class="admin-badge"><i class="ti-lock mr-2"></i>Safe Mode</span>
                                </div>
                            </div>
                        </div>
                        <div class="admin-menu-features">
                            <a class="admin-features-item" href="javascript:;"><i class="ti-user"></i>
                                <span>PROFILE</span>
                            </a>
                            <a class="admin-features-item" href="javascript:;"><i class="ti-support"></i>
                                <span>SUPPORT</span>
                            </a>
                            <a class="admin-features-item" href="javascript:;"><i class="ti-settings"></i>
                                <span>SETTINGS</span>
                            </a>
                        </div>
                        <div class="admin-menu-content">
                            <div class="text-muted mb-2">Your Wallet</div>
                            <div><i class="ti-wallet h1 mr-3 text-light"></i>
                                <span class="h1 text-success"><sup>$</sup>12.7k</span>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <a class="text-muted" href="javascript:;">Earnings history</a>
                                <a class="d-flex align-items-center" href="javascript:;">Logout<i class="ti-shift-right ml-2 font-20"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="nav-link quick-sidebar-toggler">
                        <span class="ti-align-right"></span>
                    </a>
                </li>
            </ul>
            <!-- END TOP-RIGHT TOOLBAR-->
        </div>
    </header>
    <!-- END HEADER-->
    <!-- START SIDEBAR-->
    <nav class="page-sidebar" id="sidebar">
        <div id="sidebar-collapse">
            <ul class="side-menu metismenu">
                <li class="active">
                    <a href="javascript:;"><i class="sidebar-item-icon ti-home"></i>
                        <span class="nav-label">Dashboards</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse in">
                        <li>
                            <a class="active" href="index-2.html">Visitors</a>
                        </li>
                        <li>
                            <a href="dashboard_ecommerce.html">Shop</a>
                        </li>
                        <li>
                            <a href="dashboard_blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="dashboard_4.html">Dashboard v4</a>
                        </li>
                        <li>
                            <a href="dashboard_5.html">Dashboard v5</a>
                        </li>
                        <li>
                            <a href="dashboard_6.html">Dashboard v6</a>
                        </li>
                        <li>
                            <a href="dashboard_7.html">Dashboard v7</a>
                        </li>
                    </ul>
                </li>
                <li class="heading">FEATURES</li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-paint-roller"></i>
                        <span class="nav-label">Basic UI</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="colors.html">Colors</a>
                        </li>
                        <li>
                            <a href="typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="panels.html">Panels</a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">Tabs</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="tabs-pill.html">Pills</a>
                                </li>
                                <li>
                                    <a href="tabs-line.html">Line tabs</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="alerts.html">Alerts</a>
                        </li>
                        <li>
                            <a href="tooltip_popover.html">Tooltip &amp; Popover</a>
                        </li>
                        <li>
                            <a href="badges_progress.html">Badges &amp; Progress</a>
                        </li>
                        <li>
                            <a href="lists.html">List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-package"></i>
                        <span class="nav-label">Components</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="toastr.html">Toastr Notifications</a>
                        </li>
                        <li>
                            <a href="sweetalert.html">Sweet Alert</a>
                        </li>
                        <li>
                            <a href="alertify.html">Alertify</a>
                        </li>
                        <li>
                            <a href="idle_timer.html">Idle timer</a>
                        </li>
                        <li>
                            <a href="session_timeout.html">Session Timeout</a>
                        </li>
                        <li>
                            <a href="code_editor.html">Code Editor</a>
                        </li>
                        <li>
                            <a href="tree_view.html">Tree View</a>
                        </li>
                        <li>
                            <a href="nestable.html">Nestable List</a>
                        </li>
                        <li>
                            <a href="clipboard.html">Clipboard</a>
                        </li>
                        <li>
                            <a href="masonry.html">Masonry</a>
                        </li>
                        <li>
                            <a href="pdf_viewer.html">PDF viewer</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-heart"></i>
                        <span class="nav-label">Buttons</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">Base Buttons</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="buttons-default.html">Default style</a>
                                </li>
                                <li>
                                    <a href="buttons-rounded.html">Rounded style</a>
                                </li>
                                <li>
                                    <a href="buttons-square.html">Square style</a>
                                </li>
                                <li>
                                    <a href="buttons-air.html">Air style</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="button-icon.html">Button Icon</a>
                        </li>
                        <li>
                            <a href="button-labeled.html">Labeled buttons</a>
                        </li>
                        <li>
                            <a href="button-animated.html">Animated buttons</a>
                        </li>
                        <li>
                            <a href="buttons-fab.html">FAB buttons</a>
                        </li>
                        <li>
                            <a href="button-groups.html">Button Groups</a>
                        </li>
                        <li>
                            <a href="button-dropdowns.html">Button dropdowns</a>
                        </li>
                        <li>
                            <a href="buttons-social.html">Social Buttons</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-layers-alt"></i>
                        <span class="nav-label">Widgets</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="widgets-statistics.html">Statistics Widgets</a>
                        </li>
                        <li>
                            <a href="widgets-list.html">App &amp; List Widgets</a>
                        </li>
                        <li>
                            <a href="widgets-user.html">User Widgets</a>
                        </li>
                        <li>
                            <a href="widgets-blog.html">Blog Widgets</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-check-box"></i>
                        <span class="nav-label">Forms</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">Form Controls</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="form-controls.html">Inputs</a>
                                </li>
                                <li>
                                    <a href="form-switch.html">Switch</a>
                                </li>
                                <li>
                                    <a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
                                </li>
                                <li>
                                    <a href="form-input-groups.html">Input Groups</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="form_layouts.html">Form Layouts</a>
                        </li>
                        <li>
                            <a href="form_advanced.html">Advanced Plugins</a>
                        </li>
                        <li>
                            <a href="form_masks.html">Form input masks</a>
                        </li>
                        <li>
                            <a href="form_validation.html">Form Validation</a>
                        </li>
                        <li>
                            <a href="text_editors.html">Text Editors</a>
                        </li>
                        <li>
                            <a href="form_dropzone.html">Dropzone File Upload</a>
                        </li>
                        <li>
                            <a href="image_cropping.html">Image Cropping</a>
                        </li>
                        <li>
                            <a href="autocomplete.html">Autocomplete</a>
                        </li>
                        <li>
                            <a href="form_wizard.html">Form Wizard</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-layout-tab-window"></i>
                        <span class="nav-label">Tables</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="table_basic.html">Basic Tables</a>
                        </li>
                        <li>
                            <a href="datatables.html">Datatables</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-bar-chart"></i>
                        <span class="nav-label">Charts</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="charts_flot.html">Flot Charts</a>
                        </li>
                        <li>
                            <a href="charts_morris.html">Morris Charts</a>
                        </li>
                        <li>
                            <a href="chartjs.html">Chart.js</a>
                        </li>
                        <li>
                            <a href="c3.html">C3 Charts</a>
                        </li>
                        <li>
                            <a href="charts_peity.html">Peity Charts</a>
                        </li>
                        <li>
                            <a href="charts_sparkline.html">Sparkline Charts</a>
                        </li>
                        <li>
                            <a href="charts_rickshaw.html">Rickshaw Charts</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-map-alt"></i>
                        <span class="nav-label">Maps</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="maps_google.html">Google maps</a>
                        </li>
                        <li>
                            <a href="datamaps.html">Datamaps</a>
                        </li>
                        <li>
                            <a href="maps_vector.html">Vector maps</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="icons.html"><i class="sidebar-item-icon ti-comments-smiley"></i>
                        <span class="nav-label">Icons</span>
                    </a>
                </li>
                <li class="heading">PAGES</li>
                <li>
                    <a href="mailbox.html"><i class="sidebar-item-icon ti-email"></i>
                        <span class="nav-label">Mailbox</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-pencil"></i>
                        <span class="nav-label">Blog</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="blog_list.html">List</a>
                        </li>
                        <li>
                            <a href="article.html">Article</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-shopping-cart"></i>
                        <span class="nav-label">E-Commerce</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="dashboard_ecommerce.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="ecommerce_products_list.html">Products list</a>
                        </li>
                        <li>
                            <a href="ecommerce_add_product.html">Add new product</a>
                        </li>
                        <li>
                            <a href="ecommerce_orders_list.html">Orders list</a>
                        </li>
                        <li>
                            <a href="ecommerce_order_details.html">Order details</a>
                        </li>
                        <li>
                            <a href="invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="ecommerce_customers.html">Customers</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="calendar.html"><i class="sidebar-item-icon ti-calendar"></i>
                        <span class="nav-label">Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-files"></i>
                        <span class="nav-label">General Pages</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="search.html">Search</a>
                        </li>
                        <li>
                            <a href="timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="timeline_horizontal.html">Horizontal timeline</a>
                        </li>
                        <li>
                            <a href="pricing-table-1.html">Pricing Table v1</a>
                        </li>
                        <li>
                            <a href="pricing-table-2.html">Pricing Table v2</a>
                        </li>
                        <li>
                            <a href="pricing-table-3.html">Pricing Table v3</a>
                        </li>
                        <li>
                            <a href="pricing-table-4.html">Pricing Table v4</a>
                        </li>
                        <li>
                            <a href="pricing-table-5.html">Pricing Table v5</a>
                        </li>
                        <li>
                            <a href="pricing-table-6.html">Pricing Table v6</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-user"></i>
                        <span class="nav-label">Custom Pages</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">User Pages</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="login.html">Login v1</a>
                                </li>
                                <li>
                                    <a href="login-2.html">Login v2</a>
                                </li>
                                <li>
                                    <a href="login-3.html">Login v3</a>
                                </li>
                                <li>
                                    <a href="login-4.html">Login v4</a>
                                </li>
                                <li>
                                    <a href="login-5.html">Login v5</a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">Lockscreen</a>
                                </li>
                                <li>
                                    <a href="forgot_password.html">Forgot password</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">Error Pages</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="error_404.html">404 error</a>
                                </li>
                                <li>
                                    <a href="error_404-2.html">404 error v2</a>
                                </li>
                                <li>
                                    <a href="error_403.html">403 error</a>
                                </li>
                                <li>
                                    <a href="error_500.html">500 error</a>
                                </li>
                                <li>
                                    <a href="maintenance.html">Maintenance Mode</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-anchor"></i>
                        <span class="nav-label">Menu Levels</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="javascript:;">Level 2</a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="javascript:;">Level 3</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Level 3</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="javascript:;"><i class="ti-announcement"></i></a>
                <a href="calendar.html"><i class="ti-calendar"></i></a>
                <a href="javascript:;"><i class="ti-comments"></i></a>
                <a href="login.html"><i class="ti-power-off"></i></a>
            </div>
        </div>
    </nav>
    <!-- END SIDEBAR-->
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-content fade-in-up">
            <div class="row mb-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <div class="card-body flexbox-b">
                            <div class="easypie mr-4" data-percent="73" data-bar-color="#18C5A9" data-size="80" data-line-width="8">
                                <span class="easypie-data text-success" style="font-size:32px;"><i class="la la-users"></i></span>
                            </div>
                            <div>
                                <h3 class="font-strong text-success">128</h3>
                                <div class="text-muted">NEW CUSTOMERS</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <div class="card-body flexbox-b">
                            <div class="easypie mr-4" data-percent="42" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                <span class="easypie-data font-26 text-primary"><i class="ti-world"></i></span>
                            </div>
                            <div>
                                <h3 class="font-strong text-primary">6400</h3>
                                <div class="text-muted">TODAY'S VISITS</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <div class="card-body flexbox-b">
                            <div class="easypie mr-4" data-percent="70" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                <span class="easypie-data text-pink" style="font-size:32px;"><i class="la la-tags"></i></span>
                            </div>
                            <div>
                                <h3 class="font-strong text-pink">210</h3>
                                <div class="text-muted">SUPPORT TICKETS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="ibox">
                        <div class="ibox-body">
                            <div class="d-flex justify-content-between mb-4">
                                <div>
                                    <h3 class="m-0">Visitors Analytics</h3>
                                    <div>Your site visitors analytics</div>
                                </div>
                                <ul class="nav nav-pills nav-pills-rounded nav-pills-air" id="chart_tabs">
                                    <li class="nav-item ml-1">
                                        <a class="nav-link active" data-toggle="tab" data-id="1" href="javascript:;">This Week</a>
                                    </li>
                                    <li class="nav-item ml-1">
                                        <a class="nav-link" data-toggle="tab" data-id="2" href="javascript:;">Last Week</a>
                                    </li>
                                    <li class="nav-item ml-1">
                                        <a class="nav-link" data-toggle="tab" data-id="3" href="javascript:;">Last Year</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <canvas id="visitors_chart" style="height:260px;"></canvas>
                            </div>
                        </div>
                        <hr>
                        <div class="ibox-body">
                            <div class="row">
                                <div class="col-6 pl-4">
                                    <h6 class="mb-3">GENDER</h6>
                                    <span class="h2 mr-3"><i class="fa fa-male text-primary h1 mb-0 mr-2"></i>
                                        <span>56<sup>%</sup></span>
                                    </span>
                                    <span class="h2 mr-3"><i class="fa fa-female text-pink h1 mb-0 mr-2"></i>
                                        <span>32<sup>%</sup></span>
                                    </span>
                                    <span class="h2"><i class="fa fa-question text-light h1 mb-0 mr-2"></i>
                                        <span>12<sup>%</sup></span>
                                    </span>
                                </div>
                                <div class="col-6">
                                    <h6 class="mb-3">SCREENS</h6>
                                    <span class="h2 mr-3"><i class="ti-desktop text-primary mr-2"></i>
                                        <span>49<sup>%</sup></span>
                                    </span>
                                    <span class="h2 mr-3"><i class="ti-tablet text-pink mr-2"></i>
                                        <span>29<sup>%</sup></span>
                                    </span>
                                    <span class="h2"><i class="ti-mobile text-success mr-2"></i>
                                        <span>22<sup>%</sup></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox ibox-fullheight">
                        <div class="ibox-head">
                            <div class="ibox-title">VISITORS AGE</div>
                            <div class="ibox-tools">
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"><i class="la la-upload"></i>Export</a>
                                    <a class="dropdown-item"><i class="la la-file-excel-o"></i>Download</a>
                                    <a class="dropdown-item"><i class="la la-print"></i>Print</a>
                                </div>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <div class="mb-5">
                                <div class="flexbox-b mb-2">
                                    <span class="badge-point badge-success mr-2"></span>20-27
                                    <span class="h4 mb-0 ml-4">25%</span>
                                </div>
                                <div class="flexbox-b mb-2">
                                    <span class="badge-point badge-primary mr-2"></span>35-50
                                    <span class="h4 mb-0 ml-4">22%</span>
                                </div>
                                <div class="flexbox-b mb-2">
                                    <span class="badge-point badge-pink mr-2"></span>27-35
                                    <span class="h4 mb-0 ml-4">17%</span>
                                </div>
                            </div>
                            <div class="ibox-fullwidth-block">
                                <canvas id="age_chart" style="height:260px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ibox ibox-fullheight">
                                <div class="ibox-head">
                                    <div class="ibox-title">VISITORS SCREENS</div>
                                    <div class="ibox-tools">
                                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-desktop"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"><i class="ti-pencil mr-2"></i>Create</a>
                                            <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                            <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="ibox-body">
                                    <div>
                                        <canvas id="screens_chart" style="height:260px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ibox ibox-fullheight">
                                <div class="ibox-head">
                                    <div class="ibox-title">VISITORS BROWSERS</div>
                                </div>
                                <div class="ibox-body">
                                    <ul class="list-group list-group-divider list-group-full">
                                        <li class="list-group-item flexbox">
                                            <span class="flexbox"><i class="la la-chrome mr-3 font-40"></i>Google Chrome</span>
                                            <span class="badge badge-success badge-pill">34.7%</span>
                                        </li>
                                        <li class="list-group-item flexbox">
                                            <span class="flexbox"><i class="la la-firefox mr-3 font-40"></i>Mozila Firefox</span>
                                            <span class="badge badge-primary badge-pill">34.7%</span>
                                        </li>
                                        <li class="list-group-item flexbox">
                                            <span class="flexbox"><i class="la la-opera mr-3 font-40"></i>Opera</span>
                                            <span class="badge badge-pink badge-pill">34.7%</span>
                                        </li>
                                        <li class="list-group-item flexbox">
                                            <span class="flexbox"><i class="la la-internet-explorer mr-3 font-40"></i>Internet Explorer</span>
                                            <span class="badge badge-info badge-pill">34.7%</span>
                                        </li>
                                        <li class="list-group-item flexbox">
                                            <span class="flexbox"><i class="la la-safari mr-3 font-40"></i>Safari</span>
                                            <span class="badge badge-warning badge-pill">34.7%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-body">
                            <div class="flexbox mb-5">
                                <div class="flexbox">
                                    <span class="mr-4" style="width:60px;height:60px;background-color:#e7e9f6;color:#5c6bc0;display:inline-flex;align-items:center;justify-content:center;font-size:35px;"><i class="ti-files"></i></span>
                                    <div>
                                        <h5 class="font-strong">TOP 5 PAGES</h5>
                                        <div class="text-light">Top 5 visited pages on your site.</div>
                                    </div>
                                </div>
                                <ul class="nav nav-pills nav-pills-rounded nav-pills-air">
                                    <li class="nav-item ml-1">
                                        <a class="nav-link active" href="#tab_1" data-toggle="tab">This Week</a>
                                    </li>
                                    <li class="nav-item ml-1">
                                        <a class="nav-link" href="#tab_2" data-toggle="tab">Last Week</a>
                                    </li>
                                    <li class="nav-item ml-1">
                                        <a class="nav-link" href="#tab_3" data-toggle="tab">This Month</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab_1">
                                    <div class="flexbox">
                                        <div class="text-center">
                                            <div class="mb-3">Blog Catalog</div>
                                            <div class="easypie" data-percent="44" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">44<sup>%</sup></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">Shop Catalog</div>
                                            <div class="easypie" data-percent="28" data-bar-color="#18c5a9" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">28<sup>%</sup></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">Profile</div>
                                            <div class="easypie" data-percent="9" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">9<sup>%</sup></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">Main Page</div>
                                            <div class="easypie" data-percent="13" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">13<sup>%</sup></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">Profile</div>
                                            <div class="easypie" data-percent="6" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">6<sup>%</sup></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_2">
                                    <div class="flexbox">
                                        <div class="text-center">
                                            <div class="mb-3">Blog Catalog</div>
                                            <div class="easypie" data-percent="33" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">33<sup>%</sup></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">Shop Catalog</div>
                                            <div class="easypie" data-percent="42" data-bar-color="#18c5a9" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">42<sup>%</sup></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">Profile</div>
                                            <div class="easypie" data-percent="8" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">8<sup>%</sup></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">Main Page</div>
                                            <div class="easypie" data-percent="11" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">11<sup>%</sup></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">Profile</div>
                                            <div class="easypie" data-percent="6" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">6<sup>%</sup></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_3">
                                    <div class="flexbox">
                                        <div class="text-center">
                                            <div class="mb-3">Blog Catalog</div>
                                            <div class="easypie" data-percent="41" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">41<sup>%</sup></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">Shop Catalog</div>
                                            <div class="easypie" data-percent="32" data-bar-color="#18c5a9" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">32<sup>%</sup></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">Profile</div>
                                            <div class="easypie" data-percent="10" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">10<sup>%</sup></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">Main Page</div>
                                            <div class="easypie" data-percent="12" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">12<sup>%</sup></span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">Profile</div>
                                            <div class="easypie" data-percent="5" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                                <span class="easypie-data h3 font-strong">5<sup>%</sup></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox ibox-fullheight">
                        <div class="ibox-head">
                            <div class="ibox-title">NEW CUSTOMERS</div>
                            <div class="ibox-tools">
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-user"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"><i class="ti-pencil mr-2"></i>Create</a>
                                    <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                    <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <ul class="media-list media-list-divider mr-2 scroller" data-height="580px">
                                <li class="media align-items-center">
                                    <a class="media-img" href="javascript:;">
                                        <img class="img-circle" src="assets/img/users/u8.jpg" alt="image" width="54" />
                                    </a>
                                    <div class="media-body d-flex align-items-center">
                                        <div class="flex-1">
                                            <div class="media-heading">Lynn Weaver</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                        <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                                    </div>
                                </li>
                                <li class="media align-items-center">
                                    <a class="media-img" href="javascript:;">
                                        <img class="img-circle" src="assets/img/users/u6.jpg" alt="image" width="54" />
                                    </a>
                                    <div class="media-body d-flex align-items-center">
                                        <div class="flex-1">
                                            <div class="media-heading">Connor Perez</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                        <button class="btn btn-sm btn-primary btn-rounded">Followed</button>
                                    </div>
                                </li>
                                <li class="media align-items-center">
                                    <a class="media-img" href="javascript:;">
                                        <img class="img-circle" src="assets/img/users/u11.jpg" alt="image" width="54" />
                                    </a>
                                    <div class="media-body d-flex align-items-center">
                                        <div class="flex-1">
                                            <div class="media-heading">Tyrone Carroll</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                        <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                                    </div>
                                </li>
                                <li class="media align-items-center">
                                    <a class="media-img" href="javascript:;">
                                        <img class="img-circle" src="assets/img/users/u10.jpg" alt="image" width="54" />
                                    </a>
                                    <div class="media-body d-flex align-items-center">
                                        <div class="flex-1">
                                            <div class="media-heading">Stella Obrien</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                        <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                                    </div>
                                </li>
                                <li class="media align-items-center">
                                    <a class="media-img" href="javascript:;">
                                        <img class="img-circle" src="assets/img/users/u2.jpg" alt="image" width="54" />
                                    </a>
                                    <div class="media-body d-flex align-items-center">
                                        <div class="flex-1">
                                            <div class="media-heading">Becky Brooks</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                        <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                                    </div>
                                </li>
                                <li class="media align-items-center">
                                    <a class="media-img" href="javascript:;">
                                        <img class="img-circle" src="assets/img/users/u5.jpg" alt="image" width="54" />
                                    </a>
                                    <div class="media-body d-flex align-items-center">
                                        <div class="flex-1">
                                            <div class="media-heading">Bob Gonzalez</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                        <button class="btn btn-sm btn-primary btn-rounded">Followed</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">VISITORS ANALYTICS</div>
                    <div class="ibox-tools">
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                            <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                            <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <div id="world-map" style="height: 400px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="ibox ibox-fullheight">
                        <div class="ibox-head">
                            <div class="ibox-title">SUPPORT TICKETS</div>
                            <div class="ibox-tools">
                                <a class="dropdown-toggle font-18" data-toggle="dropdown"><i class="ti-ticket"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"><i class="ti-pencil mr-2"></i>Create</a>
                                    <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                    <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <ul class="media-list media-list-divider scroller mr-2" data-height="470px">
                                <li class="media">
                                    <div class="media-body d-flex">
                                        <div class="flex-1">
                                            <h5 class="media-heading">
                                                <a href="javascript:;">How to install new Adminca</a>
                                            </h5>
                                            <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla</p>
                                            <div class="d-flex align-items-center font-13">
                                                <img class="img-circle mr-2" src="assets/img/users/u11.jpg" alt="image" width="22" />
                                                <a class="mr-2 text-success" href="javascript:;">Tyrone Carroll</a>
                                                <span class="text-muted">18 mins ago</span>
                                            </div>
                                        </div>
                                        <div class="text-right" style="width:100px;">
                                            <span class="badge badge-primary badge-pill mb-2">Open</span>
                                            <div><small class="text-muted font-12"><i class="fa fa-reply mr-2"></i>2 reply</small></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-body d-flex">
                                        <div class="flex-1">
                                            <h5 class="media-heading">
                                                <a href="javascript:;">How to compile SaSS</a>
                                            </h5>
                                            <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla</p>
                                            <div class="d-flex align-items-center font-13">
                                                <img class="img-circle mr-2" src="assets/img/users/u10.jpg" alt="image" width="22" />
                                                <a class="mr-2 text-success" href="javascript:;">Stella Obrien</a>
                                                <span class="text-muted">45 mins ago</span>
                                            </div>
                                        </div>
                                        <div class="text-right" style="width:100px;">
                                            <span class="badge badge-success badge-pill mb-2">Pending</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-body d-flex">
                                        <div class="flex-1">
                                            <h5 class="media-heading">
                                                <a href="javascript:;">I need help to update bower</a>
                                            </h5>
                                            <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla</p>
                                            <div class="d-flex align-items-center font-13">
                                                <img class="img-circle mr-2" src="assets/img/users/u6.jpg" alt="image" width="22" />
                                                <a class="mr-2 text-success" href="javascript:;">Connor Perez</a>
                                                <span class="text-muted">1 hrs ago</span>
                                            </div>
                                        </div>
                                        <div class="text-right" style="width:100px;">
                                            <span class="badge badge-primary badge-pill mb-2">In Progress</span>
                                            <div><small class="text-muted font-12"><i class="fa fa-reply mr-2"></i>2 reply</small></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-body d-flex">
                                        <div class="flex-1">
                                            <h5 class="media-heading">
                                                <a href="javascript:;">IE7 problem</a>
                                            </h5>
                                            <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla</p>
                                            <div class="d-flex align-items-center font-13">
                                                <img class="img-circle mr-2" src="assets/img/users/u2.jpg" alt="image" width="22" />
                                                <a class="mr-2 text-success" href="javascript:;">Becky Brooks</a>
                                                <span class="text-muted">2 hrs ago</span>
                                            </div>
                                        </div>
                                        <div class="text-right" style="width:100px;">
                                            <span class="badge badge-success badge-pill mb-2">Pending</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-body d-flex">
                                        <div class="flex-1">
                                            <h5 class="media-heading">
                                                <a href="javascript:;">I need help to install Adminca Angular</a>
                                            </h5>
                                            <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla</p>
                                            <div class="d-flex align-items-center font-13">
                                                <img class="img-circle mr-2" src="assets/img/users/u5.jpg" alt="image" width="22" />
                                                <a class="mr-2 text-success" href="javascript:;">Bob Gonzalez</a>
                                                <span class="text-muted">2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="text-right" style="width:100px;">
                                            <span class="badge badge-secondary badge-pill mb-2">Closed</span>
                                            <div><small class="text-muted font-12"><i class="fa fa-reply mr-2"></i>3 reply</small></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox ibox-fullheight">
                        <div class="ibox-head">
                            <div class="ibox-title">LOGS TIMELINE</div>
                            <div class="ibox-tools">
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"><i class="ti-pencil"></i>Create</a>
                                    <a class="dropdown-item"><i class="ti-pencil-alt"></i>Edit</a>
                                    <a class="dropdown-item"><i class="ti-close"></i>Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <ul class="timeline scroller" data-height="470px">
                                <li class="timeline-item">
                                    <span class="timeline-point"></span>2 Issue fixed<small class="float-right text-muted ml-2 nowrap">Just now</small></li>
                                <li class="timeline-item">
                                    <span class="timeline-point bg-warning"></span>
                                    <span>7 new feedback
                                        <span class="badge badge-warning badge-pill ml-2">important</span>
                                    </span><small class="float-right text-muted">5 mins</small></li>
                                <li class="timeline-item">
                                    <span class="timeline-point bg-primary"></span>
                                    <span class="flexbox">25 new orders sent<i class="la la-truck font-16 ml-2 text-primary"></i></span><small class="float-right text-muted ml-2 nowrap">24 mins</small></li>
                                <li class="timeline-item">
                                    <span class="timeline-point"></span>12 New orders<small class="float-right text-muted ml-2 nowrap">45 mins</small></li>
                                <li class="timeline-item">
                                    <span class="timeline-point bg-warning"></span>18 new users registered<small class="float-right text-muted ml-2 nowrap">1 hrs</small></li>
                                <li class="timeline-item">
                                    <span class="timeline-point"></span>
                                    <span>Server Error
                                        <span class="badge badge-success badge-pill ml-2">resolved</span>
                                    </span><small class="float-right text-muted">2 hrs</small></li>
                                <li class="timeline-item">
                                    <span class="timeline-point bg-primary"></span>
                                    <span>System Warning
                                        <a class="text-primary ml-2">Check</a>
                                    </span><small class="float-right text-muted ml-2 nowrap">12:07</small></li>
                                <li class="timeline-item">
                                    <span class="timeline-point bg-warning"></span>The invoice is ready<small class="float-right text-muted ml-2 nowrap">12:30</small></li>
                                <li class="timeline-item">
                                    <span class="timeline-point bg-primary"></span>5 New Orders<small class="float-right text-muted ml-2 nowrap">13:45</small></li>
                                <li class="timeline-item">
                                    <span class="timeline-point"></span>
                                    <span class="flexbox">Production server up<i class="la la-arrow-circle-up font-18 ml-2 text-success"></i></span><small class="float-right text-muted ml-2 nowrap">1 days ago</small></li>
                                <li class="timeline-item">
                                    <span class="timeline-point"></span>Server overloaded 91%<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                                <li class="timeline-item">
                                    <span class="timeline-point bg-warning"></span>Server error<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="ibox ibox-fullheight">
                        <div class="ibox-head">
                            <div class="ibox-title">
                                <span class="btn-icon-only btn-circle bg-primary-50 text-primary mr-3"><i class="ti-email"></i></span>Email distribution</div>
                        </div>
                        <div class="ibox-body">
                            <div class="flexbox mb-4">
                                <div class="flexbox">
                                    <span class="flexbox mr-3">
                                        <span class="mr-2 text-muted">Sent</span>
                                        <span class="h3 mb-0 text-primary font-strong">310</span>
                                    </span>
                                    <span class="flexbox">
                                        <span class="mr-2 text-muted">Queue</span>
                                        <span class="h3 mb-0 text-pink font-strong">105</span>
                                    </span>
                                </div>
                                <a class="flexbox" href="javascript:;" target="_blank">VIEW ALL<i class="ti-arrow-circle-right ml-2 font-18"></i></a>
                            </div>
                            <div class="ibox-fullwidth-block">
                                <table class="table">
                                    <thead class="thead-default thead-lg">
                                        <tr>
                                            <th class="pl-4">Subject</th>
                                            <th>Quantity</th>
                                            <th>Reference</th>
                                            <th class="pr-4">Percent</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pl-4">
                                                <div class="flexbox-b">
                                                    <span class="btn-icon-only btn-primary font-20 mr-3">AC</span>
                                                    <div>
                                                        <h6 class="mb-1">Try New version of Adminca</h6>
                                                        <div>
                                                            <span class="text-muted font-13"><i class="ti-calendar mr-2"></i>20.04.2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h4 class="font-strong text-light mb-0">1400</h4>
                                            </td>
                                            <td>
                                                <h4 class="font-strong text-primary mb-0">820</h4>
                                            </td>
                                            <td class="pr-4">
                                                <div class="easypie" data-percent="59" data-bar-color="#5c6bc0" data-size="56" data-line-width="3">
                                                    <span class="easypie-data h5 font-strong">59%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-4">
                                                <div class="flexbox-b">
                                                    <span class="btn-icon-only btn-pink mr-3"><i class="ti-gift font-20"></i></span>
                                                    <div>
                                                        <h6 class="mb-1">Adminca Big Bundle 6 in 1</h6>
                                                        <div>
                                                            <span class="text-muted font-13"><i class="ti-calendar mr-2"></i>20.04.2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h4 class="font-strong text-light mb-0">1250</h4>
                                            </td>
                                            <td>
                                                <h4 class="font-strong text-pink mb-0">575</h4>
                                            </td>
                                            <td class="pr-4">
                                                <div class="easypie" data-percent="46" data-bar-color="#ff4081" data-size="56" data-line-width="3">
                                                    <span class="easypie-data h5 font-strong">46%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-4">
                                                <div class="flexbox-b">
                                                    <span class="btn-icon-only btn-success font-20 mr-3">LV</span>
                                                    <div>
                                                        <h6 class="mb-1">Adminca - Save your time, choose the best</h6>
                                                        <div>
                                                            <span class="text-muted font-13"><i class="ti-calendar mr-2"></i>20.04.2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h4 class="font-strong text-light mb-0">1320</h4>
                                            </td>
                                            <td>
                                                <h4 class="font-strong text-success mb-0">554</h4>
                                            </td>
                                            <td class="pr-4">
                                                <div class="easypie" data-percent="42" data-bar-color="#18c5a9" data-size="56" data-line-width="3">
                                                    <span class="easypie-data h5 font-strong">42%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-4">
                                                <div class="flexbox-b">
                                                    <span class="btn-icon-only btn-warning mr-3"><i class="ti-support font-20"></i></span>
                                                    <div>
                                                        <h6 class="mb-1">High Quality Support & Easy Code</h6>
                                                        <div>
                                                            <span class="text-muted font-13"><i class="ti-calendar mr-2"></i>20.04.2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h4 class="font-strong text-light mb-0">870</h4>
                                            </td>
                                            <td>
                                                <h4 class="font-strong text-warning mb-0">478</h4>
                                            </td>
                                            <td class="pr-4">
                                                <div class="easypie" data-percent="56" data-bar-color="#f39c12" data-size="56" data-line-width="3">
                                                    <span class="easypie-data h5 font-strong">56%</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox ibox-fullheight">
                        <div class="ibox-head">
                            <div class="ibox-title">TASKS</div>
                            <div class="ibox-tools">
                                <a class="font-18"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <ul class="list-group list-group-divider list-group-full tasks-list">
                                <li class="list-group-item task-item">
                                    <div>
                                        <label class="checkbox checkbox-grey checkbox-success">
                                            <input type="checkbox" checked="">
                                            <span class="input-span"></span>
                                            <span class="task-title">Make Adminca the best and the most easy admin template</span>
                                        </label>
                                    </div>
                                    <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                                    <div class="task-actions">
                                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                            <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item task-item">
                                    <div>
                                        <label class="checkbox checkbox-grey checkbox-success">
                                            <input type="checkbox">
                                            <span class="input-span"></span>
                                            <span class="task-title">Create Financial Report</span>
                                        </label>
                                    </div>
                                    <div class="task-data"><small class="text-muted">No due date</small></div>
                                    <div class="task-actions">
                                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                            <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item task-item">
                                    <div>
                                        <label class="checkbox checkbox-grey checkbox-success">
                                            <input type="checkbox" checked="">
                                            <span class="input-span"></span>
                                            <span class="task-title">Meeting with Ann</span>
                                        </label>
                                        <span class="badge badge-warning ml-1"><i class="ti-alarm-clock"></i> 1 hrs</span>
                                    </div>
                                    <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                                    <div class="task-actions">
                                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                            <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item task-item">
                                    <div>
                                        <label class="checkbox checkbox-grey checkbox-success">
                                            <input type="checkbox">
                                            <span class="input-span"></span>
                                            <span class="task-title">Edit the blog post</span>
                                        </label>
                                    </div>
                                    <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                                    <div class="task-actions">
                                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                            <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item task-item">
                                    <div>
                                        <label class="checkbox checkbox-grey checkbox-success">
                                            <input type="checkbox">
                                            <span class="input-span"></span>
                                            <span class="task-title">Send photos to Jack</span>
                                        </label>
                                        <span class="badge badge-success ml-1">Today</span>
                                    </div>
                                    <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                                    <div class="task-actions">
                                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                            <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item task-item">
                                    <div>
                                        <label class="checkbox checkbox-grey checkbox-success">
                                            <input type="checkbox">
                                            <span class="input-span"></span>
                                            <span class="task-title">Send Financial Reports</span>
                                        </label>
                                        <span class="badge badge-danger ml-1">Important</span>
                                    </div>
                                    <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                                    <div class="task-actions">
                                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                            <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item task-item">
                                    <div>
                                        <label class="checkbox checkbox-grey checkbox-success">
                                            <input type="checkbox">
                                            <span class="input-span"></span>
                                            <span class="task-title">Send message to Bob</span>
                                        </label>
                                    </div>
                                    <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                                    <div class="task-actions">
                                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                            <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
        <footer class="page-footer">
            <div class="font-13">2018 © <b>Adminca</b> - Save your time, choose the best</div>
            <div>
                <a class="px-3 pl-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">Purchase</a>
                <a class="px-3" href="http://admincast.com/adminca/documentation.html" target="_blank">Docs</a>
            </div>
            <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
        </footer>
    </div>
</div>
<!-- START SEARCH PANEL-->
<form class="search-top-bar" action="http://admincast.com/adminca/preview/admin_1/html/search.html">
    <input class="form-control search-input" type="text" placeholder="Search...">
    <button class="reset input-search-icon"><i class="ti-search"></i></button>
    <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
</form>
<!-- END SEARCH PANEL-->
<!-- BEGIN THEME CONFIG PANEL-->
<div class="theme-config">
    <div class="theme-config-toggle"><i class="ti-settings theme-config-show"></i><i class="ti-close theme-config-close"></i></div>
    <div class="theme-config-box">
        <h5 class="text-center mb-4 mt-3">SETTINGS</h5>
        <div class="font-strong mb-3">LAYOUT OPTIONS</div>
        <div class="check-list mb-4">
            <label class="checkbox checkbox-grey checkbox-primary">
                <input id="_fixedNavbar" type="checkbox" checked>
                <span class="input-span"></span>Fixed navbar</label>
            <label class="checkbox checkbox-grey checkbox-primary mt-3">
                <input id="_fixedlayout" type="checkbox">
                <span class="input-span"></span>Fixed layout</label>
            <label class="checkbox checkbox-grey checkbox-primary mt-3">
                <input class="js-sidebar-toggler" type="checkbox">
                <span class="input-span"></span>Collapse sidebar</label>
            <label class="checkbox checkbox-grey checkbox-primary mt-3">
                <input id="_drawerSidebar" type="checkbox">
                <span class="input-span"></span>Drawer sidebar</label>
        </div>
        <div class="font-strong mb-3">LAYOUT STYLE</div>
        <div class="check-list mb-4">
            <label class="radio radio-grey radio-primary">
                <input type="radio" name="layout-style" value="" checked="">
                <span class="input-span"></span>Fluid</label>
            <label class="radio radio-grey radio-primary mt-3">
                <input type="radio" name="layout-style" value="1">
                <span class="input-span"></span>Boxed</label>
        </div>
    </div>
</div>
<!-- END THEME CONFIG PANEL-->
<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop">
    <div class="page-preloader">Loading</div>
</div>
<!-- END PAGA BACKDROPS-->
<!-- New question dialog-->
<div class="modal fade" id="session-dialog">
    <div class="modal-dialog" style="width:400px;" role="document">
        <div class="modal-content timeout-modal">
            <div class="modal-body">
                <button class="close" data-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mt-3 mb-4"><i class="ti-lock timeout-icon"></i></div>
                <div class="text-center h4 mb-3">Set Auto Logout</div>
                <p class="text-center mb-4">You are about to be signed out due to inactivity.<br>Select after how many minutes of inactivity you log out of the system.</p>
                <div id="timeout-reset-box" style="display:none;">
                    <div class="form-group text-center">
                        <button class="btn btn-danger btn-fix btn-air" id="timeout-reset">Deactivate</button>
                    </div>
                </div>
                <div id="timeout-activate-box">
                    <form id="timeout-form" action="javascript:;">
                        <div class="form-group pl-3 pr-3 mb-4">
                            <input class="form-control form-control-line" type="text" name="timeout_count" placeholder="Minutes" id="timeout-count">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-fix btn-air" id="timeout-activate">Activate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End New question dialog-->
<!-- QUICK SIDEBAR-->
<div class="quick-sidebar">
    <ul class="nav nav-tabs tabs-line">
        <li class="nav-item">
            <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-comment"></i>
                <div>Messages</div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-settings"></i>
                <div>Settings</div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#tab-3" data-toggle="tab"><i class="ti-notepad"></i>
                <div>Logs</div>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane chat-panel active" id="tab-1">
            <div class="chat-list">
                <div class="scroller">
                    <div class="media-list">
                        <a class="media" href="javascript:;" data-toggle="show-chat">
                            <div class="media-img">
                                <img class="img-circle" src="assets/img/users/u3.jpg" alt="image" width="40" />
                            </div>
                            <div class="media-body"><small class="float-right text-muted">12:05</small>
                                <div class="media-heading">Frank Cruz</div>
                                <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                            </div>
                        </a>
                        <a class="media" href="javascript:;" data-toggle="show-chat">
                            <div class="media-img">
                                <img class="img-circle" src="assets/img/users/u8.jpg" alt="image" width="40" />
                            </div>
                            <div class="media-body"><small class="float-right text-right text-success"><i class="badge-point badge-success mr-2"></i>12:05<br><span class="badge badge-danger badge-circle">3</span></small>
                                <div class="media-heading">Lynn Weaver</div>
                                <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                            </div>
                        </a>
                        <a class="media" href="javascript:;" data-toggle="show-chat">
                            <div class="media-img">
                                <img class="img-circle" src="assets/img/users/u2.jpg" alt="image" width="40" />
                            </div>
                            <div class="media-body"><small class="float-right text-muted">12:05</small>
                                <div class="media-heading">Becky Brooks</div>
                                <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                            </div>
                        </a>
                        <a class="media" href="javascript:;" data-toggle="show-chat">
                            <div class="media-img">
                                <img class="img-circle" src="assets/img/users/u5.jpg" alt="image" width="40" />
                            </div>
                            <div class="media-body"><small class="float-right text-muted">12:05</small>
                                <div class="media-heading">Bob Gonzalez</div>
                                <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                            </div>
                        </a>
                        <a class="media" href="javascript:;" data-toggle="show-chat">
                            <div class="media-img">
                                <img class="img-circle" src="assets/img/users/u6.jpg" alt="image" width="40" />
                            </div>
                            <div class="media-body"><small class="float-right text-right text-success"><i class="badge-point badge-success mr-2"></i>12:05</small>
                                <div class="media-heading">Connor Perez</div>
                                <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                            </div>
                        </a>
                        <a class="media" href="javascript:;" data-toggle="show-chat">
                            <div class="media-img">
                                <img class="img-circle" src="assets/img/users/u11.jpg" alt="image" width="40" />
                            </div>
                            <div class="media-body"><small class="float-right text-muted">12:05</small>
                                <div class="media-heading">Tyrone Carroll</div>
                                <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                            </div>
                        </a>
                        <a class="media" href="javascript:;" data-toggle="show-chat">
                            <div class="media-img">
                                <img class="img-circle" src="assets/img/users/u9.jpg" alt="image" width="40" />
                            </div>
                            <div class="media-body"><small class="float-right text-right text-success"><i class="badge-point badge-success mr-2"></i>12:05<br><span class="badge badge-danger badge-circle">1</span></small>
                                <div class="media-heading">Tammy Newman</div>
                                <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                            </div>
                        </a>
                        <a class="media" href="javascript:;" data-toggle="show-chat">
                            <div class="media-img">
                                <img class="img-circle" src="assets/img/users/u1.jpg" alt="image" width="40" />
                            </div>
                            <div class="media-body"><small class="float-right text-muted">12:05</small>
                                <div class="media-heading">Jeanne Gonzalez</div>
                                <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                            </div>
                        </a>
                        <a class="media" href="javascript:;" data-toggle="show-chat">
                            <div class="media-img">
                                <img class="img-circle" src="assets/img/users/u10.jpg" alt="image" width="40" />
                            </div>
                            <div class="media-body"><small class="float-right text-muted">12:05</small>
                                <div class="media-heading">Stella Obrien</div>
                                <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                            </div>
                        </a>
                        <a class="media" href="javascript:;" data-toggle="show-chat">
                            <div class="media-img">
                                <img class="img-circle" src="assets/img/users/u7.jpg" alt="image" width="40" />
                            </div>
                            <div class="media-body"><small class="float-right text-muted">12:05</small>
                                <div class="media-heading">Jeanne Smith</div>
                                <div class="font-13 text-lighter">Lorem Ipsum is simply dummy.</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="messenger">
                <div class="messenger-header">
                    <a class="messenger-return" href="javascript:;">
                        <span class="ti-angle-left"></span>
                    </a>
                    <div class="text-center text-white">
                        <h6 class="mb-1 font-16">Lynn Weaver</h6>
                        <div>
                            <span class="badge-point badge-danger mr-2"></span><small>Online</small></div>
                    </div>
                    <div class="dropdown">
                        <a class="messenger-more dropdown-toggle" data-toggle="dropdown">
                            <span class="ti-more-alt"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item">
                                <span class="ti-heart m-r-10"></span>Add to favorite</a>
                            <a class="dropdown-item">
                                <span class="ti-close m-r-10"></span>Clear chat</a>
                        </div>
                    </div>
                </div>
                <div class="messenger-messages">
                    <div class="scroller">
                        <div class="messenger-message">
                            <div class="message-image">
                                <img src="assets/img/users/u8.jpg" alt="image" />
                            </div>
                            <div class="message-body">Hi Jack. You are comfortable today.</div>
                        </div>
                        <div class="messenger-message messenger-message-answer">
                            <div class="message-body">Hi Lynn. Yes Sure.</div>
                        </div>
                        <div class="messenger-message">
                            <div class="message-image">
                                <img src="assets/img/users/u8.jpg" alt="image" />
                            </div>
                            <div class="message-body">Hi. What is your main principle in work.</div>
                        </div>
                        <div class="messenger-message messenger-message-answer">
                            <div class="message-body">Our main principle: We work hard to make our client comfortable.</div>
                        </div>
                        <div class="message-time">4.30 PM</div>
                        <div class="messenger-message">
                            <div class="message-image">
                                <img src="assets/img/users/u8.jpg" alt="image" />
                            </div>
                            <div class="message-body">
                                <p>Here are some beautiful photos.</p>
                                <div class="mb-3">
                                    <img src="assets/img/blog/culinary-1.jpg" alt="image" />
                                </div>
                                <div>
                                    <img src="assets/img/blog/01.jpg" alt="image" />
                                </div>
                            </div>
                        </div>
                        <div class="messenger-message messenger-message-answer">
                            <div class="message-body">Thanks, they are beautiful.</div>
                        </div>
                        <div class="messenger-message">
                            <div class="message-image">
                                <img src="assets/img/users/u8.jpg" alt="image" />
                            </div>
                            <div class="message-body">How many hours are you comfortable.</div>
                        </div>
                        <div class="messenger-message messenger-message-answer">
                            <div class="message-body">In the evening at 6.30 clock.</div>
                        </div>
                    </div>
                </div>
                <div class="messenger-form">
                    <div class="messenger-form-inner">
                        <input class="messenger-input" type="text" placeholder="Type a message">
                        <div class="messenger-actions">
                            <span class="messanger-button messanger-paperclip">
                                <input type="file"><i class="la la-paperclip"></i></span>
                            <a class="messanger-button" href="javascript:;"><i class="fa fa-send-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-2">
            <div class="scroller">
                <div class="font-bold mb-4 mt-2">APP SETTINGS</div>
                <div class="settings-item">Show notifications
                    <label class="ui-switch switch-icon">
                        <input type="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="settings-item">Enable autologout
                    <label class="ui-switch switch-icon">
                        <input type="checkbox" checked>
                        <span></span>
                    </label>
                </div>
                <div class="settings-item">Show recent activity
                    <label class="ui-switch switch-icon">
                        <input type="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="settings-item">Chat history
                    <label class="ui-switch switch-icon">
                        <input type="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="settings-item">Users activity
                    <label class="ui-switch switch-icon">
                        <input type="checkbox" checked>
                        <span></span>
                    </label>
                </div>
                <div class="settings-item">Orders history
                    <label class="ui-switch switch-icon">
                        <input type="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="settings-item">SMS Alerts
                    <label class="ui-switch switch-icon">
                        <input type="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="font-bold mb-4">SYSTEM SETTINGS</div>
                <div class="settings-item">Error Reporting
                    <label class="ui-switch switch-icon">
                        <input type="checkbox" checked>
                        <span></span>
                    </label>
                </div>
                <div class="settings-item">Server logs
                    <label class="ui-switch switch-icon">
                        <input type="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="settings-item">Global search
                    <label class="ui-switch switch-icon">
                        <input type="checkbox">
                        <span></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-3">
            <div class="log-tabs">
                <a class="active" href="javascript:;" data-type="all" data-toggle="tooltip" data-original-title="All logs"><i class="ti-view-grid"></i></a>
                <a href="javascript:;" data-type="server" data-toggle="tooltip" data-original-title="Server logs"><i class="ti-harddrives"></i></a>
                <a href="javascript:;" data-type="app" data-toggle="tooltip" data-original-title="App logs"><i class="ti-pulse"></i></a>
            </div>
            <div class="logs">
                <div class="scroller">
                    <ul class="logs-list">
                        <li class="log-item" data-type="app"><i class="ti-check log-icon text-success"></i>
                            <div>
                                <a>2 Issue fixed</a><small class="float-right text-muted">Just now</small></div>
                        </li>
                        <li class="log-item" data-type="app"><i class="ti-announcement log-icon"></i>
                            <div>
                                <a>7 new feedback</a>
                                <span class="badge badge-warning badge-pill ml-1">important</span><small class="float-right text-muted">5 mins</small></div>
                        </li>
                        <li class="log-item" data-type="server"><i class="ti-check log-icon text-success"></i>
                            <div>
                                <a>Production server up</a><small class="float-right text-muted">24 mins</small></div>
                        </li>
                        <li class="log-item" data-type="app"><i class="ti-shopping-cart log-icon"></i>
                            <div>
                                <a>12 New orders</a><small class="float-right text-muted">45 mins</small></div>
                        </li>
                        <li class="log-item" data-type="server"><i class="ti-info-alt log-icon text-danger"></i>
                            <div>
                                <a>Server error</a>
                                <span class="badge badge-primary badge-pill ml-1">resolved</span><small class="float-right text-muted">1 hrs</small></div>
                        </li>
                        <li class="log-item" data-type="server"><i class="ti-harddrives log-icon text-danger"></i>
                            <div>
                                <a>Server overloaded 91%</a><small class="float-right text-muted">2 hrs</small></div>
                        </li>
                        <li class="log-item" data-type="app"><i class="ti-user log-icon"></i>
                            <div>
                                <a>18 new users registered</a><small class="float-right text-muted">12.07</small></div>
                        </li>
                        <li class="log-item" data-type="app"><i class="ti-shopping-cart log-icon"></i>
                            <div>
                                <a>5 New orders</a>
                                <span class="badge badge-success badge-pill ml-1">pending</span><small class="float-right text-muted">12.30</small></div>
                        </li>
                        <li class="log-item" data-type="server"><i class="ti-info-alt log-icon text-danger"></i>
                            <div>
                                <a>System error</a><small class="float-right text-muted">13.45</small></div>
                        </li>
                        <li class="log-item" data-type="app"><i class="fa fa-file-excel-o log-icon"></i>
                            <div>
                                <a>The invoice is ready</a><small class="float-right text-muted">16.30</small></div>
                        </li>
                        <li class="log-item" data-type="server"><i class="ti-server log-icon text-danger"></i>
                            <div>
                                <a>Database overloaded 92%</a><small class="float-right text-muted">17.15</small></div>
                        </li>
                        <li class="log-item" data-type="server"><i class="ti-check log-icon text-success"></i>
                            <div>
                                <a>Production server up</a><small class="float-right text-muted">18.05</small></div>
                        </li>
                        <li class="log-item" data-type="app"><i class="ti-user log-icon"></i>
                            <div>
                                <a>12 new users registered</a><small class="float-right text-muted">18.22</small></div>
                        </li>
                        <li class="log-item" data-type="app"><i class="ti-shopping-cart log-icon"></i>
                            <div>
                                <a>8 New orders</a><small class="float-right text-muted">20.00</small></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection