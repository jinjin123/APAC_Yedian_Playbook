<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>套餐管理-套餐系统-夜点管理系统</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="/wechatshangjia/Public/Admin/vendor/fontawesome/css/font-awesome.min.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="/wechatshangjia/Public/Admin/vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="/wechatshangjia/Public/Admin/vendor/animate.css/animate.min.css">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="/wechatshangjia/Public/Admin/vendor/whirl/dist/whirl.css">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <link rel="stylesheet" href="/wechatshangjia/Public/Admin/vendor/datatables-colvis/css/dataTables.colVis.css">
    <link rel="stylesheet" href="/wechatshangjia/Public/Admin/vendor/datatable-bootstrap/css/dataTables.bootstrap.css">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="/wechatshangjia/Public/Admin/css/bootstrap.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="/wechatshangjia/Public/Admin/css/app.css" id="maincss">
</head>

<body>
    <div class="wrapper">
        <!-- top navbar-->
        <header class="topnavbar-wrapper">
            <!-- START Top Navbar-->
            <nav role="navigation" class="navbar topnavbar">
    <!-- START navbar header-->
    <div class="navbar-header">
        <a href="#/" class="navbar-brand">
            <div class="brand-logo">
                <img src="/wechatshangjia/Public/Admin/img/logo.png" alt="App Logo" class="img-responsive">
            </div>
            <div class="brand-logo-collapsed">
                <img src="/wechatshangjia/Public/Admin/img/logo-single.png" alt="App Logo" class="img-responsive">
            </div>
        </a>
    </div>
    <!-- END navbar header-->
    <!-- START Nav wrapper-->
    <div class="nav-wrapper">
        <!-- START Left navbar-->
        <ul class="nav navbar-nav">
            <li>
                <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                <a href="#" data-toggle-state="aside-collapsed" class="hidden-xs">
                    <em class="fa fa-navicon"></em>
                </a>
                <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                    <em class="fa fa-navicon"></em>
                </a>
            </li>
            
        </ul>
        <!-- END Left navbar-->
        <!-- START Right Navbar-->
        <ul class="nav navbar-nav navbar-right">
            <!-- Search icon-->
            
            
            <!-- START Alert menu-->
            
            <!-- END Alert menu-->
            
            <!-- START LOGOUT Button -->
            <li class="visible-lg">
                <a href="<?php echo U('Admin/Public/logout');?>">
                    <em class="icon-logout"></em>
                </a>
            </li>
            <!-- END LOGOUT Button -->
        </ul>
        <!-- END Right Navbar-->
    </div>
    <!-- END Nav wrapper-->
    <!-- START Search form-->
    <form role="search" action="search.html" class="navbar-form">
        <div class="form-group has-feedback">
            <input type="text" placeholder="Type and hit enter ..." class="form-control">
            <div data-search-dismiss="" class="fa fa-times form-control-feedback"></div>
        </div>
        <button type="submit" class="hidden btn btn-default">Submit</button>
    </form>
    <!-- END Search form-->
</nav>

            <!-- END Top Navbar-->
        </header>
        <!-- sidebar-->
        <aside class="aside">
    <!-- START Sidebar (left)-->
    <div class="aside-inner">
        <nav data-sidebar-anyclick-close="" class="sidebar">
            <!-- START sidebar nav-->
            <ul class="nav">
                <!-- Iterates over all sidebar items-->
                <li class="nav-heading ">
                    <span data-localize="sidebar.heading.HEADER">夜点管理系统</span>
                </li>
                <li class=" ">
                    <a href="#xktv" title="XKTV管理" data-toggle="collapse">
                        <!-- <div class="pull-right label label-info">0</div> -->
                        <em class="icon-wrench"></em>
                        <span data-localize="sidebar.nav.MXktv">KTV管理</span>
                    </a>
                    <ul id="xktv" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">KTV列表</li>
                        <li class=" ">
                            <a href="<?php echo U('Xktv/lists');?>" title="XKTV列表">
                                <span>KTV列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#xktv_taocan" title="套餐管理" data-toggle="collapse">
                        <!-- <div class="pull-right label label-info">0</div> -->
                        <em class="icon-wrench"></em>
                        <span data-localize="sidebar.nav.MXktv">套餐管理</span>
                    </a>
                    <ul id="xktv_taocan" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">套餐管理</li>
                        <li class=" ">
                            <a href="<?php echo U('Taocan/datelists');?>" title="日期列表">
                                <span>日期列表</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="<?php echo U('Taocan/rometypelists');?>" title="房型列表">
                                <span>房型列表</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="<?php echo U('Taocan/taocanlists');?>" title="套餐列表">
                                <span>套餐列表</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="<?php echo U('Taocan/enterTimelists');?>" title="入场时间列表">
                                <span>入场时间列表</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="<?php echo U('Taocan/totaltaocanlists');?>" title="套餐组合列表">
                                <span>套餐组合列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END sidebar nav-->
        </nav>
    </div>
    <!-- END Sidebar (left)-->
</aside>

        <!-- offsidebar-->
        <aside class="offsidebar hide">
            <!-- START Off Sidebar (right)-->
            <nav>
                <div role="tabpanel">
                    <!-- Nav tabs-->
                    <ul role="tablist" class="nav nav-tabs nav-justified">
                        <li role="presentation" class="active">
                            <a href="#app-settings" aria-controls="app-settings" role="tab" data-toggle="tab">
                                <em class="icon-equalizer fa-lg"></em>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab">
                                <em class="icon-users fa-lg"></em>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes-->
                    <div class="tab-content">
                        <div id="app-settings" role="tabpanel" class="tab-pane fade in active">
                            <h3 class="text-center text-thin">Settings</h3>
                            <div class="p">
                                <h4 class="text-muted text-thin">Themes</h4>
                                <div class="table-grid mb">
                                    <div class="col mb">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-a.css">
                                                <input type="radio" name="setting-theme" checked="checked">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                       <span class="color bg-info"></span>
                                                <span class="color bg-info-light"></span>
                                                </span>
                                                <span class="color bg-white"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-b.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                       <span class="color bg-green"></span>
                                                <span class="color bg-green-light"></span>
                                                </span>
                                                <span class="color bg-white"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-c.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                       <span class="color bg-purple"></span>
                                                <span class="color bg-purple-light"></span>
                                                </span>
                                                <span class="color bg-white"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-d.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                       <span class="color bg-danger"></span>
                                                <span class="color bg-danger-light"></span>
                                                </span>
                                                <span class="color bg-white"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-grid mb">
                                    <div class="col mb">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-e.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                       <span class="color bg-info-dark"></span>
                                                <span class="color bg-info"></span>
                                                </span>
                                                <span class="color bg-gray-dark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-f.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                       <span class="color bg-green-dark"></span>
                                                <span class="color bg-green"></span>
                                                </span>
                                                <span class="color bg-gray-dark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-g.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                       <span class="color bg-purple-dark"></span>
                                                <span class="color bg-purple"></span>
                                                </span>
                                                <span class="color bg-gray-dark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-h.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                       <span class="color bg-danger-dark"></span>
                                                <span class="color bg-danger"></span>
                                                </span>
                                                <span class="color bg-gray-dark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p">
                                <h4 class="text-muted text-thin">Layout</h4>
                                <div class="clearfix">
                                    <p class="pull-left">Fixed</p>
                                    <div class="pull-right">
                                        <label class="switch">
                                            <input id="chk-fixed" type="checkbox" data-toggle-state="layout-fixed">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="pull-left">Boxed</p>
                                    <div class="pull-right">
                                        <label class="switch">
                                            <input id="chk-boxed" type="checkbox" data-toggle-state="layout-boxed">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="pull-left">RTL</p>
                                    <div class="pull-right">
                                        <label class="switch">
                                            <input id="chk-rtl" type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="p">
                                <h4 class="text-muted text-thin">Aside</h4>
                                <div class="clearfix">
                                    <p class="pull-left">Collapsed</p>
                                    <div class="pull-right">
                                        <label class="switch">
                                            <input id="chk-collapsed" type="checkbox" data-toggle-state="aside-collapsed">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="pull-left">Float</p>
                                    <div class="pull-right">
                                        <label class="switch">
                                            <input id="chk-float" type="checkbox" data-toggle-state="aside-float">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="pull-left">Hover</p>
                                    <div class="pull-right">
                                        <label class="switch">
                                            <input id="chk-hover" type="checkbox" data-toggle-state="aside-hover">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="app-chat" role="tabpanel" class="tab-pane fade">
                            <h3 class="text-center text-thin">Connections</h3>
                            <ul class="nav">
                                <!-- START list title-->
                                <li class="p">
                                    <small class="text-muted">ONLINE</small>
                                </li>
                                <!-- END list title-->
                                <li>
                                    <!-- START User status-->
                                    <a href="#" class="media-box p mt0">
                                        <span class="pull-right">
                                 <span class="circle circle-success circle-lg"></span>
                                        </span>
                                        <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="/wechatshangjia/Public/Admin/img/user/05.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                                        <!-- Contact info-->
                                        <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Juan Sims</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                                        </span>
                                    </a>
                                    <!-- END User status-->
                                    <!-- START User status-->
                                    <a href="#" class="media-box p mt0">
                                        <span class="pull-right">
                                 <span class="circle circle-success circle-lg"></span>
                                        </span>
                                        <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="/wechatshangjia/Public/Admin/img/user/06.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                                        <!-- Contact info-->
                                        <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Maureen Jenkins</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                                        </span>
                                    </a>
                                    <!-- END User status-->
                                    <!-- START User status-->
                                    <a href="#" class="media-box p mt0">
                                        <span class="pull-right">
                                 <span class="circle circle-danger circle-lg"></span>
                                        </span>
                                        <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="/wechatshangjia/Public/Admin/img/user/07.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                                        <!-- Contact info-->
                                        <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Billie Dunn</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                                        </span>
                                    </a>
                                    <!-- END User status-->
                                    <!-- START User status-->
                                    <a href="#" class="media-box p mt0">
                                        <span class="pull-right">
                                 <span class="circle circle-warning circle-lg"></span>
                                        </span>
                                        <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="/wechatshangjia/Public/Admin/img/user/08.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                                        <!-- Contact info-->
                                        <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Tomothy Roberts</strong>
                                    <br>
                                    <small class="text-muted">Designer</small>
                                 </span>
                                        </span>
                                    </a>
                                    <!-- END User status-->
                                </li>
                                <!-- START list title-->
                                <li class="p">
                                    <small class="text-muted">OFFLINE</small>
                                </li>
                                <!-- END list title-->
                                <li>
                                    <!-- START User status-->
                                    <a href="#" class="media-box p mt0">
                                        <span class="pull-right">
                                 <span class="circle circle-lg"></span>
                                        </span>
                                        <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="/wechatshangjia/Public/Admin/img/user/09.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                                        <!-- Contact info-->
                                        <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Lawrence Robinson</strong>
                                    <br>
                                    <small class="text-muted">Developer</small>
                                 </span>
                                        </span>
                                    </a>
                                    <!-- END User status-->
                                    <!-- START User status-->
                                    <a href="#" class="media-box p mt0">
                                        <span class="pull-right">
                                 <span class="circle circle-lg"></span>
                                        </span>
                                        <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="/wechatshangjia/Public/Admin/img/user/10.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                                        <!-- Contact info-->
                                        <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Tyrone Owens</strong>
                                    <br>
                                    <small class="text-muted">Designer</small>
                                 </span>
                                        </span>
                                    </a>
                                    <!-- END User status-->
                                </li>
                                <li>
                                    <div class="p-lg text-center">
                                        <!-- Optional link to list more users-->
                                        <a href="#" title="See more contacts" class="btn btn-purple btn-sm">
                                            <strong>Load more..</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <!-- Extra items-->
                            <div class="p">
                                <p>
                                    <small class="text-muted">Tasks completion</small>
                                </p>
                                <div class="progress progress-xs m0">
                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success progress-80">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p">
                                <p>
                                    <small class="text-muted">Upload quota</small>
                                </p>
                                <div class="progress progress-xs m0">
                                    <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-warning progress-40">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- END Off Sidebar (right)-->
        </aside>
        <!-- Main section-->
        <section>
            <!-- Page content-->
            <div class="content-wrapper">
                <div class="content-heading">
                    <a href="<?php echo U('Xktv/update');?>"><button type="button" class="btn btn-primary pull-right" id="importdata">
                        <em class="fa fa-plus-circle fa-fw mr-sm"></em>添加套餐</button></a>套餐管理</div>
                <div class="table-responsive b0">
                    <table id="Xktvlist" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>
                                <strong>KTVID</strong>
                            </th>
                            <th>
                                <strong>名称</strong>
                            </th>
                            <th>
                                <strong>预定电话</strong>
                            </th>
                            <th>
                                <strong>Ktv类型</strong>
                            </th>
                            <th>
                                <strong>营业时间</strong>
                            </th>
                            <th class="text-center">
                                <strong>地址</strong>
                            </th>
                            <th>
                                <strong>经理</strong>
                            </th>
                            <th class="text-center">
                                <strong>经理电话</strong>
                            </th>
                            <th class="text-center">
                                <strong>更新者</strong>
                            </th>
                            <th class="text-center">
                                <strong>更新时间</strong>
                            </th>
                            
                            <th class="text-center">
                                <strong>操作</strong>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        
                    </table>
                </div>
                <!--<div class="table-responsive b0">-->
                    <!--<table id="datatable1" class="table table-striped table-hover">-->
                        <!--<thead>-->
                            <!--<tr>-->
                                <!--<th style="width:80px">-->
                                    <!--<strong>序号</strong>-->
                                <!--</th>-->
                                <!--<th>-->
                                    <!--<strong>XKTV名称</strong>-->
                                <!--</th>-->
                                <!--<th>-->
                                    <!--<strong>XKTV位置</strong>-->
                                <!--</th>-->
                                <!--<th>-->
                                    <!--<strong>产品积分</strong>-->
                                <!--</th>-->
                                <!--<th>-->
                                    <!--<strong>产品分类</strong>-->
                                <!--</th>-->
                                <!--<th class="text-center">-->
                                    <!--<strong>状态(商户版)</strong>-->
                                <!--</th>-->
                                <!--<th>-->
                                    <!--<strong>创建时间</strong>-->
                                <!--</th>-->
                                <!--<th class="text-center">-->
                                    <!--<strong>操作</strong>-->
                                <!--</th>-->
                            <!--</tr>-->
                        <!--</thead>-->
                        <!--<tbody>-->
                            <!--<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                                <!--<tr>-->
                                    <!--<td><?php echo ($vo["id"]); ?></td>-->
                                    <!--<td><?php echo ($vo["name"]); ?></td>-->
                                    <!--<td><?php echo ($vo["name"]); ?></td>-->
                                    <!--<td><?php echo ($vo["productsale_points"]); ?></td>-->
                                    <!--<td><?php echo ($vo["productsale_cata3"]); ?></td>-->
                                    <!--<td class="text-center">-->
                                        <!--<?php echo ($vo["type"]); ?>-->
                                    <!--</td>-->
                                    <!--<td><?php echo ($vo["create_time"]); ?></td>-->
                                    <!--<td class="text-center">-->
                                        <!--<button type="button" class="btn btn-sm btn-default">-->
                                            <!--<a href="<?php echo U('edit',array('kid'=>$vo['id']));?>"><em class="fa fa-edit"></em></a>-->
                                        <!--</button>-->
                                        <!--<button type="button" class="btn btn-sm btn-default">-->
                                            <!--<em class="fa fa-remove"></em>-->
                                        <!--</button>-->
                                    <!--</td>-->
                                <!--</tr>-->
                            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                        <!--</tbody>-->
                    <!--</table>-->
                <!--</div>-->
            </div>
        </section>
        <!-- Main section-->
        <!-- Page footer-->
        <footer>
            <div class="p-lg text-center">
                <span>&copy;</span>
                <span>2016</span>
                <span></span>
                <span>夜点管理平台</span>
                <br>
                <span></span>
            </div>
        </footer>
    </div>
    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src="/wechatshangjia/Public/Admin/vendor/modernizr/modernizr.js"></script>
    <!-- JQUERY-->
    <script src="/wechatshangjia/Public/Admin/vendor/jquery/dist/jquery.js"></script>
    <!-- BOOTSTRAP-->
    <script src="/wechatshangjia/Public/Admin/vendor/bootstrap/dist/js/bootstrap.js"></script>
    <!-- STORAGE API-->
    <script src="/wechatshangjia/Public/Admin/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
    <!-- JQUERY EASING-->
    <script src="/wechatshangjia/Public/Admin/vendor/jquery.easing/js/jquery.easing.js"></script>
    <!-- ANIMO-->
    <script src="/wechatshangjia/Public/Admin/vendor/animo.js/animo.js"></script>
    <!-- SLIMSCROLL-->
    <script src="/wechatshangjia/Public/Admin/vendor/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- SCREENFULL-->
    <script src="/wechatshangjia/Public/Admin/vendor/screenfull/dist/screenfull.js"></script>
    <!-- LOCALIZE-->
    <script src="/wechatshangjia/Public/Admin/vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
    <!-- RTL demo-->
    <script src="/wechatshangjia/Public/Admin/js/demo/demo-rtl.js"></script>
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- DATATABLES-->
    <script src="/wechatshangjia/Public/Admin/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/wechatshangjia/Public/Admin/vendor/datatables-colvis/js/dataTables.colVis.js"></script>
    <script src="/wechatshangjia/Public/Admin/vendor/datatable-bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="/wechatshangjia/Public/Admin/vendor/datatable-bootstrap/js/dataTables.bootstrapPagination.js"></script>
    <script src="/wechatshangjia/Public/Admin/js/demo/demo-datatable.js"></script>
    <!-- =============== APP SCRIPTS ===============-->
    <script src="/wechatshangjia/Public/Admin/js/app.js"></script>

</body>

</html>