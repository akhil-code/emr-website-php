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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
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

      .hide-bullets {
        list-style:none;
        margin-left: -40px;
        margin-top:20px;
      }

      .thumbnail {
        padding: 0;
      }

      .carousel-inner>.item>img, .carousel-inner>.item>a>img {
        width: 100%;
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
            <li><a href="../index.php">Home</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="workshops.php">Workshops</a></li>
            <li class="active"><a href="#">Gallery</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="queries.php">Queries / Feedback</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <br><br><br><br>
    <!-- page heading -->
    <!-- <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="primary-text" align="center">Gallery</p>
          <hr class="large"/>
        </div>
        <hr>
      </div>
    </div> -->



    <div class="container">
        <div id="main_area">
            <!-- Slider -->
            <div class="row">
                <div class="col-sm-6" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets">
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-0">
                                <img src="http://placehold.it/150x150&text=zero">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-12" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                            <img src="http://placehold.it/470x480&text=zero"></div>

                                        <div class="item" data-slide-number="1">
                                            <img src="http://placehold.it/470x480&text=1"></div>

                                        <div class="item" data-slide-number="2">
                                            <img src="http://placehold.it/470x480&text=2"></div>

                                        <div class="item" data-slide-number="3">
                                            <img src="http://placehold.it/470x480&text=3"></div>

                                        <div class="item" data-slide-number="4">
                                            <img src="http://placehold.it/470x480&text=4"></div>

                                        <div class="item" data-slide-number="5">
                                            <img src="http://placehold.it/470x480&text=5"></div>

                                        <div class="item" data-slide-number="6">
                                            <img src="http://placehold.it/470x480&text=6"></div>

                                        <div class="item" data-slide-number="7">
                                            <img src="http://placehold.it/470x480&text=7"></div>

                                        <div class="item" data-slide-number="8">
                                            <img src="http://placehold.it/470x480&text=8"></div>

                                        <div class="item" data-slide-number="9">
                                            <img src="http://placehold.it/470x480&text=9"></div>

                                        <div class="item" data-slide-number="10">
                                            <img src="http://placehold.it/470x480&text=10"></div>

                                        <div class="item" data-slide-number="11">
                                            <img src="http://placehold.it/470x480&text=11"></div>

                                        <div class="item" data-slide-number="12">
                                            <img src="http://placehold.it/470x480&text=12"></div>

                                        <div class="item" data-slide-number="13">
                                            <img src="http://placehold.it/470x480&text=13"></div>

                                        <div class="item" data-slide-number="14">
                                            <img src="http://placehold.it/470x480&text=14"></div>

                                        <div class="item" data-slide-number="15">
                                            <img src="http://placehold.it/470x480&text=15"></div>
                                    </div>
                                    <!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Slider-->
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
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bottomScrollbar.js"></script>
    <script>
      jQuery(document).ready(function($) {

          $('#myCarousel').carousel({
                  interval: 5000
          });

          //Handles the carousel thumbnails
          $('[id^=carousel-selector-]').click(function () {
          var id_selector = $(this).attr("id");
          try {
              var id = /-(\d+)$/.exec(id_selector)[1];
              console.log(id_selector, id);
              jQuery('#myCarousel').carousel(parseInt(id));
          } catch (e) {
              console.log('Regex failed!', e);
          }
      });
          // When the carousel slides, auto update the text
          $('#myCarousel').on('slid.bs.carousel', function (e) {
                   var id = $('.item.active').data('slide-number');
                  $('#carousel-text').html($('#slide-content-'+id).html());
          });
      });
    </script>
    <script>
      loadPageCount();
      function loadPageCount() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("pageViewCount").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "../php/pageViewIncrementer.php", true);
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
        xhttp.open("GET", "../data/siteViewCount.txt", true);
        xhttp.send();
      }
    </script>

  </body>
</html>
