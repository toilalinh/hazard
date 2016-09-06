<?php
include_once '../config/config.php';
include_once '../core/database.php';
include_once '../model/casestudy.php';
include_once '../helper/hazard_helper.php';
$oCasestudy = new Casestudy();
$curr_page = $_GET['p'];
if(!isset($curr_page) || empty($curr_page)){
    $curr_page = 1;
}
$num_rows = $oCasestudy->getNumRows();
$pages = ceil($num_rows/$limit);
$arrCasestudy = $oCasestudy->getRecordByPage($curr_page,$limit);
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

    <script>
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                auto: true,
                pager:false,
                controls:true
            });
        });
    </script>
</head>
<body>

<div class="container-fluid">

    <div id="header">
        <div id="logo"><img src="../resource/views/images/hazard_slogun.png" /> </div>
        <div id="navigation">
            <ul>
                <li><a href="<?php echo $base_url; ?>">TRANG CHỦ</a> </li>
                <li><a href="<?php echo $base_url; ?>frontend/lythuyet.php?p=1">LÝ THUYẾT</a> </li>
                <li><a href="#" class="selected">CASE STUDY</a> </li>
                <li><a href="<?php echo $base_url; ?>frontend/step1.php">GAME</a> </li>
                <li><a href="#">HƯỚNG DẪN</a> </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>

    <ul class="bxslider">
        <li><img src="../resource/images/lythuyet-banner-1.png" /></li>
        <li><img src="../resource/images/lythuyet-banner-2.png" /></li>
        <li><img src="../resource/images/lythuyet-banner-3.png" /></li>
        <li><img src="../resource/images/lythuyet-banner-4.png" /></li>
    </ul>
    <div class="clearfix">
    </div>

    <div class="wrapper-middle">

        <div class="wrapper-lythuyet">

            <?php while($row = $arrCasestudy->fetch_assoc()){ ?>
                <div class="lythuyet-box">
                    <div class="lythuyet-container" style="margin-top:20px;">
                        <img src="<?php echo getThumbnailFromYoutubeLink($row['video_url']); ?>" />
                        <div class="tomtat">
                            <h4 style="text-transform: uppercase;"><?php echo $row['title']; ?></h4>
                            <p><img src="../resource/views/images/calendar-icon.png" />&nbsp;&nbsp;<?php echo $row['date_change']; ?> </p>
                            <p class="lythuyet-tomtat"><?php echo $row['summary']; ?></p>
                            <a href="<?php echo $base_url; ?>frontend/casestudy_detail.php?id=<?php echo $row['id']; ?>"><img src="../resource/views/images/read-more-button.png" /></a>

                        </div>
                        <div class="clearfix"></div>
                        <hr>
                    </div>
                </div>
            <?php } ?>

            <div class="clearfix"></div>

            <div style="text-align: center; margin-bottom:20px;">
                <?php if($pages>1){ ?>
                    <ul class="phan-trang">
                        <?php for($i=1;$i<=$pages;$i++){ ?>
                            <li><a href="<?php echo $base_url; ?>frontend/casestudy.php?p=<?php echo $i; ?>" class="<?php if($curr_page==$i){ echo "selected"; } ?>"><?php echo $i; ?></a> </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>

        </div>

    </div>

    <div id="" class="footer-others">
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


