<?php
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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">

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
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="content-wrapper">
        <div class="game-wrapper" id="step4">
            <div id="game-rule">
                 <div class="game-rule-box">
                        <div class="game-rule-img">

                        </div>


                         <div class="game-rule-text">

                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et efficitur tortor, ut imperdiet mi. In ultrices arcu feugiat, hendrerit magna quis, consequat sapien. Morbi eu est sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse at placerat ante.</p>
                             <p>Vestibulum tempor vehicula euismod. Vivamus arcu dolor, gravida id mi pellentesque, posuere vulputate mi. Sed at imperdiet nunc. Integer sodales venenatis sem, vel euismod odio pharetra a. </p>

                         </div>

                 </div>
            </div>
            <div id="action-btns">
                <table>
                    <tr>
                        <input type="hidden" name="base_url" value="<?php echo $base_url; ?>" />
                        <td class="left-btn"><button name="btn-left">&lt;&lt; Trở về</button></td>
                        <td class="middle-btn"><img src="../resource/views/images/game_rule_text.png" /> </td>
                        <td class="right-btn"><button name="btn-right">Tiếp tục &gt;&gt;</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function(){
            $('button[name=btn-left]').click(function(){
                var url = $('input[name=base_url]').val() + 'frontend/step3.php';
                window.location.href = url;
            });

            $('button[name=btn-right]').click(function(){
                var url = $('input[name=base_url]').val() + 'frontend/play.php';
                window.location.href = url;
            });

        });

    </script>

    <div class="clearfix"></div>
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


