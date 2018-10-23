<!DOCTYPE html>
<html>

<head>
    <base href="{{asset('/Layout/Backend')}}/">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AdminUEC | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/styleme.css">
    <link rel="icon" type="image/ico" href="{{ asset('/upload/images/tlu.png') }}" sizes="140x140">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="ckfinder/ckfinder.js"></script>
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
</head>

<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="{{asset('admin/home')}}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>U</b>EC</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">UEC - TLU</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-envelope-o"></i>
                              <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Bạn có 4 tin nhắn</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" />
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                  </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle" />
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                  </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle" />
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                  </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle" />
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                  </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle" />
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                  </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">Xem tất cả</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-bell-o"></i>
                              <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                              <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                              <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                              <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                              <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                              <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                       
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <img src="{{asset('../storage/app/logo/nam.jpg')}}" class="user-image" />
                              <span class="hidden-xs">{{Auth::user()->user_name}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" />
                                    <p>
                                        Phuongnam - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Tài khoản</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{asset('logout')}}" class="btn btn-default btn-flat">Đăng xuất</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{asset('../storage/app/logo/nam.jpg')}}" class="img-circle" />
                        <!-- <i class="fa fa-user img-circle fa-2x"></i> -->
                    </div>
                    <div class="pull-left info">
                        <p>{{Auth::user()->user_name}}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Tìm kiếm..." />
                        <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">Các chức năng chính</li>
                    <li class="treeview @if(Request::is('admin/baiviet/*')) active @else  @endif">
                        <a href="{{asset('admin/doanhnghiep/thongtin')}}">
                            <i class="fa fa-briefcase"></i>
                            <span>Bài viết</span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                        <ul class="treeview-menu">
                            <li><a href="{{asset('admin/baiviet/tintuc/danhsach')}}" @if(Request::is('admin/baiviet/tintuc/*') || Request::is('admin/baiviet/tintuc')) style="color:white" @endif><i class="fa fa-circle-o text-blue"></i> Viết tin tức</a></li>
                            <li><a href="{{asset('admin/baiviet/gioithieu/danhsach')}}" @if(Request::is('admin/baiviet/gioithieu') || Request::is('admin/baiviet/gioithieu/*')) style="color:white" @endif><i class="fa fa-circle-o text-green"></i> Nhập thông tin UEC</a></li>
                            <li><a href="{{asset('admin/baiviet/huongdoanhnghiep/danhsach')}}" @if(Request::is('admin/baiviet/huongdoanhnghiep/*') || Request::is('admin/baiviet/huongdoanhnghiep')) style="color:white" @endif><i class="fa fa-circle-o text-yellow"></i> Hướng về doanh nghiệp</a></li>
                            <li><a href="{{asset('admin/baiviet/thongtinsinhvien/danhsach')}}" @if(Request::is('admin/baiviet/thongtinsinhvien/*') || Request::is('admin/baiviet/thongtinsinhvien')) style="color:white" @endif><i class="fa fa-circle-o text-warning"></i> Thông tin sinh viên </a></li>
                            <li><a href="{{asset('admin/baiviet/dinhhuongnghe/danhsach')}}" @if(Request::is('admin/baiviet/dinhhuongnghe/*') || Request::is('admin/baiviet/dinhhuongnghe')) style="color:white" @endif><i class="fa fa-circle-o text-gray"></i> Định hướng nghề nghiệp</a></li>
                            <li><a href="{{asset('admin/baiviet/jobfair/danhsach')}}" @if(Request::is('admin/baiviet/jobfair/*') || Request::is('admin/baiviet/jobfair')) style="color:white" @endif><i class="fa fa-circle-o text-light"></i> Job Fair</a></li>
                        </ul>
                    </li>
                    <li class="treeview @if(Request::is('admin/doanhnghiep/*')) active @else  @endif">
                        <a href="#">
                            <i class="fa fa-briefcase"></i>
                            <span>Doanh nghiệp</span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                        <ul class="treeview-menu">
                            <li><a href="{{asset('admin/doanhnghiep/thongtin')}}" @if(Request::is('admin/doanhnghiep/thongtin/*') || Request::is('admin/doanhnghiep/thongtin')) style="color:white" @endif><i class="fa fa-circle-o text-blue"></i> Thêm doanh nghiệp</a></li>
                            <li><a href="{{asset('admin/doanhnghiep/taikhoan')}}" @if(Request::is('admin/doanhnghiep/taikhoan/*') || Request::is('admin/doanhnghiep/taikhoan')) style="color:white" @endif><i class="fa fa-circle-o text-green"></i> Tạo tài khoản</a></li>
                        </ul>
                    </li>
                    <li class="treeview @if(Request::is('admin/nhatruong/*')) active @else  @endif">
                        <a href="#">
                            <i class="fa fa-university"></i>
                            <span>Nhà trường</span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                        <ul class="treeview-menu">
                            <li><a href="{{asset('admin/nhatruong/thongtin')}}" @if(Request::is('admin/nhatruong/thongtin/*') || Request::is('admin/nhatruong/thongtin')) style="color:white" @endif><i class="fa fa-circle-o text-green"></i> Thêm nhà trường</a></li>
                            <li><a href="{{asset('admin/nhatruong/taikhoan')}}" @if(Request::is('admin/nhatruong/taikhoan/*') || Request::is('admin/nhatruong/taikhoan')) style="color:white" @endif><i class="fa fa-circle-o text-blue"></i> Tạo tài khoản</a></li>
                        </ul>
                    </li>
                    <li class="treeview @if(Request::is('admin/giaovien/*')) active @else  @endif">
                        <a href="#">
                            <i class="fa  fa-user-secret"></i>
                            <span>Giáo viên</span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                        <ul class="treeview-menu">
                            <li><a href="{{asset('admin/giaovien/thongtin/list')}}" @if(Request::is('admin/giaovien/thongtin/*') || Request::is('admin/giaovien/thongtin')) style="color:white" @endif><i class="fa fa-circle-o text-blue"></i> Thêm giáo viên</a></li>
                            <li><a href="{{asset('admin/giaovien/taikhoan')}}" @if(Request::is('admin/giaovien/taikhoan/*') || Request::is('admin/giaovien/taikhoan')) style="color:white" @endif><i class="fa fa-circle-o text-red"></i> Tạo tài khoản</a></li>
                        </ul>
                    </li>
                    <li class="treeview @if(Request::is('admin/sinhvien/*')) active @else  @endif">
                        <a href="#">
                            <i class="fa  fa-graduation-cap"></i>
                            <span>Sinh viên</span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                        <ul class="treeview-menu">
                            <li><a href="{{asset('admin/sinhvien/thongtin')}}" @if(Request::is('admin/sinhvien/thongtin/*') || Request::is('admin/sinhvien/thongtin')) style="color:white" @endif><i class="fa fa-circle-o text-blue"></i> Thêm sinh viên</a></li>
                            <li><a href="{{asset('admin/sinhvien/taikhoan')}}" @if(Request::is('admin/sinhvien/taikhoan/*') || Request::is('admin/sinhvien/taikhoan')) style="color:white" @endif><i class="fa fa-circle-o"></i> Tạo tài khoản</a></li>
                        </ul>
                    </li>
                    <li class="treeview @if(Request::is('admin/danhmuckhac/*')) active @else  @endif">
                        <a href="#">
                            <i class="fa fa-share-alt"></i>
                            <span>Danh mục khác</span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                        <ul class="treeview-menu">
                            <li><a href="{{asset('admin/danhmuckhac/nghenghiep')}}" @if(Request::is('admin/danhmuckhac/nghenghiep/*') || Request::is('admin/danhmuckhac/nghenghiep')) style="color:white" @endif><i class="fa fa-circle-o"></i> Quản lý ngành nghề</a></li>
                            <li><a href="{{asset('admin/danhmuckhac/namkinhnghiem')}}" @if(Request::is('admin/danhmuckhac/nam/*') || Request::is('admin/danhmuckhac/nam')) style="color:white" @endif><i class="fa fa-circle-o"></i> Quản lý năm kinh nghiệm</a></li>
                            <li><a href="{{asset('admin/danhmuckhac/hocvan')}}" @if(Request::is('admin/danhmuckhac/hocvan/*') || Request::is('admin/danhmuckhac/hocvan')) style="color:white" @endif><i class="fa fa-circle-o"></i> Quản lý học vấn</a></li>
                            <li><a href="{{asset('admin/danhmuckhac/hinhthuc')}}" @if(Request::is('admin/danhmuckhac/hinhthuc/*') || Request::is('admin/danhmuckhac/hinhthuc')) style="color:white" @endif><i class="fa fa-circle-o"></i> Quản lý hình thức</a></li>
                            <li><a href="{{asset('admin/danhmuckhac/kinang')}}" @if(Request::is('admin/danhmuckhac/kinang/*') || Request::is('admin/danhmuckhac/kinang')) style="color:white" @endif><i class="fa fa-circle-o"></i> Quản lý kĩ năng</a></li>
                            <li><a href="{{asset('admin/danhmuckhac/khuvuc')}}" @if(Request::is('admin/danhmuckhac/khuvuc/*') || Request::is('admin/danhmuckhac/khuvuc')) style="color:white" @endif><i class="fa fa-circle-o"></i> Quản lý khu vực</a></li>
                            <li><a href="{{asset('admin/danhmuckhac/chucvu')}}" @if(Request::is('admin/danhmuckhac/chucvu/*') || Request::is('admin/danhmuckhac/chucvu')) style="color:white" @endif><i class="fa fa-circle-o"></i> Quản lý chức vụ</a></li>
                        </ul>
                    </li>
                    <li class="treeview @if(Request::is('admin/thongke/*')) active @else  @endif">
                        <a href="#">
                            <i class="fa fa-line-chart"></i>
                            <span>Thống kê</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Trên doanh nghiệp</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Theo sinh viên</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Theo nhà trường</a></li>
                        </ul>
                    </li>
                    <li class="treeview @if(Request::is('admin/morong/*')) active @else  @endif">
                        <a href="#">
                            <i class="fa fa-line-chart"></i>
                            <span>Mở rộng</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{asset('admin/morong/khoahoc')}}" @if(Request::is('admin/morong/khoahoc/*') || Request::is('admin/morong/khoahoc')) style="color:white" @endif><i class="fa fa-circle-o"></i> Khoa học</a></li>
                            <li><a href="{{asset('admin/morong/khoa')}}" @if(Request::is('admin/morong/khoa/*') || Request::is('admin/morong/khoa')) style="color:white" @endif><i class="fa fa-circle-o"></i> Khóa học</a></li>
                            <li><a href="{{asset('admin/morong/chuyennganh')}}" @if(Request::is('admin/morong/chuyennganh/*') || Request::is('admin/morong/chuyennganh')) style="color:white" @endif><i class="fa fa-circle-o"></i> Chuyên ngành</a></li>
                        </ul>
                    </li>
                    <li class="header">LABELS</li>
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Nguy hiểm</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Cảnh báo</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Thông tin</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <!-- Main Viết ở đây -->
        


        @yield('main')


        <!-- End main -->
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">phuongnam250196@gmail.com</a>.</strong> All rights reserved.
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript::;">
                              <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                              <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                              </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript::;">
                              <i class="menu-icon fa fa-user bg-yellow"></i>
                              <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                <p>New phone +1(800)555-1234</p>
                              </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript::;">
                              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                              <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                <p>nora@example.com</p>
                              </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript::;">
                              <i class="menu-icon fa fa-file-code-o bg-green"></i>
                              <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                <p>Execution time 5 seconds</p>
                              </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->
                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript::;">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                  </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript::;">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                  </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript::;">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                  </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript::;">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                  </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->
                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked />
                            </label>
                            <p>Some information about this general settings option</p>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-sidebar-subheading">Allow mail redirect<input type="checkbox" class="pull-right" checked /></label>
                            <p>Other sets of options are available</p>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked />
                            </label>
                            <p>Allow the user to show his name in blog posts</p>
                        </div>
                        <!-- /.form-group -->
                        <h3 class="control-sidebar-heading">Chat Settings</h3>
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked />
                            </label>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right" />
                            </label>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script type="text/javascript">
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    {{-- <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script> --}}
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    {{-- <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js" type="text/javascript"></script> --}}
    <!-- Bootstrap WYSIHTML5 -->

    <script>
        // js chon anh
        function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function(){
                $('#img').click();
            });
        });
    </script>   
   
</body>

</html>