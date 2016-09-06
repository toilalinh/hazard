<?php
session_start();
if(!isset($_SESSION['chon_game'])){
    $_SESSION['chon_game'] = 'game-7';
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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">

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
        <div class="game-wrapper" id="step3">
            <div id="lst-cars">
                <div id="lst-game">
                     <div id="game-1" class="lst-game-item <?php if($_SESSION['chon_game']=='game-1'){ echo 'active'; }else{ echo 'inactive'; } ?>" style="background-image: url('../resource/images/game_item_01.png');" >
                          <div class="lst-game-item-title">lái xe đường trường</div>
                          <div class="lst-game-item-unit">01</div>
                         <img class="active-foreground-game" src="../resource/views/images/game_item_active_foreground.png" />
                     </div>
                    <div id="game-2" class="lst-game-item <?php if($_SESSION['chon_game']=='game-2'){ echo 'active'; }else{ echo 'inactive'; } ?>" style="background-image: url('../resource/images/game_item_02.png');">
                        <div class="lst-game-item-title">đường rừng</div>
                        <div class="lst-game-item-unit">02</div>
                        <img class="active-foreground-game" src="../resource/views/images/game_item_active_foreground.png" />
                    </div>
                    <div id="game-3" class="lst-game-item <?php if($_SESSION['chon_game']=='game-3'){ echo 'active'; }else{ echo 'inactive'; } ?>" style="background-image:url('../resource/images/game_item_03.png');">
                        <div class="lst-game-item-title">đi qua mưa bão</div>
                        <div class="lst-game-item-unit">03</div>
                        <img class="active-foreground-game" src="../resource/views/images/game_item_active_foreground.png" />
                    </div>
                    <div id="game-4" class="lst-game-item <?php if($_SESSION['chon_game']=='game-4'){ echo 'active'; }else{ echo 'inactive'; } ?>" style="background-image: url('../resource/images/game_item_04.png');">
                        <div class="lst-game-item-title">vượt đèo hải vân</div>
                        <div class="lst-game-item-unit">04</div>
                        <img class="active-foreground-game" src="../resource/views/images/game_item_active_foreground.png" />
                    </div>
                    <div id="game-5" class="lst-game-item <?php if($_SESSION['chon_game']=='game-5'){ echo 'active'; }else{ echo 'inactive'; } ?>" style="background-image: url('../resource/images/game_item_05.png');">
                        <div class="lst-game-item-title">xa lộ hà nội</div>
                        <div class="lst-game-item-unit">05</div>
                        <img class="active-foreground-game" src="../resource/views/images/game_item_active_foreground.png" />
                    </div>
                    <div id="game-6" class="lst-game-item <?php if($_SESSION['chon_game']=='game-6'){ echo 'active'; }else{ echo 'inactive'; } ?>" style="background-image: url('../resource/images/game_item_06.png');">
                        <div class="lst-game-item-title">đường dốc</div>
                        <div class="lst-game-item-unit">06</div>
                        <img class="active-foreground-game" src="../resource/views/images/game_item_active_foreground.png" />
                    </div>
                    <div id="game-7" class="lst-game-item <?php if($_SESSION['chon_game']=='game-7'){ echo 'active'; }else{ echo 'inactive'; } ?>" style="background-image: url('../resource/images/game_item_07.png');">
                        <div class="lst-game-item-title">lái trên cầu phú mỹ</div>
                        <div class="lst-game-item-unit">07</div>
                        <img class="active-foreground-game" src="../resource/views/images/game_item_active_foreground.png" />
                    </div>
                    <div id="game-8" class="lst-game-item <?php if($_SESSION['chon_game']=='game-8'){ echo 'active'; }else{ echo 'inactive'; } ?>" style="background-image: url('../resource/images/game_item_08.png');">
                        <div class="lst-game-item-title">xe trong thành phố</div>
                        <div class="lst-game-item-unit">08</div>
                        <img class="active-foreground-game" src="../resource/views/images/game_item_active_foreground.png" />
                    </div>
                </div>
            </div>
            <div id="action-btns">
                <table>
                    <tr>
                        <input type="hidden" name="base_url" value="<?php echo $base_url; ?>" />
                        <td class="left-btn"><button name="btn-left"><img id="left-btn" src="../resource/views/images/tro_ve_btn.png" /></button></td>
                        <td class="middle-btn"><img src="../resource/views/images/chon_game_text.png" /> </td>
                        <td class="right-btn"><button name="btn-right"><img id="right-btn" src="../resource/views/images/tiep_tuc_btn.png" /></button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.lst-game-item').hover(function(){
                if($(this).hasClass('inactive')){
                    $(this).css('opacity','1');
                }
            });

            $('.lst-game-item').mouseleave(function(){
                if($(this).hasClass('inactive')){
                    $(this).css('opacity','0.6');
                }
            });

            $('.lst-game-item').click(function(){
                $('.lst-game-item').removeClass('active');
                $('.lst-game-item').addClass('inactive');
                $(this).removeClass('inactive');
                $(this).addClass('active');
                var strChongame = $(this).attr('id');
                $.ajax({
                    url:'send.php',
                    method:'POST',
                    dataType:'json',
                    data: { chon_game: strChongame }
                });
            });

            $('button[name=btn-left]').click(function(){
                var url = $('input[name=base_url]').val() + 'frontend/step2.php';
                window.location.href = url;
            });

            $('button[name=btn-right]').click(function(){
                var url = $('input[name=base_url]').val() + 'frontend/step4.php';
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


