<?php
  session_start();
  if(!isset($_SESSION["siteVisited"])) {
    $_SESSION["siteVisited"] = true;
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

    <title>EmR | About us</title>
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
          .huge{ font-size:250%; }
          .medium{ font-size:125%; }
      }
      @media screen and (min-width:900px) {
          .huge{ font-size:200%; }
          .medium{ font-size:120%; }
      }
      .huge{
        font-weight: bold;
      }
      .medium{
        /*font-weight: bold;*/
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
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li class="active"><a href="#">About us</a></li>
            <li><a href="queries.php">Queries / Feedback</a></li>

          </ul>

        </div>
      </div>
    </nav>

    <br><br><br><br>
    <div class="container">
      <div class="row">

        <div class="col-lg-8">
          <div class="well">
            <span class="huge">About us</span><br>
            <span class="medium">Embedded Systems & Robotics Club, NIT Kurukshetra is an earnest endeavour in the automata domain. The brainchild of a diligent student fraternity, the club aims to elevate the standards of the institute by pioneering quality learning and guidance in the field of robotics. A huge student community fancies the world of robotics and the club aids this materialization. The salient feature of the club is that it aims at evolving the seeds of knowledge in this novice chunk, nurturing them into future technocrats. The club welcomes all those with a spark, who crave to dig into this vast promising realm, and ensures a 24×7 lucid mentorship
            </span>
          </div>

          <div class="well" style="margin-top:0px;">
            <span class="huge">Mission</span><br>
            <span class="medium">
              The increasing economic growth and competition in the global market lead the public and private sectors to seek innovation in the field of engineering and technology. In this scenario club effort is orient towards providing the common platform for the knowledge and opportunity to implement the innovative ideas.
            </span>
            <br><br><br>
            <p class="medium" align="center">
              <strong>
                “Engineering Education should orient towards Innovation” is our Vision.
              </strong>
            </p>
          </div>

        </div>

        <div class="col-lg-4">
          <!-- <div class="embed-responsive embed-responsive-16by9"> -->
            <iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Femrclub.nitkkr&tabs=timeline&width=340&height=520&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId=212145209342070" width="340" height="520" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          <!-- </div> -->
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
