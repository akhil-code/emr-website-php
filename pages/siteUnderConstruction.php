<?php
  session_start();
  if(!isset($_SESSION["siteVisited"])) {
    $_SESSION["siteVisited"] = true;
    // include 'php/siteViewIncrementer.php';
    include $_SERVER["DOCUMENT_ROOT"].'/php/siteViewIncrementer.php';
    
  }
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content="">

    <title>EmR | 404</title>
    <link rel="icon" href="../img/icon.png" sizes="32x32"/>

    <!-- bootstrap core css -->
    <!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- custom css -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <!-- <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      @media screen and (min-width:100px) {
          .medium{ font-size:100%; }
      }
      @media screen and (min-width:900px) {
          .medium{ font-size:150%; }
      }
      .medium{
        font-weight: bold;
      }
    </style>
  </head>

  <body style="background-color:#bfbfbf">

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=212145209342070&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <img align="left" style="margin-top:5px;margin-bottom:5px;margin-right:10px;" src="../img/icon.png" alt="logo" height="42" width="42">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php" style="color:white;margin-right:30px;">EmR Club</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="workshops.php">Workshops</a></li>
            <li><a href="/projects.php">Projects</a></li>
            <li><a href="/gallery.php">Gallery</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="queries.php">Queries / Feedback</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <br><br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="jumbotron">
<span class="medium">
<xmp>
  <page>
    not available yet
  </page>

  <message>
    Site under construction
  </message>
</xmp>
</span>

            <p>
            </p>

          </div>
        </div>

        <div class="col-lg-6">
          <div class="jumbotron">
<span class="medium">
<xmp>
  <work>
    under progress...... (-_-)
  </work>

  <to do>
    please wait for some time :-)
  </to do></xmp>
</span>

            <p>
              <!-- <i class="fa fa-server fa-5x"></i> -->
              <!-- <i class="fa fa-sign-language fa-5x"></i> -->
              <!-- <i class="fa fa-television fa-5x"></i> -->
              <!-- <i class="fa fa-wrench fa-5x"></i> -->
              <!-- <i class="fa fa-wheelchair fa-5x"></i> -->
              <!-- <i class="fa fa-send-o fa-5x"></i> -->
            </p>

          </div>
        </div>
      </div>

    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 text-center">
            <hr class="small"/>
            <span class="text-muted" style="color:black;">Site Views: </span>
            <span class="text-muted" style="color:black;" id="siteViewCount">count</span><span>&nbsp;&nbsp; | &nbsp;&nbsp;</span>
            <span class="text-muted" style="color:black;">Page Views: </span>
            <span class="text-muted" style="color:black;" id="pageViewCount">count</span>
            <p class="text-muted" style="color:black;">&copy; Embedded Systems & Robotics Club, NIT Kurukshetra 2018</p>
            <p class="text-muted"><xmp><develop> Ag MMSK </design></xmp></p>
          </div>
        </div>
      </div>
      <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jquery -->
    <!-- <script src="/js/jquery-3.2.1.js"></script> -->
    <!-- <script src="/js/bootstrap.min.js"></script> -->
    <script src="/js/bottomScrollbar.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
      loadPageCount();
      function loadPageCount() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("pageViewCount").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "/php/pageViewIncrementer.php", true);
        xhttp.send();
      }
      loadSiteCount();
      function loadSiteCount() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("siteViewCount").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "/data/siteViewCount.txt", true);
        xhttp.send();
      }
    </script>

  </body>
</html>
