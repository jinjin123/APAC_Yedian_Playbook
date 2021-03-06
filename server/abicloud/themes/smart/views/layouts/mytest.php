<?php
/* @var $this Controller */
$no_visible_elements = false;
//$racer_total = Racer::model()->count();
//$score_total = Score::model()->count();
//$contact_total = Contact::model()->count();
$racer_total = 0;
$score_total = 0;
$contact_total = 0;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--
                Charisma v1.0.0

                Copyright 2012 Muhammad Usman
                Licensed under the Apache License v2.0
                http://www.apache.org/licenses/LICENSE-2.0

                http://usman.it
                http://twitter.com/halalit_usman
        -->
        <meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- The styles -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" rel="stylesheet">
        <link id="bs-css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-classic.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/charisma-app.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <!-- link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/fullcalendar.css' rel='stylesheet' -->
        <!-- link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/fullcalendar.print.css' rel='stylesheet'  media='print' -->
        <link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/chosen.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/uniform.default.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/colorbox.css' rel='stylesheet'>
        <!-- link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.cleditor.css' rel='stylesheet' -->
        <link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.noty.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/noty_theme_default.css' rel='stylesheet'>
        <!-- link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/elfinder.min.css' rel='stylesheet' -->
        <!-- link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/elfinder.theme.css' rel='stylesheet' -->
        <link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/opa-icons.css' rel='stylesheet'>
        <!-- link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/uploadify.css' rel='stylesheet' -->

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5.js"></script>
        <![endif]-->

        <!-- jQuery -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>
        <!-- jQuery UI -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.21.custom.min.js"></script>

        <!-- The fav icon -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.ico">

        <style type="text/css">
            .mynotification {
                border-radius: 10px;
                border-style: solid;
                border-width: 1px;
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.08), 0 1px rgba(255, 255, 255, 0.3) inset;
                color: #FFFFFF !important;
                font-family: Arial,sans-serif;
                height: 16px;
                line-height: 16px;
                padding: 0 5px;
                float: right;
                text-shadow: 0 1px rgba(0, 0, 0, 0.25);
                color: #458746;
                background-color: #78CD51;
                background-image: -moz-linear-gradient(center top , #A6DC8D, #78CC51);
                border-color: #5AAD34;
                font-size: 14px;
                font-weight: bold;
            }
            .mynotification.yellow {
                color: #F99406;
                background-color: #FABB3D;
                background-image: -moz-linear-gradient(center top , #FBD587, #FABB3D);
                border-color: #F4A506;
            }
            .mynotification.green {
                color: #458746;
                background-color: #78CD51;
                background-image: -moz-linear-gradient(center top , #A6DC8D, #78CC51);
                border-color: #5AAD34;
            }
        </style>


    </head>

    <body>
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
            <!-- topbar starts -->
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="<?php echo Yii::app()->homeUrl; ?>"> <img alt="Logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo20.png" /> <span><?php echo Yii::t('site', Yii::app()->name); ?></span></a>

                        <!-- theme selector starts -->
                        <!-- theme selector ends -->

                        <!-- user dropdown starts -->
                        <div class="btn-group pull-right" >
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user"></i><span class="hidden-phone"><?php echo Yii::app()->user->name; ?></span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $this->createUrl('adminUser/view', array('id' => Yii::app()->user->id)); ?>"><?php echo Yii::t('site', 'Profile') ?></a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo $this->createUrl('site/logout'); ?>"><?php echo Yii::t('site', 'Logout') ?></a></li>
                            </ul>
                        </div>
                        <!-- user dropdown ends -->

                        <div class="top-nav nav-collapse">
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- topbar ends -->
        <?php } ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
                    <!-- left menu starts -->
                    <div class="span2 main-menu-span">
                        <div class="well nav-collapse sidebar-nav">
                            <ul class="nav nav-tabs nav-stacked main-menu">
                                <li class="nav-header hidden-tablet"><?php echo Yii::t('site', 'Main') ?></li>
                                <li><a class="ajax-link" href="<?php echo Yii::app()->homeUrl; ?>" title="<?php echo Yii::t('site', 'Home') ?>"><i class="icon-home"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Home') ?></span></a></li>
                                <li class="nav-header hidden-tablet"><?php echo Yii::t('site', 'KTV Room') ?></li>
                                <?php if( Yii::app()->user->checkAccess('Room.*') || Yii::app()->user->checkAccess('Room.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('room/index'); ?>" title="<?php echo Yii::t('site', 'Rooms') ?>"><i class="icon-folder-open"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Rooms') ?></span>
                                        <?php echo '<span class="mynotification green hidden-tablet" style="">' . Room::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('CheckinCode.*') || Yii::app()->user->checkAccess('CheckinCode.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('checkinCode/index'); ?>" title="<?php echo Yii::t('site', 'Room QR Code') ?>"><i class="icon-folder-open"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Room QR Code') ?></span>
                                        <?php echo '<span class="mynotification green hidden-tablet" style="">' . CheckinCode::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('RoomBooking.*') || Yii::app()->user->checkAccess('RoomBooking.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('roomBooking/index'); ?>" title="<?php echo Yii::t('site', 'Room Booking Orders') ?>"><i class="icon-folder-open"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Room Booking Orders') ?></span>
                                        <?php echo '<span class="mynotification green hidden-tablet" style="">' . RoomBooking::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('Device.*') || Yii::app()->user->checkAccess('Device.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('device/index'); ?>" title="<?php echo Yii::t('site', 'Devices') ?>"><i class="icon-picture"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Devices') ?></span>
                                        <?php echo '<span class="mynotification yellow hidden-tablet" style="">' . Device::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('DevicePlaylist.*') || Yii::app()->user->checkAccess('DevicePlaylist.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('devicePlaylist/index'); ?>" title="<?php echo Yii::t('site', 'Device Play List') ?>"><i class="icon-picture"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Device Play List') ?></span>
                                        <?php echo '<span class="mynotification yellow hidden-tablet" style="">' . DevicePlaylist::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <li class="nav-header hidden-tablet"><?php echo Yii::t('site', 'KTV Customer') ?></li>
                                <?php if( Yii::app()->user->checkAccess('PlatformUser.*') || Yii::app()->user->checkAccess('PlatformUser.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('platformUser/index'); ?>" title="<?php echo Yii::t('site', 'All Customers') ?>"><i class="icon-user"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'All Customers') ?></span>
                                        <?php echo '<span class="mynotification yellow hidden-tablet" style="">' . PlatformUser::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('CheckinUser.*') || Yii::app()->user->checkAccess('CheckinUser.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('checkinUser/index'); ?>" title="<?php echo Yii::t('site', 'Checked In') ?>"><i class="icon-user"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Checked In') ?></span>
                                        <?php echo '<span class="mynotification yellow hidden-tablet" style="">' . CheckinUser::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <li class="nav-header hidden-tablet"><?php echo Yii::t('site', 'Media Repository') ?></li>
                                <?php if( Yii::app()->user->checkAccess('Media.*') || Yii::app()->user->checkAccess('Media.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('media/index'); ?>" title="<?php echo Yii::t('site', 'Medias') ?>"><i class="icon-picture"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Medias') ?></span>
                                        <?php echo '<span class="mynotification yellow hidden-tablet" style="">' . Media::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('Media.*') || Yii::app()->user->checkAccess('Artist.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('artist/index'); ?>" title="<?php echo Yii::t('site', 'Artist') ?>"><i class="icon-user"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Artist') ?></span>
                                        <?php echo '<span class="mynotification yellow hidden-tablet" style="">' . Artist::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('Media.*') || Yii::app()->user->checkAccess('Artistcategory.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('artistcategory/index'); ?>" title="<?php echo Yii::t('site', 'Artistcategory') ?>"><i class="icon-folder-open"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Artistcategory') ?></span>
                                        <?php echo '<span class="mynotification yellow hidden-tablet" style="">' . Artistcategory::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('Media.*') || Yii::app()->user->checkAccess('Artistofcategory.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('artistofcategory/index'); ?>" title="<?php echo Yii::t('site', 'Artistofcategory') ?>"><i class="icon-user"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Artistofcategory') ?></span>
                                        <?php echo '<span class="mynotification yellow hidden-tablet" style="">' . Artistofcategory::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('Media.*') || Yii::app()->user->checkAccess('Musiccharts.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('musiccharts/index'); ?>" title="<?php echo Yii::t('site', 'Musiccharts') ?>"><i class="icon-folder-open"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Musiccharts') ?></span>
                                        <?php echo '<span class="mynotification yellow hidden-tablet" style="">' . Musiccharts::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('Media.*') || Yii::app()->user->checkAccess('Musicofcharts.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('musicofcharts/index'); ?>" title="<?php echo Yii::t('site', 'Musicofcharts') ?>"><i class="icon-picture"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Musicofcharts') ?></span>
                                        <?php echo '<span class="mynotification yellow hidden-tablet" style="">' . Musicofcharts::model()->count() . '</span>'; ?>
                                    </a></li>
                                <?php } ?>
                                <li class="nav-header hidden-tablet"><?php echo Yii::t('site', 'Setting') ?></li>
                                <?php if( Yii::app()->user->checkAccess('AdminUser.*') || Yii::app()->user->checkAccess('AdminUser.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('adminUser/index'); ?>" title="<?php echo Yii::t('site', 'User Admin') ?>"><i class="icon-user"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'User Admin') ?></span></a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('Statistics.*') || Yii::app()->user->checkAccess('Statistics.Index') ) { ?>
                                <li><a class="ajax-link" href="<?php echo $this->createUrl('statistics/index',array('Statistics_sort'=>'calltime.desc')); ?>" title="<?php echo Yii::t('site', 'Statistics') ?>"><i class="icon-user"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Statistics') ?></span></a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('Version.*') || Yii::app()->user->checkAccess('Version.Index') ) { ?>
                                <li><a href="<?php echo $this->createUrl('version/index'); ?>" title="<?php echo Yii::t('site', 'APP Version') ?>"><i class="icon-globe"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'APP Version') ?></span></a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('Site.*') || Yii::app()->user->checkAccess('Site.AllFunctions') ) { ?>
                                <li><a href="<?php echo $this->createUrl('//') . '/store/admin'; ?>" title="<?php echo Yii::t('site', 'Shop Admin') ?>"><i class="icon-globe"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'Shop Admin') ?></span></a></li>
                                <?php } ?>
                                <?php if( Yii::app()->user->checkAccess('Site.*') || Yii::app()->user->checkAccess('Site.AllFunctions') ) { ?>
                                <li><a href="<?php echo $this->createUrl('site/allFunctions'); ?>" title="<?php echo Yii::t('site', 'All Functions') ?>"><i class="icon-globe"></i><span class="hidden-tablet"> <?php echo Yii::t('site', 'All Functions') ?></span></a></li>
                                <?php } ?>
                            </ul>
                        </div><!--/.well -->
                    </div><!--/span-->
                    <!-- left menu ends -->

                    <noscript>
                    <div class="alert alert-block span10">
                        <h4 class="alert-heading">Warning!</h4>
                        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                    </div>
                    </noscript>

                    <div id="content" class="span10">
                        <!-- content starts -->
                    <?php } ?>

                    <?php if (isset($this->breadcrumbs)): ?>
                        <?php
                        $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links' => $this->breadcrumbs,
                            'htmlOptions' => array('class' => 'breadcrumb'),
                        ));
                        ?><!-- breadcrumbs -->
                    <?php endif ?>

                    <?php echo $content; ?>

                    <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
                        <!-- content ends -->
                    </div><!--/#content.span10-->
                <?php } ?>
            </div><!--/fluid-row-->
            <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

                <hr>

                <div class="modal hide fade" id="myModal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h3>Settings</h3>
                    </div>
                    <div class="modal-body">
                        <p>Here settings can be configured...</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        <a href="#" class="btn btn-primary">Save changes</a>
                    </div>
                </div>

                <footer>
                    <!-- p class="pull-left">&copy; <a href="http://www.capelabs.com" target="_blank">Capelabs</a> <?php echo date('Y') ?></p -->
                    <p class="pull-right"></p>
                </footer>
            <?php } ?>

        </div><!--/.fluid-container-->

        <!-- external javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <!-- transition / effect library -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-transition.js"></script>
        <!-- alert enhancer library -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-alert.js"></script>
        <!-- modal / dialog library -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-modal.js"></script>
        <!-- custom dropdown library -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-dropdown.js"></script>
        <!-- scrolspy library -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-scrollspy.js"></script>
        <!-- library for creating tabs -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-tab.js"></script>
        <!-- library for advanced tooltip -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-tooltip.js"></script>
        <!-- popover effect library -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-popover.js"></script>
        <!-- button enhancer library -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-button.js"></script>
        <!-- accordion library (optional, not used in demo) -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-collapse.js"></script>
        <!-- carousel slideshow library (optional, not used in demo) -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-carousel.js"></script>
        <!-- autocomplete library -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-typeahead.js"></script>
        <!-- tour library -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-tour.js"></script>
        <!-- library for cookie management -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.cookie.js"></script>
        <!-- calander plugin -->
        <!-- script src='<?php echo Yii::app()->theme->baseUrl; ?>/js/fullcalendar.min.js'></script -->
        <!-- data table plugin -->
        <!-- script src='<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.dataTables.min.js'></script -->

        <!-- chart libraries start -->
        <!--
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/excanvas.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flot.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flot.pie.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flot.stack.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flot.resize.min.js"></script>
        -->
        <!-- chart libraries end -->

        <!-- select or dropdown enhancer -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.chosen.min.js"></script>
        <!-- checkbox, radio, and file input styler -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.uniform.min.js"></script>
        <!-- plugin for gallery image view -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.colorbox.min.js"></script>
        <!-- rich text editor library -->
        <!-- script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.cleditor.min.js"></script -->
        <!-- notification plugin -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.noty.js"></script>
        <!-- file manager library -->
        <!-- script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.elfinder.min.js"></script -->
        <!-- star rating plugin -->
        <!-- script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.raty.min.js"></script -->
        <!-- for iOS style toggle switch -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.iphone.toggle.js"></script>
        <!-- autogrowing textarea plugin -->
        <!-- script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.autogrow-textarea.js"></script -->
        <!-- multiple file upload plugin -->
        <!-- script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.uploadify-3.1.min.js"></script -->
        <!-- history.js for cross-browser state change on ajax -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.history.js"></script>
        <!-- application script for Charisma demo -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/charisma.js"></script>

    </body>
</html>
