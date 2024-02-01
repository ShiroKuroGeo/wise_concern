<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Wise Immersion and Study Services</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous">
    <link href="{{ asset('css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/color.min.css') }}" rel="stylesheet" />

</head>

<body>

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>
    <div id="app" class="app app-header-fixed app-sidebar-fixed">

        <div id="header" class="app-header">

            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b class="me-3px">W I S E </b></a>
                <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

        </div>

        <div id="sidebar" class="app-sidebar" data-bs-theme="dark">

            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

                <div class="menu">
                    <div class="menu-profile">
                        <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                            <div class="menu-profile-cover with-shadow"></div>
                            <div class="menu-profile-image">
                                <img src="../assets/img/user/user-13.jpg" alt />
                            </div>
                            <div class="menu-profile-info">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        IT Administration
                                    </div>
                                    <div class="menu-caret ms-auto"></div>
                                </div>
                                <small>IT Office</small>
                            </div>
                        </a>
                    </div>
                    <div id="appSidebarProfileMenu" class="collapse">
                        <div class="menu-item pt-5px">
                            <a href="{{ route('admin-logout') }}" class="menu-link">
                                <div class="menu-icon">
                                    <i class="fas fa-sign-out-alt"></i>
                                </div>
                                <div class="menu-text">Logout</div>
                            </a>
                        </div>
                        <div class="menu-divider m-0"></div>
                    </div>
                    <div class="menu-header">Navigation</div>
                    <div class="menu-item py-1 active">
                        <a href="{{ route('admin-dashboard') }}" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-sitemap" aria-hidden="true"></i>
                            </div>
                            <div class="menu-text">Dashboard</div>
                        </a>
                    </div>
                    <div class="menu-item py-1">
                        <a href="{{ route('admin-accounts') }}" class="menu-link">
                            <div class="menu-icon">
                                <i class="fas fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="menu-text">Users Account</div>
                        </a>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="menu-text">Wise Immigration</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="{{ route('admin-concern', ['department' => 'Cebu Sales']) }}" class="menu-link">
                                    <div class="menu-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="menu-text">Cebu Sales</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="{{ route('admin-concern', ['department' => 'Bohol Sales']) }}" class="menu-link">
                                    <div class="menu-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="menu-text">Bohol Sales</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="{{ route('admin-concern', ['department' => 'Makati Sales']) }}" class="menu-link">
                                    <div class="menu-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="menu-text">Makati Sales</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="{{ route('admin-concern', ['department' => 'Osamiz Sales']) }}" class="menu-link">
                                    <div class="menu-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="menu-text">Osamiz Sales</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="{{ route('admin-concern', ['department' => 'Marketing']) }}" class="menu-link">
                                    <div class="menu-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="menu-text">Marketing</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="{{ route('admin-concern', ['department' => 'Human Resource']) }}" class="menu-link">
                                    <div class="menu-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="menu-text">Human Resource</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="{{ route('admin-concern', ['department' => 'Accounting']) }}" class="menu-link">
                                    <div class="menu-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="menu-text">Accounting</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item py-1">
                        <a href="{{ route('admin-request') }}" class="menu-link">
                            <div class="menu-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="menu-text">Four Seasons</div>
                        </a>
                    </div>

                    <div class="menu-item d-flex">
                        <a href="javascript:;" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                    </div>

                </div>

            </div>

        </div>
        <div class="app-sidebar-bg" data-bs-theme="dark"></div>
        <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>


        <div id="content" class="app-content">

            <h1 class="page-header">Dashboard <small>Ticketing Application</small></h1>

            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <div class="widget widget-stats bg-blue">
                        <div class="stats-icon"><i class="fa fa-users"></i></div>
                        <div class="stats-info">
                            <h4>TOTAL REQUEST</h4>
                            <p>{{ Count($cebu) + Count($bohol) + Count($makati) + Count($osamiz) + Count($marketing) + Count($human) + Count($accounting) }}</p>
                        </div>
                        <div class="stats-link">
                            <a href="{{ route('admin-concern') }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="widget widget-stats bg-orange">
                        <div class="stats-icon"><i class="fas fa-calendar-day"></i></div>
                        <div class="stats-info">
                            <h4>YESTERDAY'S CONCERN</h4>
                            <p>{{ Count($allYesterdayRequest) }}</p>
                        </div>
                        <div class="stats-link">
                            <a href="{{ route('admin-concern') }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="widget widget-stats bg-info">
                        <div class="stats-icon"><i class="fa fa-users"></i></div>
                        <div class="stats-info">
                            <h4>TOTAL JOB</h4>
                            <p>{{ Count($ticketcebu) + Count($ticketbohol) + Count($ticketMakati) + Count($ticketOsamiz) + Count($ticketMarketing) + Count($ticketHuman) + Count($ticketAccounting)}}</p>
                        </div>
                        <div class="stats-link">
                            <a href="{{ route('admin-request') }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6">
                    <div class="widget widget-stats bg-red">
                        <div class="stats-icon"><i class="fas fa-calendar-day"></i></div>
                        <div class="stats-info">
                            <h4>YESTERDAY'S CONCERN</h4>
                            <p>{{ Count($allYesterdayTicket) }}</p>
                        </div>
                        <div class="stats-link">
                            <a href="{{ route('admin-request') }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <h1 class="my-4 mt-5">Daily</h1>
                <div class="col-xl-6">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">Concern and Request Analytics (Daily)</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>
                        <canvas id="interactive-chart2" height="330"></canvas>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">Department Pending ( Daily Total ) - {{ now()->format('l') }}</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-panel align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>Departments</th>
                                        <th>Concern Slip</th>
                                        <th>JO Slip</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cebu Sales </td>
                                        <td>{{ Count($dailycebu) }}</td>
                                        <td>{{ Count($dailyticketcebu) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Bohol Sales </td>
                                        <td>{{ Count($dailybohol) }}</td>
                                        <td>{{ Count($dailyticketbohol) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Makati Sales</td>
                                        <td>{{ Count($dailymakati) }}</td>
                                        <td>{{ Count($dailyticketmakati) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Osamiz Sales</td>
                                        <td>{{ Count($dailyosamiz) }}</td>
                                        <td>{{ Count($dailyticketosamiz) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Marketing</td>
                                        <td>{{ Count($dailymarketing) }}</td>
                                        <td>{{ Count($dailyticketmarketing) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Human Resource</td>
                                        <td>{{ Count($dailyhuman) }}</td>
                                        <td>{{ Count($dailytickethuman) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Accounting</td>
                                        <td>{{ Count($dailyaccounting) }}</td>
                                        <td>{{ Count($dailyticketaccounting) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Totals in {{ now()->format('l') }}</td>
                                        <td>{{ Count($dailycebu) + Count($dailybohol) + Count($dailymakati) + Count($dailyosamiz) + Count($dailymarketing) + Count($dailyhuman) + Count($dailyaccounting) }}</td>
                                        <td>{{ Count($dailyticketcebu) + Count($dailyticketbohol) + Count($dailyticketmakati) + Count($dailyticketosamiz) + Count($dailyticketmarketing) + Count($dailytickethuman) + Count($dailyticketaccounting)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">Department Done ( Daily Total ) - {{ now()->format('l') }}</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-panel align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>Departments</th>
                                        <th>Concern Slip</th>
                                        <th>JO Slip</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cebu Sales </td>
                                        <td>{{ Count($dialycebuDone) }}</td>
                                        <td>{{ Count($dailyTicketcebuDone) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Bohol Sales </td>
                                        <td>{{ Count($dialyboholDone) }}</td>
                                        <td>{{ Count($dailyTicketboholDone) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Makati Sales</td>
                                        <td>{{ Count($dialyMakatiDone) }}</td>
                                        <td>{{ Count($dailyTicketMakatiDone) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Osamiz Sales</td>
                                        <td>{{ Count($dialyOsamizDone) }}</td>
                                        <td>{{ Count($dailyTicketOsamizDone) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Marketing</td>
                                        <td>{{ Count($dialyMarketingDone) }}</td>
                                        <td>{{ Count($dailyTicketMarketingDone) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Human Resource</td>
                                        <td>{{ Count($dialyHumanDone) }}</td>
                                        <td>{{ Count($dailyTicketHumanDone) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Accounting</td>
                                        <td>{{ Count($dialyAccountingDone) }}</td>
                                        <td>{{ Count($dailyTicketAccountingDone) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Totals in {{ now()->format('l') }}</td>
                                        <td>{{ Count($dialycebuDone) + Count($dialyboholDone) + Count($dialyMakatiDone) + Count($dialyOsamizDone) + Count($dialyMarketingDone) + Count($dialyHumanDone) + Count($dialyAccountingDone) }}</td>
                                        <td>{{ Count($dailyTicketcebuDone) + Count($dailyTicketboholDone) + Count($dailyTicketMakatiDone) + Count($dailyTicketOsamizDone) + Count($dailyTicketMarketingDone) + Count($dailyTicketHumanDone) + Count($dailyTicketAccountingDone)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <h1 class="my-4 mt-5">Monthly</h1>
                <div class="col-xl-6">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">Department Pending ( Monthly Total ) - {{ now()->format('F') }}</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-panel align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>Departments</th>
                                        <th>Concern Slip</th>
                                        <th>JO Slip</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cebu Sales </td>
                                        <td>{{ Count($cebu) }}</td>
                                        <td>{{ Count($ticketcebu) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Bohol Sales </td>
                                        <td>{{ Count($bohol) }}</td>
                                        <td>{{ Count($ticketbohol) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Makati Sales</td>
                                        <td>{{ Count($makati) }}</td>
                                        <td>{{ Count($ticketMakati) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Osamiz Sales</td>
                                        <td>{{ Count($osamiz) }}</td>
                                        <td>{{ Count($ticketOsamiz) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Marketing</td>
                                        <td>{{ Count($marketing) }}</td>
                                        <td>{{ Count($ticketMarketing) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Human Resource</td>
                                        <td>{{ Count($human) }}</td>
                                        <td>{{ Count($ticketHuman) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Accounting</td>
                                        <td>{{ Count($accounting) }}</td>
                                        <td>{{ Count($ticketAccounting) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Totals in {{ now()->format('l') }}</td>
                                        <td>{{ Count($cebu) + Count($bohol) + Count($makati) + Count($osamiz) + Count($marketing) + Count($human) + Count($accounting) }}</td>
                                        <td>{{ Count($ticketcebu) + Count($ticketbohol) + Count($ticketMakati) + Count($ticketOsamiz) + Count($ticketMarketing) + Count($ticketHuman) + Count($ticketAccounting)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">Department Done ( Monthly Total ) - {{ now()->format('F') }}</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-panel align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>Departments</th>
                                        <th>Concern Slip</th>
                                        <th>JO Slip</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cebu Sales </td>
                                        <td>{{ Count($donecebu) }}</td>
                                        <td>{{ Count($doneticketcebu) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Bohol Sales </td>
                                        <td>{{ Count($donebohol) }}</td>
                                        <td>{{ Count($doneticketbohol) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Makati Sales</td>
                                        <td>{{ Count($doneMakati) }}</td>
                                        <td>{{ Count($doneticketMakati) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Osamiz Sales</td>
                                        <td>{{ Count($doneOsamiz) }}</td>
                                        <td>{{ Count($doneticketOsamiz) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Marketing</td>
                                        <td>{{ Count($doneMarketing) }}</td>
                                        <td>{{ Count($doneticketMarketing) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Human Resource</td>
                                        <td>{{ Count($doneHuman) }}</td>
                                        <td>{{ Count($doneticketHuman) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Accounting</td>
                                        <td>{{ Count($doneAccounting) }}</td>
                                        <td>{{ Count($doneticketAccounting) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Totals in {{ now()->format('ls') }}</td>
                                        <td>{{ Count($donecebu) + Count($donebohol) + Count($doneMakati) + Count($doneOsamiz) + Count($doneMarketing) + Count($doneHuman) + Count($doneAccounting) }}</td>
                                        <td>{{ Count($doneticketcebu) + Count($doneticketbohol) + Count($doneticketMakati) + Count($doneticketOsamiz) + Count($doneticketMarketing) + Count($doneticketHuman) + Count($doneticketAccounting)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">Concern and Request Analytics ( Whole Year)</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>
                        <canvas id="interactive-chart" height="326"></canvas>
                    </div>
                </div>
            </div>

            <div class="theme-panel">
                <a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fas fa-cog"></i></a>
                <div class="theme-panel-content" data-scrollbar="true" data-height="100%">
                    <h5> App Settings </h5>

                    <div class="theme-panel-divider"></div>

                    <div class="row mt-10px">
                        <div class="col-8 control-label text-body fw-bold">
                            <div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative" style="top: -1px;">NEW</span></div>
                            <div class="lh-14">
                                <small class="text-body opacity-50">
                                    Adjust the appearance to reduce glare and give your eyes a break.
                                </small>
                            </div>
                        </div>
                        <div class="col-4 d-flex">
                            <div class="form-check form-switch ms-auto mb-0">
                                <input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
                                <label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

        </div>

        <script src="{{ asset('js/jquery-3.5.1.min.js') }}" type="9dd2961859eb1e28de60110d-text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script src="{{ asset('js/vendor.min.js') }}" type="9dd2961859eb1e28de60110d-text/javascript"></script>
        <script src="{{ asset('js/color.min.js') }}" type="9dd2961859eb1e28de60110d-text/javascript"></script>
        <script async src="{{ asset('js/googlet.min.js') }}" type="9dd2961859eb1e28de60110d-text/javascript"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const canvas = document.getElementById("interactive-chart");
                const canvas2 = document.getElementById("interactive-chart2");

                if (canvas) {
                    const ctx = canvas.getContext("2d");
                    const ctx2 = canvas2.getContext("2d");

                    if (ctx) {
                        // Year chart
                        $.ajax({
                            url: '/getAllData',
                            method: 'GET',
                            dataType: 'json',
                            success: function(response) {

                                let keys = [];
                                let values = [0, ];

                                for (const key in response) {
                                    if (Object.hasOwnProperty.call(response, key)) {
                                        const val = response[key];
                                        keys.push(key);
                                        values.push(val);
                                    }
                                }

                                const xValues = ['Month', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                                let sum = Math.max(...values);

                                new Chart("interactive-chart", {
                                    type: "line",
                                    data: {
                                        labels: xValues,
                                        datasets: [{
                                            fill: false,
                                            lineTension: 0,
                                            backgroundColor: "rgba(0,0,255,1.0)",
                                            borderColor: "rgba(0,0,255,0.1)",
                                            data: values
                                        }]
                                    },
                                    options: {
                                        legend: {
                                            display: false
                                        },
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    min: 1,
                                                    max: sum + 10
                                                }
                                            }],
                                        }
                                    }
                                });

                            },
                            error: function(error) {
                                console.error("Failed to fetch data from the server.", error);
                            }
                        });
                        // Year chart
                        $.ajax({
                            url: '/getAllDataPendingDone',
                            method: 'GET',
                            dataType: 'json',
                            success: function(response) {
                                if (typeof response === 'string') {
                                    response = JSON.parse(response);
                                }

                                let keys = [];
                                let values = response;

                                const xValues = ['Done', 'Pending'];
                                const colors = ['blue', 'red'];

                                new Chart("interactive-chart2", {
                                    type: "pie",
                                    data: {
                                        labels: xValues,
                                        datasets: [{
                                            backgroundColor: colors,
                                            data: values
                                        }]
                                    },
                                    options: {
                                        title: {
                                            display: true,
                                            text: "Pending and Done Concern and Order"
                                        }
                                    }
                                });

                            },
                            error: function(error) {
                                console.error("Failed to fetch data from the server.", error);
                            }
                        });

                    } else {
                        console.error("Failed to obtain rendering context for the canvas.");
                    }
                } else {
                    console.error("Canvas element with ID 'interactive-chart' not found.");
                }
            });
        </script>
        <script type="9dd2961859eb1e28de60110d-text/javascript">
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-Y3Q0VGQKY3');
        </script>
        <script src="{{ asset('js/rocketloader.min.js') }}" data-cf-settings="9dd2961859eb1e28de60110d-|49" defer></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"849cd0090baf0445","r":1,"version":"2024.1.0","token":"4db8c6ef997743fda032d4f73cfeff63"}' crossorigin="anonymous"></script>
</body>

</html>