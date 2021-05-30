<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title>Atmos Admin Panel- Bootstrap 4 Based Admin Panel</title>
<link rel="icon" type="image/x-icon" href="{{asset('assets/img/logo.png')}}"/>
<link rel="icon" href="{{asset('assets/img/logo.png')}}" type="image/png" sizes="16x16">
<link rel="stylesheet" href="{{asset('assets/vendor/pace/pace.css')}}">
<script src="{{asset('')}}assets/vendor/pace/pace.min.js"></script>
<!--vendors-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/jquery-scrollbar/jquery.scrollbar.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/jquery-ui/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/timepicker/bootstrap-timepicker.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/materialdesignicons/materialdesignicons.min.css')}}">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/feather/feather-icons.css')}}">
<!--Bootstrap + atmos Admin CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/atmos.min.css')}}">
<!-- Additional library for page -->


</head>
<body class="sidebar-pinned ">
<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="{{asset('assets/img/logo.png')}}" width="40" alt="atmos Logo">
        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar pin-->
            <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar"></a>
        </div>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <ul class="menu">
            <li class="menu-item active ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Dashboard
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder fe fe-activity "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item ">
                        <a href="index.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Dashboard 1</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  fe fe-zap ">

                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="dashboard-02.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Dashboard 2</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder fe fe-edit-2 ">

                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="dashboard-03.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Dashboard 3</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  fe fe-compass">

                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="dashboard-04.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Dashboard 4</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  fe fe-shopping-cart">

                                                </i>
                                            </span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Forms
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder fe fe-edit "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="forms.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Basic
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-checkbook "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-custom.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Custom Controls
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-checkbox-multiple-marked-circle "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-advance.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Advance
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-calendar-edit "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-wizard.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Wizard
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-step-forward  "></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">UI Elements
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder fe fe-zap "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="alerts.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Alerts </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
A
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="avatar.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Avatar </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
A
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="buttons.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Buttons </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
B
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item  ">
                        <a href="cards.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Cards
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-cards-outline  "></i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="icons.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Icons
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-alien "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="modal.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Modals </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
M
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="notification.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Notification </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
N
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="typography.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Typography </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
T
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="tabs.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Tabs  </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
T
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="sweetalert.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Sweet Alert  </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
S
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="accordian.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Accordian  </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
A
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="tooltip.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Tooltips </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
T
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="color.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Colors
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-format-color-fill "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="spinners.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Spinners </span>
                                            </span>
                            <span class="menu-icon">
                                    <i class="icon-placeholder mdi mdi-loading mdi-spin"></i>

                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="blockui.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Block UI
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
B
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="jstree.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Js Tree
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
T
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="wireframe.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Wireframe </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
W
                                                </i>
                                            </span>
                        </a>

                    </li>
                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Widgets
                                                    <span class="menu-arrow"></span>
                                                </span>
<span class="menu-info"> 👌 New Widgets  </span>
                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder fe fe-toggle-left"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="widget-01.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Widget 01
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-webpack "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="widget-02.html" class=" menu-link">
                                        <span class="menu-label">
                                                  <span class="menu-name">Widget 02
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-webpack"></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Apps
                                                     ⚡
                                                    <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder fe fe-aperture "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="kanban.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Kanban
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder fe fe-watch"></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="chat.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Chat
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder fe fe-message-square"></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="mail.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Mail
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder fe fe-mail "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="guide.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Guides
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder fe fe-book "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="todo.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Todo
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder fe fe-list "></i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Pages
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">Extra Pages</span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder fe fe-folder-plus "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="profile.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Profile </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    P
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="timeline.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Timeline </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    T
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="contacts.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Contacts </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    C
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="login.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Login </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    L
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="signup.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Sign Up </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    S
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="reset.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Reset Password </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    R
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="logout.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Logout </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    L
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Settings </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    <i class="icon  mdi mdi-settings"></i>
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="status.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Status Page </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    S
                                                </i>
                                            </span>
                        </a>
                    </li>



                </ul>
            </li>




            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Charts
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder fe fe-bar-chart-2 "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="apexchart.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Apex Charts
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-chart-gantt "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="chartjs.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Chartsjs
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-chart-bar "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="googlechart.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Google Charts
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-google "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="chartist.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Chartist
                                                </span>
                                            </span>

                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                     <i class="icon-placeholder mdi mdi-chart-arc "></i>
                                                </i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>


            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Tables
                                                      <span class="menu-arrow"></span>

                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder fe fe-database"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="table.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Table
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-format-list-bulleted "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                         <span class="menu-label">
                                                <span class="menu-name">Datatable
                                                      <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-format-list-bulleted "></i>
                                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="datatable.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Basic </span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    b
                                                </i>
                                            </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="datatable-height.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Variable Height </span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    h
                                                </i>
                                            </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="datatable-multi.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Multi select </span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    M
                                                </i>
                                            </span>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Maps
                                                    <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder fe fe-map"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="mapael.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Vector Maps
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-map-search-outline "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="google-maps.html" class=" menu-link">
                                        <span class="menu-label">
                                                  <span class="menu-name">Google Maps
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-google"></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Calender
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder fe fe-calendar "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="calender.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Calender
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-calendar "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="calender-create.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Calender Edit
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-calendar-edit "></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Invoices
                                                    <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder fe fe-dollar-sign "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="invoice.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Invoice View </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    I
                                                </i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="invoice-single.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Single Invoice </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    S
                                                </i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Editors
                                                    <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder fe fe-file-text "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="tinymce.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">TinyMCE </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    T
                                                </i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="summernote.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Summernote </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    S
                                                </i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="trumbowyg.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name"> Trumbowyg </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    T
                                                </i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Error Pages
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">404,503 etc</span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-pac-man "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="404.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">404 </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Er
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="502.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">502 </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Er
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="503.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">503 </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Er
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="403.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">403 </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Er
                                                </i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item  ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Emails
                                                    <span class="menu-arrow"></span>
                                                </span>
<span class="menu-info"> 🌈 New  </span>
                                            </span>
                    <span class="menu-icon">

                                                 <i class="icon-placeholder mdi mdi-mailbox-open-outline "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item ">
                        <a href="emails/confirm-mail.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Confirm Email</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
C
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="emails/password-reset.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Password Reset </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
P
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="emails/confirm-subscription.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Subscription Email</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
S
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="emails/message.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Notification</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
N
                                                </i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Forums
                                                    <span class="menu-arrow"></span>
                                                </span>
                        </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-chat "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="forum-home.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Forum Home </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    <i class="icon mdi mdi-chat"></i>
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forum-thread.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Forum Thread </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    <i class="icon mdi mdi-message-reply"></i>
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forum-discussion.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Discussion </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    <i class="icon mdi mdi-message-bulleted"></i>
                                                </i>
                                            </span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Menus
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">Contains submenu</span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder fe fe-bookmark "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="#" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Menu Level </span>
                                                <span class="menu-info">500 New Events</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Sb
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Menus
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">Contains submenu</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="#" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Menu Level </span>
                                                <span class="menu-info">500 New Events</span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Sb
                                                </i>
                                            </span>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>
        </ul>

    </div>

</aside>
<main class="admin-main">
    <!--site header begins-->
<header class="admin-header">

    <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>

    <nav class=" mr-auto my-auto">
        <ul class="nav align-items-center">

            <li class="nav-item">
                <a class="nav-link  " data-target="#siteSearchModal" data-toggle="modal" href="#">
                    <i class=" mdi mdi-magnify mdi-24px align-middle"></i>
                </a>
            </li>
        </ul>
    </nav>
    <nav class=" ml-auto">
        <ul class="nav align-items-center">

            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-24px mdi-bell-outline"></i>
                        <span class="notification-counter"></span>
                    </a>

                    <div class="dropdown-menu notification-container dropdown-menu-right">
                        <div class="d-flex p-all-15 bg-white justify-content-between border-bottom ">
                            <a href="#!" class="mdi mdi-18px mdi-settings text-muted"></a>
                            <span class="h5 m-0">Notifications</span>
                            <a href="#!" class="mdi mdi-18px mdi-notification-clear-all text-muted"></a>
                        </div>
                        <div class="notification-events bg-gray-300">
                            <div class="text-overline m-b-5">today</div>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body"> <i class="mdi mdi-circle text-success"></i> All systems operational.</div>
                                </div>
                            </a>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body"> <i class="mdi mdi-upload-multiple "></i> File upload successful.</div>
                                </div>
                            </a>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="mdi mdi-cancel text-danger"></i> Your holiday has been denied
                                    </div>
                                </div>
                            </a>


                        </div>

                    </div>
                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <span class="avatar-title rounded-circle bg-dark">V</span>

                    </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right"   >
                    <a class="dropdown-item" href="#">  Add Account
                    </a>
                    <a class="dropdown-item" href="#">  Reset Password</a>
                    <a class="dropdown-item" href="#">  Help </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"> Logout</a>
                </div>
            </li>

        </ul>

    </nav>
</header>
<!--site header ends -->    <section class="admin-content">
        <div class="container p-t-20">
            <div class="row">
                <div class="col-12 m-b-30">
                    <h3>Project Dashboard</h3>
                </div>
                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h3> Overview</h3>
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <div id="chart-09"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 my-auto">
                                    <h2>Project Status </h2>
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cumque cupiditate deserunt
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <div style="  overflow: hidden;
    max-height: 210px!important">
                                        <div id="chart-07"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <!--widget card begin-->
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col my-auto">
                                            <div class="h6 text-muted ">Media Reach </div>
                                        </div>

                                        <div class="col-auto my-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle badge-soft-danger"><i
                                                            class="mdi mdi-heart  "></i></div>

                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-4 fw-600">16k</h1>
                                    <div class="h6">
                                        <span class="text-success"> <i class="mdi mdi-arrow-top-right"></i> +0.65% </span>
                                        More activity than usual.
                                    </div>
                                </div>
                            </div>
                            <!--widget card ends-->

                        </div>
                        <div class="col-lg-6">
                            <!--widget card begin-->
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col my-auto">
                                            <div class="h6 text-muted ">New Modules </div>
                                        </div>

                                        <div class="col-auto my-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-soft-primary"><i
                                                            class="mdi mdi-script  "></i></div>

                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-4 fw-600">120</h1>
                                    <div class="h6">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> +0.65% </span>
                                        Less activity than usual.
                                    </div>
                                </div>
                            </div>
                            <!--widget card ends-->

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">

                        <div class="card-body">
                            <div class="card-header">
                                <h3 class=" m-b-0">Tickets</h3>

                                <div class="card-controls">

                                    <a href="#" class="js-card-fullscreen icon"></a>
                                    <a href="#" class="js-card-refresh icon"></a>
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                    class="icon mdi  mdi-dots-vertical"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="chart-08"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title"><i class="mdi mdi-18px text-info mdi-circle"></i> Project Status
                            </div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="text-center ">
                                <img src="assets/img/logos/mailchimp.jpg" class="rounded-circle" width="80" alt="">
                            </div>
                            <h4 class="text-center m-t-20">
                                Branding & Product Design
                            </h4>
                            <div class="text-muted text-center m-b-20">
                                5 Members
                            </div>
                            <div class="text-center m-b-30">
                                <div class=" avatar-group ">
                                    <div class="avatar avatar-sm">
                                        <img src="assets/img/users/user-5.jpg" class="avatar-img rounded-circle"
                                             alt="">
                                    </div>
                                    <div class="avatar avatar-sm">
                                        <img src="assets/img/users/user-4.jpg" class="avatar-img rounded-circle"
                                             alt="">
                                    </div>
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title rounded-circle bg-warning">A</div>
                                    </div>
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title rounded-circle bg-accent">X</div>
                                    </div>

                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title rounded-circle bg-danger">N</div>
                                    </div>
                                    <div class="avatar avatar-sm">
                                        <div class="avatar-title rounded-circle"><i class="mdi mdi-plus"></i></div>
                                    </div>
                                </div>
                            </div>


                            <div class="text-center p-b-20">
                                <button class="btn btn-primary">View Project</button>
                            </div>
                        </div>
                    </div>
                    <!--widget card ends-->


                </div>
                <div class="col-lg-4">
                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title m-b-0">People </h5>

                            <div class="card-controls">

                                <a href="#" class="js-card-fullscreen icon"></a>
                                <a href="#" class="js-card-refresh icon"></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush ">


                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="assets/img/users/user-1.jpg"
                                                                        class="avatar-img avatar-sm rounded-circle"
                                                                        alt=""></div>
                                </div>
                                <div class="">
                                    <div>Alex Johnson</div>
                                    <div class="text-muted">Visual Designer
                                    </div>
                                </div>

                                <div class="ml-auto">
                                    <a href="#" class="btn  btn-white">Follow</a>
                                </div>

                            </div>

                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="assets/img/users/user-2.jpg"
                                                                        class="avatar-img avatar-sm rounded-circle"
                                                                        alt=""></div>
                                </div>
                                <div class="">
                                    <div>Beckett Brown</div>
                                    <div class="text-muted">Project Manager
                                    </div>
                                </div>

                                <div class="ml-auto">
                                    <a href="#" class="btn  btn-white">Follow</a>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="assets/img/users/user-3.jpg"
                                                                        class="avatar-img avatar-sm rounded-circle"
                                                                        alt=""></div>
                                </div>
                                <div class="">
                                    <div>Brielle Cote</div>
                                    <div class="text-muted">Web Developer
                                    </div>
                                </div>

                                <div class="ml-auto">
                                    <a href="#" class="btn  btn-white">Follow</a>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="assets/img/users/user-4.jpg"
                                                                        class="avatar-img avatar-sm rounded-circle"
                                                                        alt=""></div>
                                </div>
                                <div class="">
                                    <div>Liam Lévesque</div>
                                    <div class="text-muted">Product Designer
                                    </div>
                                </div>

                                <div class="ml-auto">
                                    <a href="#" class="btn  btn-white">Follow</a>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="assets/img/users/user-5.jpg"
                                                                        class="avatar-img avatar-sm rounded-circle"
                                                                        alt=""></div>
                                </div>
                                <div class="">
                                    <div>Parker Roy</div>
                                    <div class="text-muted">Visual Designer
                                    </div>
                                </div>

                                <div class="ml-auto">
                                    <a href="#" class="btn  btn-white">Follow</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--widget card ends-->

                </div>
                <div class="col-lg-4">
                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title m-b-0">Costing Slabs</h5>

                            <div class="card-controls">

                                <a href="#" class="js-card-fullscreen icon"></a>
                                <a href="#" class="js-card-refresh icon"></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">

                            <div class="p-t-15 p-b-15  border-bottom border-bottom-dashed">
                                <div class="row ">
                                    <div class="col-md-7">
                                        <h6 class="">Project Budget
                                        </h6>
                                        <p class="text-muted m-0 ">
                                            Includes Tax and other liabilities

                                        </p>
                                    </div>
                                    <div class="col-md-5 my-auto  text-right">
                                        <h4 class="text-primary m-0">$5900</h4>

                                    </div>
                                </div>

                            </div>
                            <div class="p-t-15 p-b-15  border-bottom border-bottom-dashed">
                                <div class="row ">
                                    <div class="col-md-7">
                                        <h6 class="">Hosting Costs</h6>
                                        <p class="text-muted m-0 ">
                                            Server and CDN Hosting
                                        </p>
                                    </div>
                                    <div class="col-md-5 my-auto  text-right">
                                        <h4 class="text-success m-0">$563</h4>

                                    </div>
                                </div>

                            </div>
                            <div class="p-t-15 p-b-15  border-bottom border-bottom-dashed">
                                <div class="row ">
                                    <div class="col-md-7">
                                        <h6 class="">Payments</h6>
                                        <p class="text-muted m-0 ">
                                            Infrastructure and Rent
                                        </p>
                                    </div>
                                    <div class="col-md-5 my-auto  text-right">
                                        <h4 class="text-danger m-0">$720</h4>

                                    </div>
                                </div>

                            </div>

                            <div class="p-t-15 p-b-15  ">
                                <div class="row ">
                                    <div class="col-md-7">
                                        <h6 class="">Logistics</h6>
                                        <p class="text-muted m-0 ">
                                            Overall Regional Logistics

                                        </p>
                                    </div>
                                    <div class="col-md-5 my-auto  text-right">
                                        <h4 class="text-danger m-0">-15%</h4>

                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>
                    <!--widget card ends-->

                </div>
            </div>
        </div>
    </section>

</main>

<div class="modal modal-slide-left  fade" id="siteSearchModal" tabindex="-1" role="dialog" aria-labelledby="siteSearchModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-all-0" id="site-search">
                <button type="button" class="close light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="form-dark bg-dark text-white p-t-60 p-b-20 bg-dots" >
                    <h3 class="text-uppercase    text-center  fw-300 "> Search</h3>

                    <div class="container-fluid">
                        <div class="col-md-10 p-t-10 m-auto">
                            <input type="search" placeholder="Search Something"
                                   class=" search form-control form-control-lg">

                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-dark text-muted container-fluid p-b-10 text-center text-overline">
                        results
                    </div>
                    <div class="list-group list  ">


                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"   src="assets/img/users/user-3.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Eric Chen</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-4.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Sean Valdez</div>
                                <div class="text-muted">Marketing</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-8.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Marie Arnold</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i class="mdi mdi-24px mdi-file-pdf"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">SRS Document</div>
                                <div class="text-muted">25.5 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i
                                                class="mdi mdi-24px mdi-file-document-box"></i></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Design Guide.pdf</div>
                                <div class="text-muted">9 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm  ">
                                        <div class="avatar-title bg-primary rounded"><i
                                                    class="mdi mdi-24px mdi-code-braces"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">response.json</div>
                                <div class="text-muted">15 Kb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-info rounded"><i
                                                    class="mdi mdi-24px mdi-file-excel"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">June Accounts.xls</div>
                                <div class="text-muted">6 Mb</div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"   ></script>
<script src="{{asset('assets/vendor/jquery-ui/jquery-ui.min.js')}}"   ></script>
<script src="{{asset('assets/vendor/popper/popper.js')}}"   ></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"   ></script>
<script src="{{asset('assets/vendor/select2/js/select2.full.min.js')}}"   ></script>
<script src="{{asset('assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js')}}"   ></script>
<script src="{{asset('assets/vendor/listjs/listjs.min.js')}}"   ></script>
<script src="{{asset('assets/vendor/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-notify/bootstrap-notify.min.js')}}"   ></script>
<script src="{{asset('assets/js/atmos.min.js')}}"></script>
<!--page specific scripts for demo-->

<!--Additional Page includes-->
<script src="{{asset('assets/vendor/apexchart/apexcharts.min.js')}}"></script>
<!--chart data for current dashboard-->
<script src="{{asset('assets/js/dashboard-01.js')}}" ></script>

</body>
</html>
