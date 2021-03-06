<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/admin_bootstrap/vendor/bootstrap/css/bootstrap.css' ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url().'assets/admin_bootstrap/vendor/metisMenu/metisMenu.min.css' ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/admin_bootstrap/dist/css/sb-admin-2.css' ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'assets/admin_bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet' ?>" type="text/css">

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
                <a class="navbar-brand" href="<?php echo base_url().'Admin/Dashboard'; ?>">NEO Wedding Organizer</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <a class="navbar-brand" href=""><?php echo $this->session->userdata('session')['user']; ?></a>
                <li><a href="<?php echo base_url().'Admin/Login/logout' ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'Admin/Dashboard'; ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'Admin/Gallery'; ?>"><i class="fa fa-picture-o fa-fw"></i> Gallery</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'Admin/Article'; ?>"><i class="fa fa-list fa-fw"></i> Article</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'Admin/Message'; ?>"><i class="fa fa fa-comments fa-fw"></i> Message</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'Admin/Changepassword'; ?>"><i class="fa fa-cog fa-fw"></i> Change Password</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-picture-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $dataGaleri; ?></div>
                                    <div><strong>My Gallery</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url().'Admin/Gallery'; ?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $dataArtikel; ?></div>
                                    <div><strong>My Article</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url().'Admin/Article'; ?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $dataPesan; ?></div>
                                    <div><strong>Message</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url().'Admin/Message'; ?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cog fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">-</div>
                                    <div><strong>Change Password</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url().'Admin/Changepassword'; ?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/admin_bootstrap/vendor/jquery/jquery.min.js' ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/admin_bootstrap/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().'assets/admin_bootstrap/dist/js/sb-admin-2.js' ?>"></script>

</body>

</html>