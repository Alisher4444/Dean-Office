<?php
include 'dbconnect.php';
?>
<?php
session_start();
include_once 'dbconnect.php';
$s=$_SESSION['users'];
if(isset($_SESSION['users']))
{
  header('Location: chat.php');


}
  $c=null;
  if($_SESSION['counter']){
    $c=$_SESSION['counter']+=1;
  }else{
    $c=$_SESSION['counter']+=1;
  }

$res=mysql_query("SELECT * FROM users WHERE user_id='$s'");
//$userRow=mysql_fetch_array($res);
$cookie_name="loggedin";

?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dean Office</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">

    <link rel="stylesheet" href="css/style.css">
    <script>
    function ajax(){

      var req = new XMLHttpRequest();
      req.onreadystatechange = function(){

        if(req.readyState == 4 && req.status == 200){
          document.getElementById('chat2').innerHTML = req.responseText;
        }

      }

      req.open('GET','dialg.php',true);
      req.send();


    }
    setInterval(function(){ajax()},1000);
  </script>
<style>


.form{
	position: relative;
	left: 550px;
	top: 0px;
	margin-bottom: 100px;


}
.form input[type="text"]{
	display:block;
	width:20%;
	height:34px;
	padding:6px 12px;
	font-size:14px;
	line-height:1.42857143;
	color:white;
	background-color:#ccc;
	background-image:none;
	border:2px solid #78909C;
	border-radius:3px;
	margin-bottom: 10px;
	opacity: .6;
	padding-left: 30px;
	font-weight: 600;

}

.form input[type="email"]{
	display:block;
	width:20%;
	height:34px;
	padding:6px 12px;
	font-size:14px;
	line-height:1.42857143;
	color:white;
	background-color:#ccc;
	background-image:none;
	border:2px solid #78909C;
	border-radius:3px;
	margin-bottom: 10px;
	opacity: .6;
	background:url(../store/email.png) no-repeat scroll 4px 4px;
	background-size: 23px;
	padding-left: 30px;
	font-weight: 600;

}

.form input[type="password"]{
	display:block;
	width:20%;
	position: relative;
	bottom: 10px;
	height:34px;
	padding:6px 12px;
	font-size:14px;
	line-height:1.42857143;
	color:white;
	background-color:#ccc;
	background-image:none;
	border: 2px solid #78909C;
	border-radius:3px;
	margin-bottom: 10px;
	opacity: .6;
	background-size: 23px;
	padding-left: 30px;
	font-weight: 600;
}

.form input[type="submit"]{
	position: relative;
    background-color: rgba(255,255,255,0.1); /* Green */
    border: none;
    bottom: 5px;
    color: white;
    padding: 5px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 3px;
    width: 270px;
    height: 30px;
    text-transform: uppercase;
    font-weight: 600;
}


.form input[type="submit"]{
    color: #F50057;
    border: 2px solid #F50057;
}


</style>
</head>

<body onload="ajax();"  class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


  <header class="main-header">


    <a href="personal.php" class="logo">

      <span class="logo-mini"><b>D</b>O</span>

      <span class="logo-lg"><b>Dean</b>Office</span>
    </a>


    <nav class="navbar navbar-static-top" role="navigation">

      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown messages-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>

                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left">

                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>

                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>

                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>

                </ul>

              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>

          <li class="dropdown notifications-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>

                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"> <?php if(isset($_COOKIE[$cookie_name])){
                      $cookie_value=$_COOKIE[$cookie_name];
                        echo "$cookie_value";} ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php if(isset($_COOKIE[$cookie_name])){
                      $cookie_value=$_COOKIE[$cookie_name];
                        echo "$cookie_value";} ?> - Dean of IT-University
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="personal.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">

    <section class="sidebar">

      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php if(isset($_COOKIE[$cookie_name])){
                      $cookie_value=$_COOKIE[$cookie_name];
                        echo "$cookie_value";} ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Dean</a>
        </div>
      </div>

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>News</span></a></li>
        <li><a href="chat.php"><i class="fa fa-link"></i> <span>Conversations</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Sending Files</a></li>
            <li><a href="addingStaff.php">Adding Staff</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>


  <div class="content-wrapper">

    <section class="content">




    <div class="display">
    <form action="insert.php"  method="post" >
    <p>
      <label  for="fname" > News name : </label>
      <input type="text" name="username"  required placeholder="Enter your name" id="inputid"/>
    </p>
    <p>
      <label  for="lname" > Email ID : </label>
      <input type="email" name="usermail"  required placeholder="Enter your Email" id="inputid" />
    </p>
    <p>
      <label for="lname"> News text : </label>
      <input type="text" name="usermobile" required placeholder="Enter your mobile number"  />
    </p>

    <p>
      <input type="submit" name="send" value="Submit"  />
    </p>


    </form>
    </div>
    <?php include('view.php'); ?>
    </section>
        <!-- /.content -->
      </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="http://profit-blog.kz/">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>


        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>


      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/nicescroll/3.5.4/jquery.nicescroll.js'></script>

            <script src="js/index.js"></script>

</body>
</html>
