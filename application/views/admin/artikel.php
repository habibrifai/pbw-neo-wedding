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

    <link href="<?php echo base_url().'assets/dist/summernote.css' ?>" rel="stylesheet">

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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Tambah Artikel</strong>
                        </div>
                        <div class="panel-body">
                            

                            <?php if(isset($artikel)){ ?>
                                <?php foreach ($artikel as $a) { ?>
                                <?php echo form_open_multipart('Admin/Article/updateArticle');?>
                                <form>
                                    <fieldset>
                                        <input type="text" name="noo" id="noo" value="<?php echo $a->no ?>" hidden>
                                        <input class="form-control" placeholder="Judul" value="<?php echo $a->judul ?>" name="judull" type="text" required>
                                        <br>
                                        <p>Upload gambar disini . .</p>
                                        <input type="file" name="gbr">
                                        <br>
                                        <textarea name="txtArtikel" id="summernote"><?php echo $a->isi ?></textarea>
                                        <br>
                                        <input type="submit" class="btn btn-primary pull pull-right" value="Save Article"/>
                                        <?php echo form_close(); ?><br>
                                    </fieldset>
                                </form>
                                <?php } ?>
                            <?php } else { ?>
                                <?php echo form_open_multipart('Admin/Article/addArticle');?>
                                <form>
                                    <fieldset>
                                        <input class="form-control" placeholder="Judul" name="judull" type="text" required>
                                        <br>
                                        <p>Upload gambar disini . .</p>
                                        <input type="file" name="gbr">
                                        <br>
                                        <textarea name="txtArtikel" id="summernote"></textarea>
                                        <br>
                                        <input type="submit" class="btn btn-primary pull pull-right" value="Save Article"/>
                                        <?php echo form_close(); ?><br>
                                    </fieldset>
                                    <?php echo form_close(); ?><br>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
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

                                                    <a type="button" onclick="editArticlee('<?php echo $a->no ?>')" data-toggle="modal" data-target="#editArticle">Edit</a>

                                                </li>
                                              </ul>
                                            </div>

                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>                         
                        </div>
                    </div> -->
        </div>
    </div>
        <!-- /#page-wrapper -->
        <!-- <button type="button" id="add" class="btn btn-primary btn-circle btn-xl" data-toggle="modal" data-target="#addArticle"><i class="fa fa-plus"></i></button> -->

    <div class="modal fade" tabindex="-1" role="dialog" id="addArticle">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Artikel</h4>
          </div>
          <div class="modal-body">
            <form role="form" method="post" action="<?php echo base_url().'Admin/Article/addArticle'?>">
                <fieldset>
                    <input class="form-control" placeholder="Judul" name="judull" type="text" required>
                    <br>
                    <textarea class="form-control" placeholder="Isi" name="isi" rows="3"></textarea>
                    <br>
                    <input type="submit" class="btn btn-primary pull pull-right" value="Save Article"/>
                    <button style="margin-right: 10px" type="button" class="btn btn-default pull pull-right" data-dismiss="modal">Close</button>
                    <?php echo form_close(); ?><br>
                </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="editArticle">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Artikel</h4>
          </div>
          <div class="modal-body">

            <form role="form" method="post" id="editForm" action="<?php echo base_url().'Admin/Article/editArticle'?>">
                <fieldset>
                    <input id="noo" type="text" name="noo" hidden>
                    <input class="form-control" id="judull" name="judull" type="text" required>
                    <br>
                    <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
                    <br>
                    <input type="submit" class="btn btn-primary pull pull-right" value="Update"/>
                    <button style="margin-right: 10px" type="button" class="btn btn-default pull pull-right" data-dismiss="modal">Close</button>
                    <?php echo form_close(); ?><br>
                </fieldset>
            </form>

          </div>
        </div>
      </div>
    </div>

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
    <script src="<?php echo base_url().'assets/dist/summernote.js' ?>"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
            });
        });
    </script>

</body>

</html>