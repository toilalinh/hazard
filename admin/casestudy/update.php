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
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <link href="../../resource/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />


    <!-- Core Scripts - Include with every page -->

    <script src="../../resource/js/jquery.min.js"></script>
    <script src="../../resource/js/bootstrap.min.js"></script>
    <script src="../../resource/js/summernote.js"></script>
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

                <li class="selected">
                    <a href="<?php echo $base_url; ?>admin"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                </li>

                <li>
                    <a href="<?php echo $base_url; ?>admin/lythuyet"><i class="fa fa-flask fa-fw"></i>Lý thuyết</a>
                </li>
                <li class="selected">
                    <a href="<?php echo $base_url; ?>admin/casestudy"><i class="fa fa-table fa-fw"></i>Case Study</a>
                </li>
                <li>
                    <a href="<?php echo $base_url; ?>admin/huongdan"><i class="fa fa-edit fa-fw"></i>Hướng dẫn</a>
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

            <div class="col-lg-12">

                <?php
                    $oCasestudy = new Casestudy();
                    $id = $_GET['id'];
                    $aCasestudy = $oCasestudy->getById($id);
                    $row = $aCasestudy->fetch_assoc();
                ?>
                <form action="process.php" method="post" role="form">
                    <input type="hidden" name="processname" value="update" />
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <table class="table table-bordered">
                        <tr>
                            <td>Tiêu đề</td>
                            <td><input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" /> </td>
                        </tr>
                        <tr>
                            <td>Video url</td>
                            <td><input type="text" name="video_url" class="form-control" value="<?php echo $row['video_url']; ?>" /> </td>
                        </tr>
                        <tr>
                            <td>Tóm tắt</td>
                            <td>
                                <textarea rows="3" name="summary" class="form-control"><?php echo $row['summary']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Nội dung</td>
                            <td>
                                <textarea rows="10" name="content" id="summernote" class="form-control"><?php echo $row['content']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <a href="<?php echo $base_url; ?>admin/casestudy" class="btn btn-success">Cancel</a> &nbsp;
                                <input type="submit" onclick="showMarkup()" value="Update" class="btn btn-success" />
                            </td>
                        </tr>
                    </table>

                </form>

            </div>

            <!--end  Welcome -->
        </div>

        <script>

            function showMarkup(){
                var markupStr = $('#summernote').summernote('code');
                $('textarea[name=content]').html(markupStr);
            }

        </script>
        <br><br><br>&nbsp;

    </div>
    <!-- end page-wrapper -->

</div>
<!-- end wrapper -->
<script>

    $(document).ready(function() {

        $('#summernote').summernote({
            height: 500
        });

    });

</script>

<!-- Core Scripts - Include with every page -->
<script src="../../resource/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../resource/plugins/pace/pace.js"></script>
<script src="../../resource/js/siminta.js"></script>
<!-- Page-Level Plugin Scripts-->
<script src="../../resource/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="../../resource/plugins/morris/morris.js"></script>
<script src="../../resource/js/dashboard-demo.js"></script>

</body>

</html>
