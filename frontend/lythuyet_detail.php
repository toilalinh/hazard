<?php
include_once '../config/config.php';
include_once '../core/database.php';
include_once '../model/lythuyet.php';
$id = $_GET['id'];
$oLythuyet = new Lythuyet();
$result = $oLythuyet->getById($id);
$row_lythuyet = $result->fetch_assoc();
$result = $oLythuyet->getRelated($id);
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
<body style="background-color:#e8e5e5">

<div class="container-fluid">

    <div id="header">
        <div id="logo"><img src="../resource/views/images/hazard_slogun.png" /> </div>
        <div id="navigation">
            <ul>
                <li><a href="<?php echo $base_url; ?>">TRANG CHỦ</a> </li>
                <li><a href="<?php echo $base_url; ?>frontend/lythuyet.php?p=1" class="selected">LÝ THUYẾT</a> </li>
                <li><a href="<?php echo $base_url; ?>frontend/casestudy.php?p=1">CASE STUDY</a> </li>
                <li><a href="<?php echo $base_url; ?>frontend/step1.php">GAME</a> </li>
                <li><a href="#">HƯỚNG DẪN</a> </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="wrapper-middle">

        <div class="lythuyet-detail">

            <div class="bv-lythuyet">
                <h3 style="text-transform: uppercase;"><?php echo $row_lythuyet['title']; ?></h3>
                <p><img src="../resource/views/images/calendar-icon.png" />&nbsp;&nbsp;<?php echo $row_lythuyet['date_change']; ?> </p>
                <div>
                   <?php echo $row_lythuyet['content']; ?>
                </div>
            </div>
            <hr>
            <div class="box-buttons-lythuyet">
                <div class="tags-button">
                    <p>THẺ BÀI VIẾT</p>
                    <div class="tags">
                        <p style="">Cach lai xe</p>
                        <p>huong dan</p>
                    </div>
                </div>

                <div class="social-button">
                    <p class="share"><span style="font-size:22px;font-weight:bold;">746</span> CHIA SẺ</p>
                    <div class="socials-button">
                        <img src="../resource/views/images/facebook-share-icon.png" />
                        <img src="../resource/views/images/google-share-icon.png" />
                        <img src="../resource/views/images/in-share-icon.png" />
                        <img src="../resource/views/images/tweeter-share-icon.png" />

                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="related-lythuyet">
                <img src="../resource/views/images/relative-article.png" />
                <div class="lst">

                    <?php while($row = $result->fetch_assoc()){ ?>
                        <div>
                            <img src="../resource/images/<?php if(empty($row['img_thumbnail'])){ echo 'no-image.png'; }else{ echo $row['img_thumbnail']; } ?>" />
                            <p class="title-post"><a style="color:#7a7979;" href="<?php echo $base_url; ?>frontend/lythuyet_detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a> </p>
                            <p class="date-post"><?php echo $row['date_change']; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="clearfix"></div>
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


