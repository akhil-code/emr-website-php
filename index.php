<?php
  session_start();
  if(!isset($_SESSION["siteVisited"])) {
    $_SESSION["siteVisited"] = true;
    include 'php/siteViewIncrementer.php';
  }

  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");

  // unset cookies
  if (isset($_SERVER['HTTP_COOKIE'])) {
      $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
      foreach($cookies as $cookie) {
          $parts = explode('=', $cookie);
          $name = trim($parts[0]);
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
      }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content="">

    <title>EmR | Home</title>
    <link rel="icon" href="/img/icon.png" sizes="32x32"/>

    <!-- bootstrap core css -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- custom css -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      @media screen and (min-width:100px) {
          .huge{ font-size:200%; }
          .medium{ font-size:130%; }
      }
      @media screen and (min-width:900px) {
          .huge{ font-size:400%; }
          .medium{ font-size:150%; }
      }
      .huge{
        font-weight: bold;
      }
      .medium{
        font-weight: bold;
      }


      .full-screen {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }

      .carousel-caption{
        top: 50%;
        transform: translateY(-50%);
        bottom: initial;
      }
      .item{
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
      }
    </style>
  </head>

  <body style="background-color:#bfbfbf">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <img align="left" style="margin-top:5px;margin-bottom:5px;margin-right:10px;" src="/img/icon.png" alt="logo" height="42" width="42">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:white;margin-right:30px;">EmR Club</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="/pages/workshops.php">Workshops</a></li>
            <li><a href="/pages/projects.php">Projects</a></li>
            <li><a href="/pages/gallery.php">Gallery</a></li>
            <li><a href="/pages/contactus.php">Contact us</a></li>
            <li><a href="/pages/aboutus.php">About us</a></li>
            <li><a href="/pages/queries.php">Queries / Feedback</a></li>
          </ul>

        </div>
      </div>
    </nav>



    <div id="mycarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="2"></li>
        <li data-target="#mycarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <img src="/img/carouselPics/1.jpg" data-color="lightblue" alt="cover pic">
          <div class="carousel-caption">
            <span class="huge">EMBEDDED SYSTEMS & ROBOTICS CLUB</span><br>
            <span class="medium">Welcome to the official website of Embedded Systems & Robotics Club,NIT Kurukshetra. We are an earnest endeavour in the automata domain.</span>
          </div>
        </div>
        <div class="item">
          <img src="/img/carouselPics/2.jpg" data-color="firebrick" alt="Activities">
          <div class="carousel-caption">
            <span class="huge">ACTIVITIES</span><br>
            <span class="medium">Our club hosts various technical activities like Brainstorming session, Robotics Day, Series of Workshops and Collobrative Projects</span>
          </div>
        </div>
        <div class="item">
          <img src="/img/carouselPics/4.jpg" data-color="violet" alt="Projects">
          <div class="carousel-caption">
            <span class="huge">PROJECTS</span><br>
            <span class="medium">Club has undertaken several  innovative embedded & software projects which has not only won awards but also came in the light of electronics core companies.</span>
          </div>
        </div>
        <div class="item">
          <img src="/img/carouselPics/3.jpg" data-color="lightgreen" alt="About us">
          <div class="carousel-caption">
            <span class="huge">ABOUT US</span><br>
            <span class="medium">Embedded Systems & Robotics Club, NIT Kurukshetra is an earnest endeavour in the automata domain. The brainchild of a diligent student fraternity, the club aims </span>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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
    <!-- <script src="js/jquery-3.2.1.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/bottomScrollbar.js"></script>

    <script>
      loadPageCount();
      function loadPageCount() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("pageViewCount").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "php/pageViewIncrementer.php", true);
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


    <script>
      var $item = $('.carousel .item');
      var $wHeight = $(window).height();
      $item.eq(0).addClass('active');
      $item.height($wHeight);
      $item.addClass('full-screen');

      $('.carousel img').each(function() {
        var $src = $(this).attr('src');
        var $color = $(this).attr('data-color');
        $(this).parent().css({
          'background-image' : 'url(' + $src + ')',
          'background-color' : $color
        });
        $(this).remove();
      });

      $(window).on('resize', function (){
        $wHeight = $(window).height();
        $item.height($wHeight);
      });

      $('.carousel').carousel({
        interval: 4000,
        pause: "false"
      });
    </script>

  </body>
</html>
