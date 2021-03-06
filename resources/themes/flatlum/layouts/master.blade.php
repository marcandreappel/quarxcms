<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>SB Admin v2.0 in Laravel 5</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <link rel="stylesheet" href="/themes/flatlum/css/styles.css">
    @yield('stylesheets')
</head>
<body>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://demo.startlaravel.com/sb-admin-laravel">SB Admin v2.0 | Laravel 5</a>
        </div>
        <!-- /.navbar-header -->

        <div class="collapse navbar-collapse" id="navBar">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('page/welcome') }}">Welcome</a></li>
                <li><a href="{{ url('blog') }}">Blog</a></li>
                <li><a href="{{ url('gallery') }}">Gallery</a></li>
                <li><a href="{{ url('faqs') }}">FAQs</a></li>
                <li><a href="{{ url('events') }}">Events</a></li>
                @modules()
            </ul>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"
                       href="http://demo.startlaravel.com/sb-admin-laravel/#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"
                       href="http://demo.startlaravel.com/sb-admin-laravel/#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>

                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success  progress-bar-striped active"
                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                 aria-valuemax="100"
                                                 style="width: 40%;">

                                            </div>
                                        </div>
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>

                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info  progress-bar-striped active"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100"
                                                 style="width: 20%;">

                                            </div>
                                        </div>
                                        <span class="sr-only">20% Complete</span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>

                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning  progress-bar-striped active"
                                                 role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                 aria-valuemax="100"
                                                 style="width: 60%;">

                                            </div>
                                        </div>
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>

                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger  progress-bar-striped active"
                                                 role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                 aria-valuemax="100"
                                                 style="width: 80%;">

                                            </div>
                                        </div>
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"
                       href="http://demo.startlaravel.com/sb-admin-laravel/#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="http://demo.startlaravel.com/sb-admin-laravel/#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"
                       href="http://demo.startlaravel.com/sb-admin-laravel/#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="http://demo.startlaravel.com/sb-admin-laravel/#"><i class="fa fa-user fa-fw"></i>
                                User
                                Profile</a>
                        </li>
                        <li><a href="http://demo.startlaravel.com/sb-admin-laravel/#"><i class="fa fa-gear fa-fw"></i>
                                Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="http://demo.startlaravel.com/sb-admin-laravel/login"><i
                                        class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav in" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li class="&quot;active&quot;">
                            <a href="http://demo.startlaravel.com/sb-admin-laravel" class="active"><i
                                        class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/charts"><i
                                        class="fa fa-bar-chart-o fa-fw"></i> Charts</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/tables"><i
                                        class="fa fa-table fa-fw"></i>
                                Tables</a>
                        </li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/forms"><i
                                        class="fa fa-edit fa-fw"></i>
                                Forms</a>
                        </li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#"><i class="fa fa-wrench fa-fw"></i>
                                UI
                                Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="http://demo.startlaravel.com/sb-admin-laravel/panels">Panels and
                                        Collapsibles</a>
                                </li>
                                <li>
                                    <a href="http://demo.startlaravel.com/sb-admin-laravel/buttons">Buttons</a>
                                </li>
                                <li>
                                    <a href="http://demo.startlaravel.com/sb-admin-laravel/notifications">Alerts</a>
                                </li>
                                <li>
                                    <a href="http://demo.startlaravel.com/sb-admin-laravel/typography">Typography</a>
                                </li>
                                <li>
                                    <a href="http://demo.startlaravel.com/sb-admin-laravel/icons"> Icons</a>
                                </li>
                                <li>
                                    <a href="http://demo.startlaravel.com/sb-admin-laravel/grid">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#"><i
                                        class="fa fa-sitemap fa-fw"></i>
                                Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="http://demo.startlaravel.com/sb-admin-laravel/#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="http://demo.startlaravel.com/sb-admin-laravel/#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="http://demo.startlaravel.com/sb-admin-laravel/#">Third Level <span
                                                class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level collapse">
                                        <li>
                                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">Third Level
                                                Item</a>
                                        </li>
                                        <li>
                                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">Third Level
                                                Item</a>
                                        </li>
                                        <li>
                                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">Third Level
                                                Item</a>
                                        </li>
                                        <li>
                                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#">Third Level
                                                Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/#"><i
                                        class="fa fa-files-o fa-fw"></i>
                                Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="http://demo.startlaravel.com/sb-admin-laravel/blank">Blank Page</a>
                                </li>
                                <li>
                                    <a href="http://demo.startlaravel.com/sb-admin-laravel/login">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://demo.startlaravel.com/sb-admin-laravel/documentation"><i
                                        class="fa fa-file-word-o fa-fw"></i> Documentation</a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid col-sm-12 page-heading">
        @yield('page_heading')
        </div>
        <div class="site-wrapper @if(Request::is('/')) homepage @endif">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>


        <div class="footer container-fluid navbar-fixed-bottom">
            <p class="pull-left">&copy; {{ date('Y') }}</p>
            @can('quarx')
                <a class="btn btn-xs btn-default pull-right" href="{{ url('quarx/dashboard') }}">Quarx</a>
                @yield('quarx')
            @else
                <a class="btn btn-xs btn-default pull-right" href="{{ url('login') }}">Login</a>
            @endcan
        </div>


    </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
@yield('scripts')
{{--<script src="/themes/flatlum/js/frontend.js" type="text/javascript"></script>--}}

</body>
</html>