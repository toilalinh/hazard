<?php
session_start();
include_once '../../config/config.php';
include_once '../../core/database.php';
include_once '../../model/casestudy.php';
if(empty($_SESSION['username'])){
    header('Location: '.$base_url.'admin/login.php');
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hazard Admin</title>
    <!-- Core CSS - Include with every page -->
    <link href="../../resource/css/bootstrap.css" rel="stylesheet" />
    <link href="../../resource/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../resource/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../../resource/css/style.css" rel="stylesheet" />
    <link href="../../resource/css/main-style.css" rel="stylesheet" />
    <link href="../../resource/css/hazard.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../../resource/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
</head>
<body>
<!--  wrapper -->
<div id="wrapper">
    <!-- navbar top -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
        <!-- navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- end navbar-header -->
        <!-- navbar-top-links -->
        <ul class="nav navbar-top-links navbar-right login-section">
            <!-- main dropdown -->
            <li>Hello, Admin&nbsp;&nbsp;&nbsp;|</li>
            <li><a href="<?php echo $base_url; ?>admin/logout.php">Log out</a> </li>
        </ul>
        <!-- end navbar-top-links -->

    </nav>
    <!-- end navbar top -->

    <!-- navbar side -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <!-- sidebar-collapse -->
        <div class="sidebar-collapse">
            <!-- side-menu -->
            <ul class="nav" id="side-menu">

                <li>
                    <a href="<?php echo $base_url; ?>admin"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                </li>

                <li>
                    <a href="<?php echo $base_url; ?>admin/lythuyet"><i class="fa fa-flask fa-fw"></i>Lý Thuyết</a>
                </li>
                <li class="selected">
                    <a href="<?php echo $base_url; ?>admin/casestudy"><i class="fa fa-table fa-fw"></i>Case Study</a>
                </li>
                <li>
                    <a href="<?php echo $base_url; ?>admin/huongdan"><i class="fa fa-edit fa-fw"></i>Hướng Dẫn</a>
                </li>

            </ul>
            <!-- end side-menu -->
        </div>
        <!-- end sidebar-collapse -->
    </nav>
    <!-- end navbar side -->
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Case Study</h1>
            </div>
            <!--End Page Header -->
        </div>

        <div class="row">
            <!-- Welcome -->
            <div class="col-lg-12">
                <div class="text-right">
                    <a href="<?php echo $base_url; ?>admin/casestudy/create.php" class="btn btn-success">Add new row</a>
                </div>
                <br><br>
            </div>

            <?php
            $oCasestudy = new Casestudy();
            $aCasestudy = $oCasestudy->getAll();
            $n = $oCasestudy->getNumRows();
            ?>
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Có <?php echo $n; ?> dòng được tìm thấy.
                    </div>
                    <?php if($aCasestudy && $n > 0){ ?>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th width="10%">#</th>
                                    <th width="30%">Tiêu đề</th>
                                    <th width="59%">Video url</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                                <?php while($row = $aCasestudy->fetch_assoc()){ ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['title']; ?></td>
                                        <td><p><?php echo $row['video_url']; ?></p></td>
                                        <td><a href="<?php echo $base_url; ?>admin/casestudy/update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a> </td>
                                        <td><a href="<?php echo $base_url; ?>admin/casestudy/process.php?id=<?php echo $row['id']; ?>&processname=delete" onclick="if(!confirm('Are you sure to delete?')){ event.preventDefault(); };" class="btn btn-success btn_delete">Delete</a> </td>
                                    </tr>
                                <?php } ?>
                            </table>

                        </div>

                    <?php } ?>
                </div>
            </div>
            <!--end  Welcome -->
        </div>

    </div>
    <!-- end page-wrapper -->

</div>
<!-- end wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="../../resource/plugins/jquery-1.10.2.js"></script>
<script src="../../resource/plugins/bootstrap/bootstrap.min.js"></script>
<script src="../../resource/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../resource/plugins/pace/pace.js"></script>
<script src="../../resource/js/siminta.js"></script>
<!-- Page-Level Plugin Scripts-->
<script src="../../resource/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="../../resource/plugins/morris/morris.js"></script>
<script src="../../resource/js/dashboard-demo.js"></script>

</body>

</html>
