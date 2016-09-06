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

    <link href="../resource/css/bxslider.css" rel="stylesheet" />
    <link href="../resource/css/hazard.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Prompt">

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
        <div class="game-wrapper" id="playgame">
             <table>
                 <tr>
                     <td class="game-screen">
                         <iframe src="playgame.html"></iframe>
                         <div id="game-control">
                             <div class="left-control">
                                 <img src="../resource/views/images/flag_green.png" />
                                 <img src="../resource/views/images/flag_green.png" />
                                 <img src="../resource/views/images/flag_red.png" />
                                 <img src="../resource/views/images/flag_red.png" />
                                 <img src="../resource/views/images/flag_green.png" />
                                 <img src="../resource/views/images/flag_gray.png" />
                                 <img src="../resource/views/images/flag_gray.png" />
                                 <img src="../resource/views/images/flag_gray.png" />
                                 <img src="../resource/views/images/flag_gray.png" />
                             </div>
                             <div class="right-control">
                                 <img src="../resource/views/images/zoom_btn.png" />
                             </div>
                             <div class="clearfix">&nbsp;</div>
                         </div>
                     </td>
                     <td class="game-info">
                         <div class="game-info-content">
                             <p class="game-title">CLIP : XE TRÊN CẦU PHÚ MỸ</p>
                             <div class="game-notice">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et efficitur tortor, ut imperdiet mi. In ultrices arcu feugiat, hendrerit magna quis, consequat sapien. Morbi eu est sem.</p>

                                 <p>Quisque non nunc eleifend, tristique elit quis, fringilla odio.</p>
                             </div>
                             <p class="game-seperate"></p>
                             <div class="game-point">
                                 <p><span class="game-point-text">SỐ LỖI CẦN VƯỢT QUA</span><span class="error-point">3/4</span></p>
                                 <p><span class="game-point-text">ĐIỂM HIỆN TẠI</span><span class="current-point">5/20</span></p>
                                 <p><span class="game-point-text">TỔNG ĐIỂM</span><span class="total-point">60/100</span></p>
                             </div>
                         </div>
                         <div class="game-info-button">
                             <input type="hidden" name="base_url" value="<?php echo $base_url; ?>" />
                             <button name="playanother"><img src="../resource/views/images/stop_n_selected_another_btn.png" style="width:100%;height:45px;" /> </button>
                         </div>
                     </td>
                 </tr>
             </table>
        </div>
    </div>

    <script>

        $(document).ready(function(){

            $('button[name=playanother]').click(function(){
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


