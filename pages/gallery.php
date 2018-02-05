<?php
  session_start();
  if(!isset($_SESSION["siteVisited"])) {
    $_SESSION["siteVisited"] = true;
    include 'php/siteViewIncrementer.php';
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

    <title>EmR | Gallery</title>
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
          .large{ font-size:125%; font-weight: bold;}
          .primary-text{ font-size:200%; font-weight: bold;}

      }
      @media screen and (min-width:900px) {
          .medium{ font-size:150%; }
          .large{ font-size:200%; }
          .primary-text{ font-size:300%; font-weight: bold;}
      }

      .medium{
        font-weight: bold;
      }
    </style>
  </head>

  <body style="background-color:#bfbfbf">
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
            <li><a href="projects.php">Projects</a></li>
            <li class="active"><a href="#">Gallery</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="queries.php">Queries / Feedback</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="primary-text" align="center">Gallery</p>
          <hr class="large"/>
        </div>
        <hr>
      </div>


      <div class="row">
        <a href="gallery/st_udc/page1.php">
          <!-- panel starting -->
          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-lg-12">
                    <img src="../img/gallery/covers/cover1.jpg" class="img-rounded img-responsive" alt="image">
                  </div>
                  <div class="col-lg-12">
                  </div>
                </div>
              </div>
              <div class="panel-footer">
                <span class="pull-left"><strong>ST Microelctronics</strong></span>
                <span class="pull-left"><strong>University Design Championship’15</strong></span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- panel ending -->
        </a>

        <!-- panel starting -->
        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/gallery/covers/cover2.jpg" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>Robotics Workshop 5.0</strong></span>
              <span class="pull-left"><strong>Accelerometer controlled robot</strong></span>

              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->

        <!-- panel starting -->
        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/gallery/covers/cover3.jpg" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>Science Innovation Exhibition</strong></span>
              <span class="pull-left"><strong>Dr. APJ Abdul Kalam visit to NITK</strong></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->

      </div>
      <div class="row">

        <!-- panel starting -->
        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/gallery/covers/cover4.jpg" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>Brainstorming Session 2017</strong></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->

        <!-- panel starting -->
        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/gallery/covers/cover5.jpg" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>Image Processing Workshop</strong></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->


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
    <!-- <script src="../js/jquery-3.2.1.js"></script> -->
    <!-- <script src="../js/bootstrap.min.js"></script> -->
    <script src="../js/bottomScrollbar.js"></script>
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
