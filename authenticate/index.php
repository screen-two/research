<?php session_start(); ?>
<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js"></script>
  <script type="text/javascript" src="js/twitterfeed.js"></script>
  <script src="js/modernizr.custom.js"></script>
  
  <script>
  $(document).ready(function(){
  $("#makeitmove").draggable( {containment: "#divcontainer", scroll: false} );
  });
  
  </script>
  <link href="./css/styles.css" rel="stylesheet" type="text/css" />
  <link href="./css/reset.css" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
  <title>Screen&sup2;</title>
  </head>

  <body>
<header>
    <div id="header-left">
    <div id="menu" class="main-navigation cbp-spmenu-push">
        <div class="menu-icon">
        <button id="showLeft"><img src="./images/menu-icon.png" alt="menu-icon" /></button>
      </div>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        
        <?php 
        if(!empty($_SESSION['username'])){  ?>
            <?php 
            require_once('user-detail.php');
        }
        ?>
        
        <ul class="menu-items">
            <li><a href="#"><img src="images/home.png" width="61" height="62">Home</a></li> 
            <li><a href="#"><img src="images/notification.png" width="63" height="59">Notifications</a></li> 
            <li><a href="#"><img src="images/trends.png" width="54" height="55">Trends</a> </li>
            <li><a href="#"><img src="images/settings.png" width="53" height="52">Settings </a></li>
        </ul>
        <!-- END list menu-items -->
        
        </nav>
        <!-- END nav cbp-spmenu-s1 -->
        
      </div>
    <!-- END main-navigation --> 
    
    
  </div>
    <!-- END header-left --> 
    <!--<div class="logo"><img src="images/s2.png" alt="Screen&sup2;" /></div><!-- END logo-->
    
    <div id="header-right">
    <ul class="home-icons" >
        <li class="compose-tweet"><img src="./images/twitter-icon.png" alt="twitter-bird" /></li>
        <li class="add-feed"><img src="./images/add.png" alt="twitter-bird" /></li>
      </ul>
    <!-- END home-icons-->
    
    <div class="clear"></div>
  </div>
    <!-- END header-right --> 
    
  </header>
<!-- END header -->
<?php 



if(!empty($_SESSION['username'])){  ?>

    <h2>OHai <?='@' . $_SESSION['username']; ?></h2> 
<?php 
} else {
 ?>
<div class="login-wrapper">
    <h3>Connect with your twitter account to get started</h3>
    <div class="twitter-login">
    <div class="twitter-login-icon"><img src="./images/twitter-icon.png" alt="twitter-bird" /></div>
    <form action="twitter_login.php" method="get">
        <input type="submit" class="twitter-submit" value="connect with twitter" >
      </form>
  </div>
    <!-- END login-with-twitter --> 
  </div>
<!-- END login-wrapper -->

<div class="clear"></div>
<?php } ?>
<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie --> 
<script src="js/classie.js"></script> 
<script>
              var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                  body = document.body;
  
              showLeft.onclick = function() {
                  classie.toggle( this, 'active' );
                  classie.toggle( menuLeft, 'cbp-spmenu-open' );
                  disableOther( 'showLeft' );
              };
              
      </script>
</body>
</html>