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
    <link rel="icon" href="../../../img/icon.png" sizes="32x32"/>

    <!-- bootstrap core css -->
    <!-- <link href="../../../css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- custom css -->
    <link href="../../../css/stylish-portfolio.css" rel="stylesheet">
    <!-- <link href="../../../font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->

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
      #paginationWrapper {
        /*background-color: green;*/
        text-align: center;
      }
      #paginationDiv {
        /*background-color: red;*/
        display: inline-block;
      }
    </style>
  </head>

  <body style="background-color:#bfbfbf">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <img align="left" style="margin-top:5px;margin-bottom:5px;margin-right:10px;" src="../../../img/icon.png" alt="logo" height="42" width="42">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/index.php" style="color:white;margin-right:30px;">EmR Club</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="/pages/projects.php">Projects</a></li>
            <li><a href="/pages/workshops.php">Workshops</a></li>
            <li class="active"><a href="/pages/gallery.php">Gallery</a></li>
            <li><a href="/pages/contactus.php">Contact us</a></li>
            <li><a href="/pages/aboutus.php">About us</a></li>
            <li><a href="/pages/queries.php">Queries / Feedback</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <br><br><br><br>

    <div class="container">
      <div class="row">
        <h3 align="center"><strong>Robotics workshop 5.0: Accelerometer controlled robot</strong></h3>
      </div>

      <div class="row" id="main_area">
        <div class="col-lg-6">
          <br>
          <!-- <div class="col-lg-12" id="slider"> -->
            <div class="row">
              <div class="col-lg-12" id="carousel-bounding-box">
                <div class="carousel slide" id="myCarousel">
                  <!-- Carousel items -->
                  <div class="carousel-inner" id="carousel-container">
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
          <!-- </div> -->
        </div>

        <div class="col-lg-6" id="slider-thumbs">
          <div class="row">
            <ul class="hide-bullets" id="pics-container">
            </ul>
          </div>
          <div class="row">
            <ul style="padding-left:15px; list-style-type:none;">
              <a href="page4.php" style="text-decoration:none;"><li style="display: inline; padding-right:10px; padding-left:10px; border: solid 1px black;"><</li></a>
              <a href="page1.php" style="text-decoration:none;"><li style="display: inline; padding-right:10px; padding-left:10px; border: solid 1px black;">1</li></a>
              <a href="page2.php" style="text-decoration:none;"><li style="display: inline; padding-right:10px; padding-left:10px; border: solid 1px black;">2</li></a>
              <a href="page3.php" style="text-decoration:none;"><li style="display: inline; padding-right:10px; padding-left:10px; border: solid 1px black;">3</li></a>
              <a href="page4.php" style="text-decoration:none;"><li style="display: inline; padding-right:10px; padding-left:10px; border: solid 1px black;">4</li></a>
              <a href="#" style="text-decoration:none;"><li style="display: inline; padding-right:10px; padding-left:10px; border: solid 1px black;">5</li></a>
              <!-- <a href="page2.php" style="text-decoration:none;"><li style="display: inline; padding-right:10px; padding-left:10px; border: solid 1px black;">></li></a> -->
            </ul>
          </div>
        </div>
      </div>

    </div>

    <script>
      loadPics();
      function loadPics(){
        var thumnbnailsString ='';
        var carouselString = '';
        var start=81, end=92;
        // var carouselString =
        // '<div class="active item" data-slide-number="0">\
        //   <img class="img-responsive img-rounded" src="/img/gallery/st_udc/udc1.jpg">\
        // </div>';
        // creating thumbnails html string

        for(x=0;x<end-start+1;x++){
          thumnbnailsString +=
          '<li class="col-lg-3">\
            <a class="thumbnail" id="carousel-selector-'+x+'">\
              <img class="img-responsive" src="/img/gallery/workshop_5_0/'+(x+start)+'.jpg">\
            </a>\
          </li>';
          if(x==0){
            carouselString +=
            '<div class="active item" data-slide-number="'+x+'">\
              <img class="img-responsive img-rounded" src="/img/gallery/workshop_5_0/'+(x+start)+'.jpg">\
            </div>';
          }
          else{
            carouselString +=
            '<div class="item" data-slide-number="'+x+'">\
            <img class="img-responsive img-rounded" src="/img/gallery/workshop_5_0/'+(x+start)+'.jpg">\
            </div>';
          }
        }
        document.getElementById("carousel-container").innerHTML = carouselString;
        document.getElementById("pics-container").innerHTML = thumnbnailsString;
      }
    </script>


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
    <!-- <script src="../../../js/jquery-3.2.1.js"></script> -->
    <!-- <script src="../../../js/bootstrap.min.js"></script> -->
    <script src="../../../js/bottomScrollbar.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        xhttp.open("GET", "../../../php/pageViewIncrementer.php", true);
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
        xhttp.open("GET", "../../../data/siteViewCount.txt", true);
        xhttp.send();
      }
    </script>

  </body>
</html>
