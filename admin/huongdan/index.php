<?php
session_start();
include_once '../../config/config.php';
include_once '../../core/database.php';
include_once '../../model/huongdan.php';
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
    <link href="../../resource/css/bootstrap.css" rel="stylesheet">
    <link href="../../resource/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../resource/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../../resource/css/style.css" rel="stylesheet" />
    <link href="../../resource/css/main-style.css" rel="stylesheet" />
    <link href="../../resource/css/hazard.css" rel="stylesheet" />

    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <!-- Page-Level CSS -->
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

                <li>
                    <a href="<?php echo $base_url; ?>admin"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                </li>

                <li>
                    <a href="<?php echo $base_url; ?>admin/lythuyet"><i class="fa fa-flask fa-fw"></i>Lý thuyết</a>
                </li>
                <li>
                    <a href="<?php echo $base_url; ?>admin/casestudy"><i class="fa fa-table fa-fw"></i>Case Study</a>
                </li>
                <li class="selected">
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
                <h1 class="page-header">Hướng dẫn</h1>
            </div>
            <!--End Page Header -->
        </div>

        <div class="row">

            <?php
            $isUpdate = false;
            $oHuongdan = new Huongdan();
            $n = $oHuongdan->getNumRows();
            $aHuongdan = $oHuongdan->getAll();
            $row = null;
            if($n > 0){
                $row = $aHuongdan->fetch_assoc();
                $isUpdate = true;
            }
            ?>

            <div class="col-lg-12">

                <form role="form" method="post" action="process.php" enctype="multipart/form-data">
                    <input type="hidden" name="processname" value="<?php if($isUpdate){ echo 'update'; }else{ echo 'insert'; } ?>" />
                    <input type="hidden" name="id" value="<?php if(!$isUpdate){ echo '-1'; }else{ echo $row['id']; } ?>" />
                    <label for="title">Tiêu đề</label>
                    <input type="text" class="form-control" name="title" value="<?php if($n>0){ echo $row['title']; } ?>" />

                    <br>
                    <label for="content">Nội dung</label>
                    <textarea rows="10" name="content" id="summernote" class="form-control">
                          <?php if($isUpdate){ echo stripslashes($row['content']); } ?>
                    </textarea>

                    <input type="submit" onclick="showMarkup()" class="btn btn-success" value="<?php if($isUpdate){ echo 'Update'; }else{ echo 'Insert'; } ?>" />
                </form>

                <script>

                    function showMarkup(){
                        var markupStr = $('#summernote').summernote('code');
                        $('textarea[name=content]').html(markupStr);
                    }

                </script>
                <br><br><br>&nbsp;

            </div>

            <br><br>
            <script>

                $(document).ready(function() {

                    $('#summernote').summernote({
                        height: 800
                    });

                });

            </script>

            <!--end  Welcome -->
        </div>

    </div>
    <!-- end page-wrapper -->

</div>
<!-- end wrapper -->

</body>

</html>
