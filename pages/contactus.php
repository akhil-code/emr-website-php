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

    <title>EmR | Contact us</title>
    <link rel="icon" href="../img/icon.png" sizes="32x32"/>

    <!-- bootstrap core css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style>
      @media screen and (min-width:100px) {
          .huge{ font-size:200%; }
          .medium{ font-size:130%; }
      }
      @media screen and (min-width:900px) {
          .huge{ font-size:400%; }
          .medium{ font-size:150%; }
      }

      /*.pics{
        width: 100%;
        height: 100%;
      }*/

      .mega{
        font-size: 34px;
        font-weight: bold;
      }
      .huge{
        font-size: 20px;
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
            <li><a href="../index.php">Home</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="workshops.php">Workshops</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li class="active"><a href="#">Contact us</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="queries.php">Queries / Feedback</a></li>

          </ul>

        </div>
      </div>
    </nav>

    <br><br><br><br>
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <!-- row 1 -->
          <div class="row">

            <!-- panel starting -->
            <div class="col-lg-6 col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-lg-6">
                       <img src="../img/people/abhishek.jpg" class="img-rounded img-responsive" alt="abhishek">
                    </div>
                    <div class="col-lg-6 text-right">
                      <div class="huge">Abhishek</div>
                      <div>President</div>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <span class="pull-left"><a><i class="fa fa-facebook-official">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-google">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-git">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-youtube-play">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-right"><i class="fa fa-phone"></i>&nbsp;9729012866</span>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <!-- panel ending -->

            <!-- panel starting -->
            <div class="col-lg-6 col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-lg-6">
                       <img src="../img/people/akhil.jpg" class="img-rounded img-responsive" alt="akhil">
                    </div>
                    <div class="col-lg-6 text-right">
                      <div class="huge">Akhil</div>
                      <div>Vice President</div>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <span class="pull-left"><a><i class="fa fa-facebook-official">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-google">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-git">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-youtube-play">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-right"><i class="fa fa-phone"></i>&nbsp;8950409998</span>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <!-- panel ending -->

          </div>

          <!-- row 2 -->
          <div class="row">

            <!-- panel starting -->
            <div class="col-lg-6 col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-lg-6">
                      <img src="../img/people/jindal.jpg" class="img-rounded img-responsive" alt="jindal">
                    </div>
                    <div class="col-lg-6 text-right">
                      <div class="huge">Himanshu Jindal</div>
                      <div>Secretary</div>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <span class="pull-left"><a><i class="fa fa-facebook-official">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-google">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-git">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-youtube-play">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-right"><i class="fa fa-phone"></i>&nbsp;8950773088</span>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <!-- panel ending -->

            <!-- panel starting -->
            <div class="col-lg-6 col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-lg-6">
                      <img src="../img/people/charan.jpg" class="img-rounded img-responsive" alt="charan">
                    </div>
                    <div class="col-lg-6 text-right">
                      <div class="huge">Sai Charan</div>
                      <div>Joint Secretary</div>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <span class="pull-left"><a><i class="fa fa-facebook-official">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-google">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-git">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-youtube-play">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-right"><i class="fa fa-phone"></i>&nbsp;8950884197</span>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <!-- panel ending -->

          </div>

          <!-- row 3 -->
          <div class="row">

            <!-- panel starting -->
            <div class="col-lg-6 col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-lg-6">
                      <img src="../img/people/akanksha.jpg" class="img-rounded img-responsive" alt="shukla">
                    </div>
                    <div class="col-lg-6 text-right">
                      <div class="huge">Akanksha Shukla</div>
                      <div>Girl's Representative</div>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <span class="pull-left"><a><i class="fa fa-facebook-official">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-google">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-git">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-youtube-play">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-right"><i class="fa fa-phone"></i>&nbsp;7206304665</span>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <!-- panel ending -->

            <!-- panel starting -->
            <div class="col-lg-6 col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-lg-6">
                      <img src="../img/people/gopal.jpg" class="img-rounded img-responsive" alt="gopal">
                    </div>
                    <div class="col-lg-6 text-right">
                      <div class="huge">Sai Gopal </div>
                      <div>Technical Head</div>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <span class="pull-left"><a><i class="fa fa-facebook-official">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-google">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-git">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-left"><a><i class="fa fa-youtube-play">&nbsp;&nbsp;</i></a></span>
                  <span class="pull-right"><i class="fa fa-phone"></i>&nbsp;9728433154</span>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <!-- panel ending -->

          </div>



        </div>

        <div class="col-lg-6">
          <!-- row 3 -->
          <div class="row">
              <!-- panel starting -->
                <div class="col-lg-12">
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-3">
                          <i class="fa fa-child fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                          <div class="mega">19</div>
                          <div>Members</div>
                        </div>
                      </div>
                    </div>
                    <div class="panel-footer">
                      <div class="clearfix"></div>
                      <br>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="list-group">
                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i> Sai Kiran
                              <span class="pull-right text-muted small">
                                <em>9728431710</em>
                              </span>
                            </div>

                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i>Mukesh Agrawal
                              <span class="pull-right text-muted small">
                                <em>9541890682</em>
                              </span>
                            </div>
                            
                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i>Chaitanya
                              <span class="pull-right text-muted small">
                                <em>8950444204</em>
                              </span>
                            </div>
                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i>Bhuwan Dixit
                              <span class="pull-right text-muted small">
                                <em>9896992384</em>
                              </span>
                            </div>

                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i>Sai Mohan
                              <span class="pull-right text-muted small">
                                <em>9729012714</em>
                              </span>
                            </div>
                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i>Pankaj
                              <span class="pull-right text-muted small">
                                <em>8809957152</em>
                              </span>
                            </div>
                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i>Damodar
                              <span class="pull-right text-muted small">
                                <em>9728431246</em>
                              </span>
                            </div>
                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i>Deepak Birwal
                              <span class="pull-right text-muted small">
                                <em>8818000660</em>
                              </span>
                            </div>
                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i>Ashesh Pandey
                              <span class="pull-right text-muted small">
                                <em>9728427367</em>
                              </span>
                            </div>

                          </div>
                          <!-- /.list-group -->
                        </div>
                        <div class="col-lg-6">
                          <div class="list-group">

                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i>Sonali Kashyap
                              <span class="pull-right text-muted small">
                                <!-- <em>9728430368</em> -->
                              </span>
                            </div>
                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i>Prachi
                              <span class="pull-right text-muted small">
                                <!-- <em>9728431605</em> -->
                              </span>
                            </div>
                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i>Ruby
                              <span class="pull-right text-muted small">
                                <!-- <em>7206326309</em> -->
                              </span>
                            </div>
                            <div class="list-group-item">
                              <i class="fa fa-user fa-fw"></i>Shraddha
                              <span class="pull-right text-muted small">
                                <!-- <em>9492415902</em> -->
                              </span>
                            </div>


                          </div>

                          <!-- /.list-group -->
                        </div>
                      </div>



                    </div>
                  </div>
                </div>
                <!-- panel ending -->
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
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bottomScrollbar.js"></script>
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
