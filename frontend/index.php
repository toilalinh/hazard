<?php
include_once '../config/config.php';

$dir    = '../resource/background-home';
$fileSystemIterator = new FilesystemIterator($dir);

$aBackgroundImg = array();
foreach ($fileSystemIterator as $fileInfo){
    $temp = $fileInfo->getFilename();
    if(strpos($temp, '.png') !== false || strpos($temp, '.jpg') !== false || strpos($temp, '.jpeg') !== false){
        $aBackgroundImg[] = $temp;
    }
}

$bg_img_filename = '';
if(count($aBackgroundImg)>0){
      $bg_img_filename = $aBackgroundImg[0];
}

if(empty($bg_img_filename)){
    $bg_path = '../resource/views/images/hazard_bg.png';
}else{
    $bg_path = '../resource/background-home/' . $bg_img_filename;
}

//get logos
$fileSystemIterator = new FilesystemIterator('../resource/logos');

$aLogo = array();
$cnt = 1;
foreach ($fileSystemIterator as $fileInfo){
    if($cnt>10){
        break;
    }
    $temp = $fileInfo->getFilename();
    if(strpos($temp, '.png') !== false || strpos($temp, '.jpg') !== false || strpos($temp, '.jpeg') !== false){
        $aLogo[] = $temp;
        $cnt++;
    }
}

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

<div class="container-fluid" id="homepage" style="background:url('<?php echo $bg_path; ?>') no-repeat center center scroll; background-size:cover;">

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
                    <button name="luyen_ngay" class="btn-hazard">Luyện ngay &gt;&gt;</button>

                </div>

            </div>

            <div class="clock-right">
                <img class="clock" src="../resource/views/images/clock_bg.png" />
                <div class="clock-content">
                    <img class="icon" src="../resource/views/images/car-icon.png" />
                    <p class="title">THỰC HÀNH</p>
                    <div class="paragraph">If your image is an SVG, which is a variable-sized vector image format you can have the expansion.</div>
                    <button name="lai_ngay" class="btn-hazard">Lái ngay &gt;&gt;</button>
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

        <?php if(count($aLogo)>0){ ?>
            <div class="sponsor">
                <p>Đơn vị đồng hành</p>
                <div class="sponsor-logos">
                    <?php foreach($aLogo as $logo){ ?>
                        <img src="../resource/logos/<?php echo $logo; ?>" />
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

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


