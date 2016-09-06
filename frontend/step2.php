<?php
session_start();
if(!isset($_SESSION['chon_xe'])){
    $_SESSION['chon_xe'] = 'car-2';
}
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


    <div class="content-wrapper">
        <div class="game-wrapper" id="step2">
            <div id="lst-cars">
                <table>
                    <tr>
                        <td id="car-1" class="lst-cars-item <?php if($_SESSION['chon_xe']=='car-1'){ echo 'active'; }else{ echo 'inactive'; } ?>" style="background: transparent url('../resource/views/images/moto_bg.png') no-repeat; background-size:cover;">
                            <span>XE DU LỊCH</span>
                            <img class="active-foreground" src="../resource/views/images/active_foreground.png" />
                        </td>
                        <td id="car-2" class="lst-cars-item <?php if($_SESSION['chon_xe']=='car-2'){ echo 'active'; }else{ echo 'inactive'; } ?>" style="background: transparent url('../resource/views/images/truck_bg.png') no-repeat; background-size:cover;">
                            <span>XE TẢI</span>
                            <img class="active-foreground" src="../resource/views/images/active_foreground.png" />
                        </td>
                        <td id="car-3" class="lst-cars-item <?php if($_SESSION['chon_xe']=='car-3'){ echo 'active'; }else{ echo 'inactive'; } ?>" style="background: transparent url('../resource/views/images/xe_khach_bg.png') no-repeat; background-size:cover;">
                            <span>XE KHÁCH</span>
                            <img class="active-foreground" src="../resource/views/images/active_foreground.png" />
                        </td>
                    </tr>
                </table>
            </div>
            <div id="action-btns">
                <table>
                    <tr>
                        <input type="hidden" name="base_url" value="<?php echo $base_url; ?>" />
                        <td class="left-btn"><button name="btn-left"><img id="left-btn" src="../resource/views/images/tro_ve_btn.png" /> </button></td>
                        <td class="middle-btn"><img src="../resource/views/images/chon_loai_xe.png" /> </td>
                        <td class="right-btn"><button name="btn-right"><img id="right-btn" src="../resource/views/images/tiep_tuc_btn.png" /></button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.lst-cars-item').hover(function(){
                if($(this).hasClass('inactive')){
                    $(this).css('opacity','1');
                }
            });

            $('.lst-cars-item').mouseleave(function(){
                if($(this).hasClass('inactive')){
                    $(this).css('opacity','0.6');
                }
            });

            $('.lst-cars-item').click(function(){
                $('.lst-cars-item').removeClass('active');
                $('.lst-cars-item').addClass('inactive');
                $(this).removeClass('inactive');
                $(this).addClass('active');
                var strChonXe = $(this).attr('id');
                $.ajax({
                    url:'send.php',
                    method:'POST',
                    dataType:'json',
                    data: { chon_xe: strChonXe }
                });
            });

            $('button[name=btn-left]').click(function(){
                var url = $('input[name=base_url]').val() + 'frontend/step1.php';
                window.location.href = url;
            });

            $('button[name=btn-right]').click(function(){
                var url = $('input[name=base_url]').val() + 'frontend/step3.php';
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


