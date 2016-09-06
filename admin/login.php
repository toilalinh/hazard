<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Core CSS - Include with every page -->
    <link href="../resource/css/bootstrap.css" rel="stylesheet" />
    <link href="../resource/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../resource/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../resource/css/style.css" rel="stylesheet" />
    <link href="../resource/css/main-style.css" rel="stylesheet" />
    <link href="../resource/css/hazard.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../resource/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
</head>
<body  style="background-color: #000000">

   <div class="container-fluid">

       <div class="big-box">

           <div class="small-box" style="z-index:1000;width:400px;margin:auto;margin-top:120px;">
               <div class="panel panel-default">
                   <div class="panel-heading">Log in</div>
                   <div class="panel-body">
                       <p class="<?php if(!empty($_SESSION['sError'])){ echo 'error'; }else{ echo 'hidden'; } ?>"><?php if(!empty($_SESSION['sError'])){ echo $_SESSION['sError'];$_SESSION['sError']=''; } ?></p>
                       <br>
                       <form role="form" method="post" action="process.php">
                           <div class="row">
                               <div class="col-md-3">Username</div>
                               <div class="col-md-9"><input type="text" id="txt_username" name="username" class="form-control" required /> </div>
                           </div>
                           <br>
                           <div class="row">
                               <div class="col-md-3">Password</div>
                               <div class="col-md-9"><input type="password" id="txt_password" name="password" class="form-control" required /> </div>
                           </div>
                           <br>
                           <div class="row">
                               <div class="col-md-3">&nbsp;</div>
                               <div class="col-md-9"><input type="submit" value="Log in" class="btn btn-success" /> </div>
                           </div>
                           <br>
                       </form>
                   </div>
               </div>
           </div>

       </div>

   </div>
   <script src="../resource/plugins/jquery-1.10.2.js"></script>
    <script>

    </script>
</body>
</html>

