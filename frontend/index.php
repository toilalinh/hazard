<?php
include_once '../config/config.php';
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
    <link href="../resource/css/hazard.css" rel="stylesheet" />

    <script src="../resource/plugins/jquery-1.10.2.js"></script>
    <script src="../resource/plugins/bootstrap/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid" id="homepage">

    <div id="header">
        <div id="logo"><img src="../resource/views/images/hazard_slogun.png" /> </div>
        <div id="navigation">
            <ul>
                <li><a href="#" class="selected">TRANG CHỦ</a> </li>
                <li><a href="<?php echo $base_url; ?>frontend/lythuyet.php?p=1">LÝ THUYẾT</a> </li>
                <li><a href="<?php echo $base_url; ?>frontend/casestudy.php?p=1">CASE STUDY</a> </li>
                <li><a href="<?php echo $base_url; ?>frontend/step1.php">GAME</a> </li>
                <li><a href="#">HƯỚNG DẪN</a> </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="content">
        <input type="hidden" name="base_url" value="<?php echo $base_url; ?>" />
        <div class="wrapper">
            <div class="clock-left">
                <img class="clock" src="../resource/views/images/clock_bg.png" />
                <div class="clock-content">
                    <img class="icon" src="../resource/views/images/book-icon.png" />
                    <p class="title">LÝ THUYẾT</p>
                    <div class="paragraph">If your image is an SVG, which is a variable-sized vector image format you can have the expansion.</div>
                    <button name="luyen_ngay"><img class="btn-action" src="../resource/views/images/luyen-ngay-button.png" /></button>
                </div>

            </div>

            <div class="clock-right">
                <img class="clock" src="../resource/views/images/clock_bg.png" />
                <div class="clock-content">
                    <img class="icon" src="../resource/views/images/car-icon.png" />
                    <p class="title">THỰC HÀNH</p>
                    <div class="paragraph">If your image is an SVG, which is a variable-sized vector image format you can have the expansion.</div>
                    <button name="lai_ngay"><img class="btn-action" src="../resource/views/images/lai-ngay-icon.png" /></button>
                </div>

            </div>
            <br>
            <div class="clearfix"></div>


        </div>

        <script>

            $(document).ready(function(){

                var url = $('input[name=base_url]').val();
                $('button[name=luyen_ngay]').click(function(){
                    window.location.href = url + 'frontend/lythuyet.php?p=1';
                });

                $('button[name=lai_ngay]').click(function(){
                    window.location.href = url + 'frontend/step1.php';
                });

            });

        </script>

        <div class="sponsor">
            <p>Đơn vị đồng hành</p>
            <div class="sponsor-logos">
                <img src="../resource/logos/Daewoo_logo.png" width="60px" />
                <img src="../resource/logos/Honda_logo.png" width="60px" />
                <img src="../resource/logos/Ford_logo.png" width="100px" height="45px" />
                <img src="../resource/logos/Audi-Logo-old.png" />
                <img src="../resource/logos/suzuki_logo.png" />
                <img src="../resource/logos/Toyota_logo.png" />
                <img src="../resource/logos/bmw-logo.png" />
                <img src="../resource/logos/Mazda_logo.png" />
                <img src="../resource/logos/Mitsubishi_logo.png" />
                <img src="../resource/logos/lexus_logo.png" width="100px" />
                <img src="../resource/logos/Volkswagen_Logo.png" />
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="inner-footer">
            <img class="left" src="../resource/views/images/car-icon-footer.png" />
            <p class="left">&copy; Bản quyền BenhVienOto.vn Giấy Phép PCI số 47/GP</p>
            <div class="icons-footer">
                <button><img src="../resource/views/images/envelope-icon.png" /></button>&nbsp;
                <button><img src="../resource/views/images/facebook-logo-button.png" /></button>&nbsp;
                <button><img src="../resource/views/images/youtube-symbol.png" /></button>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>


</body>

</html>


