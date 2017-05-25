<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Article Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/admin_bootstrap/vendor/bootstrap/css/bootstrap.css' ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url().'assets/admin_bootstrap/vendor/metisMenu/metisMenu.min.css' ?>" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url().'assets/admin_bootstrap/vendor/datatables-plugins/dataTables.bootstrap.css' ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url().'assets/admin_bootstrap/vendor/datatables-responsive/dataTables.responsive.css' ?>" rel="stylesheet">

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
                <a class="navbar-brand" href="<?php echo base_url().'Admin/Dashboard'; ?>">NEO Organizer</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
            <a class="navbar-brand" href=""><?php echo $this->session->userdata('session')['user']; ?></a>
            <li><a href="<?php echo base_url().'Admin/Login/logout' ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </ul>
            <!-- /.navbar-top-links -->

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
                    <h1 class="page-header">Article</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Database Artikel NEO Wedding</strong>
                        </div>
                        <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="<?php echo base_url().'Admin/Article/showAdd' ?>"><button type="button" class="btn btn-primary pull-right" >Tambah Artikel</button></a>
                            </div>
                        </div>
                        <div>
                        </div>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Isi</th>
                                        <th>Tanggal Update</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; foreach($article as $a){ ?>
                                    <tr>
                                    <!-- <?php echo $a->no ?> -->
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $a->judul ?></td>
                                        <td><?php echo $a->isi ?></td>
                                        <td><?php echo $a->tgl_update ?></td>
                                        <td>

                                            <div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li>
                                                    <a type="button" href="<?php echo base_url().'Admin/Article/doDelete/'. $a->no ?>">Hapus</a>
                                                </li>
                                                <li>
                                                    <a type="button" href="<?php echo base_url().'Admin/Article/editArtikel/'. $a->no ?>">Edit</a>
                                                </li>
                                              </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!--<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Edit Data Artikel</strong>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?php echo base_url().'Admin/Article/editArticle'?>">
                            <?php
                                if(isset($edit)){ ?>
                            <?php foreach($edit as $e){ ?>
                                <fieldset>
                                    <input class="form-control" value="<?php echo $e->no ?>" name="noo" type="text" required>
                                    <br>
                                    <input class="form-control" value="<?php echo $e->judul ?>" name="judull" type="text" required autofocus>
                                    <br>
                                    <textarea class="form-control" name="isi" rows="3"><?php echo $e->isi ?></textarea>
                                    <br>
                                    <input type="submit" class="btn btn-primary btn-block" value="Update"/>
                                    <?php echo form_close(); ?><br>
                                </fieldset>
                            <?php } ?>
                            <?php } ?>
                            </form>
                        </div>
                    </div>
                </div> -->
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

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url().'assets/admin_bootstrap/vendor/datatables/js/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin_bootstrap/vendor/datatables-plugins/dataTables.bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin_bootstrap/vendor/datatables-responsive/dataTables.responsive.js' ?>"></script>
    <script src="<?php echo base_url().'assets/admin_bootstrap/custom/admin.js' ?>"></script>

</body>

</html>