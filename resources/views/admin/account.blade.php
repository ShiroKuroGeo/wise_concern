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

    <link href="{{ asset('plugin/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugin/responsive.bootstrap5.min.css') }}" rel="stylesheet" />

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
                                <div class="menu-icon"><i class="fas fa-sign-out-alt"></i></div>
                                <div class="menu-text">Logout</div>
                            </a>
                        </div>
                        <div class="menu-divider m-0"></div>
                    </div>
                    <div class="menu-header">Navigation</div>
                    <div class="menu-item py-1">
                        <a href="{{ route('admin-dashboard') }}" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-sitemap" aria-hidden="true"></i>
                            </div>
                            <div class="menu-text">Dashboard</div>
                        </a>
                    </div>
                    <div class="menu-item py-1 active">
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



    </div>
    </div>


    <div id="content" class="app-content">

        <div class="d-flex justify-content-between">
            <h1 class="page-header">Managed Accounts <small>Users Accounts</small></h1>
            <button class="btn btn-sm mb-4 btn-primary" href="#addUserAccount" class="btn col-12" data-bs-toggle="modal">Add User Account</button>
            <div class="modal fade" id="addUserAccount">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add User Account</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin-add-accounts') }}" method="post">
                                @csrf
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="fullname">Full Name * :</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" id="name" name="name" placeholder="Enter Name" data-parsley-required="true" />
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-lg-4 col-form-label form-label" for="fullname">Email * :</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter Name" data-parsley-required="true" />
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-lg-8">
                                        <input class="form-control visually-hidden" type="text" id="role" name="role" value="2" placeholder="Enter Name" data-parsley-required="true" />
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-lg-8">
                                        <input class="form-control visually-hidden" type="password" id="password" name="password" value="password" placeholder="Enter Name" data-parsley-required="true" />
                                    </div>
                                </div>
                                <button class="btn visually-hidden" id="onclicksubmit" type="submit">Submit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                            <a href="javascript:;" class="btn btn-success" onclick="document.getElementById('onclicksubmit').click()">Add User</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-inverse">

            <div class="panel-heading">
                <h4 class="panel-title">Employee Concern - Table</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
            </div>


            <div class="panel-body">
                <table id="data-table-default" class="table table-striped table-bordered align-middle w-100 text-nowrap">
                    <thead>
                        <tr>
                            <th width="1%">IDs</th>
                            <th width="15%" data-orderable="false">Fullname</th>
                            <th class="text-nowrap">Email</th>
                            <th class="text-nowrap">Status</th>
                            <th class="text-nowrap">Created At</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($accounts as $acc)
                        <tr class="odd gradeX">
                            <td width="1%" class="fw-bold">Accounts {{ str_pad($acc->id, 3, '0', STR_PAD_LEFT) }}</td>
                            <td>{{ $acc->name }}</td>
                            <td>{{ $acc->email }}</td>
                            <td class="{{ $acc->status == 1 ? 'text-primary' : 'text-danger' }}">{{ $acc->status == 1 ? 'Unrestricted' : 'Restricted' }}</td>
                            <td>{{ \Carbon\Carbon::parse($acc->created_at)->format('l F j Y \a\t\ H:i:s') }}</td>
                            <td><a href="#modal-dialog" class="btn col-12" data-bs-toggle="modal" data-account-status="{{ $acc->status }}" data-account-id="{{ $acc->id }}" data-account-name="{{ $acc->name }}">{{ $acc->status == 1 ? 'Unrestricted' : 'Restricted' }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal fade" id="modal-dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body py-5 text-center">
                            <b> Are you sure want to <span id="account-status"></span> <span id="account-id"></span> ?</b>
                            <input type="text" name="restrictThisUser" id="restrictThisUser" value="2" class="visually-hidden">
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-white" data-bs-dismiss="modal" id="restr">Yes</a>
                            <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">No</a>
                        </div>
                    </div>
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

    </div>

    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/color.min.js') }}"></script>

    <script src="{{ asset('plugin/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugin/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('plugin/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugin/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('plugin/table-manage-default.demo.js') }}"></script>
    <script src="{{ asset('plugin/highlight.min.js') }}"></script>
    <script src="{{ asset('plugin/render.highlight.js') }}"></script>
    <script>
        $('#modal-dialog').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var accountId = button.data('account-id');
            var accountname = button.data('account-name');
            var accountstatus = button.data('account-status');

            $('#account-id').text(accountname);
            $('#account-status').text(accountstatus == 1 ? 'unrestricted' : 'restricted');
            $('#restrictThisUser').val(accountId);

        });

        $('#restr').click(function() {
            var currentValue = $('#restrictThisUser').val();
            var newHref = "{{ route('admin-restric-user', ['value' => ':value']) }}".replace(':value', currentValue);
            window.location.href = newHref;
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