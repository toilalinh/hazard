<?php
session_start();
include_once '../config/config.php';
include_once '../core/database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hazard</title>
    <!-- Core CSS - Include with every page -->
    <link href="../resource/css/bootstrap.css" rel="stylesheet" />
    <link href="../resource/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link href="../resource/css/bxslider.css" rel="stylesheet" />
    <link href="../resource/css/hazard.css" rel="stylesheet" />

    <script src="../resource/plugins/jquery-1.10.2.js"></script>
    <script src="../resource/js/jquery.bxslider.min.js"></script>
    <script src="../resource/plugins/bootstrap/bootstrap.min.js"></script>


</head>
<body>

<div class="container-fluid">

    <div class="wrapper-header">
        <div id="header">
            <div id="logo"><img src="../resource/views/images/hazard_slogun.png" /> </div>
            <div id="navigation">
                <ul>
                    <li><a href="<?php echo $base_url; ?>">TRANG CHỦ</a> </li>
                    <li><a href="<?php echo $base_url; ?>frontend/lythuyet.php?p=1">LÝ THUYẾT</a> </li>
                    <li><a href="<?php echo $base_url; ?>frontend/casestudy.php?p=1">CASE STUDY</a> </li>
                    <li><a href="<?php echo $base_url; ?>frontend/step1.php" class="selected">GAME</a> </li>
                    <li><a href="#">HƯỚNG DẪN</a> </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="clearfix"></div>


        <input type="hidden" name="base_url" value="<?php echo $base_url; ?>" />
        <div class="content-wrapper">
            <div class="game-wrapper" id="step1">
                <div id="nhapten"><img src="../resource/views/images/enter_name_text.png" /> </div>
                <div><input type="text" name="input_username" value="<?php if(isset($_SESSION['input_username'])){ echo $_SESSION['input_username']; }else{ echo ''; } ?>" /> </div>
                <button id="btn-begin">BẮT ĐẦU &gt;&gt;</button>
            </div>
        </div>

        <script>

            $(document).ready(function(){

                $('#btn-begin').click(function(){
                    var str = $('input[name=input_username]').val();
                    $.ajax({
                        url:'send.php',
                        method:'POST',
                        dataType:'json',
                        data: { input_username: str }
                    });
                    var url = $('input[name=base_url]').val();
                    url = url + 'frontend/step2.php';
                    window.location.href = url;
                });

            });

        </script>


        <div id="footer" class="footer-others">
            <div class="inner-footer">
                <img class="left" src="../resource/views/images/car-icon-footer.png" />
                <p class="left">&copy; Bản quyền BenhVienOto.vn Giấy Phép PCI số 47/GP</p>
                <div class="icons-footer">
                    <img src="../resource/views/images/envelope-icon.png" />&nbsp;
                    <img src="../resource/views/images/facebook-logo-button.png" />&nbsp;
                    <img src="../resource/views/images/youtube-symbol.png" />
                </div>
                <div class="clearfix"></div>
            </div>
        </div>




</div>


</body>

</html>


