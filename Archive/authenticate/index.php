<?php session_start(); ?>
<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
  
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type="text/javascript" src="js/twitterfeed.js"></script>
  <script src="js/modernizr.custom.js"></script>
  
  <script>

  
  </script>
  <link href="./css/styles.css" rel="stylesheet" type="text/css" />
  <link href="./css/reset.css" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
  <title>Screen&sup2;</title>
  </head>

  <body>
<header>
    <div id="header-left">
    
        <div class="menu-icon">
        <button id="showLeft"></button>
      	</div>
      <!-- END menu-icon--> 

  </div>
    <!-- END header-left --> 
    
    
    <div id="header-right">
    <ul class="home-icons" >
        <li class="compose-tweet"></li>
        <li class="add-feed"></li>
      </ul>
    <!-- END home-icons-->
    
    <div class="clear"></div>
  </div>
  
    <!-- END header-right --> 
    
  </header>
  <!-- END header --> 
  
  <div id="menu" class="main-navigation cbp-spmenu-push">
  <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        
        <?php 
        if(!empty($_SESSION['username'])){  ?>
            <?php 
            require_once('user-detail.php');
        }
        ?>
        
        <ul class="menu-items">
            <li class="home"><a href="#">Home</a></li> 
            <li class="notifications"><a href="#">Notifications</a></li> 
            <li class="trending"><a href="#">Trends</a> </li>
            <li class="settings"><a href="#">Settings </a></li>
        </ul>
        <!-- END list menu-items -->
        <div id="logout-wrapper">
            <button id="logout">Logout</button>
        </div>
   </nav>
        <!-- END nav cbp-spmenu-s1 -->
</div>
    <!-- END main-navigation --> 


<?php 

if(!empty($_SESSION['username'])){  ?>

    <div class="content-wrapper">
        <div id="col-1" class="tweets">One</div>
        <div id="col-2" class="tweets">Two</div>
        <div id="col-3" class="tweets">Three</div>
        <div class="clear"></div>
    </div>
    <!-- END content-wrapper -->
    
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