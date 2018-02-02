<?php

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

    <title>EmR | Projects</title>
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
          .secondary-text{ font-size:100%; }

      }
      @media screen and (min-width:900px) {
          .medium{ font-size:150%; }
          .large{ font-size:200%; }
          .primary-text{ font-size:300%; font-weight: bold;}
          .secondary-text{ font-size:110%; }
      }

      a{
        color: 	#1a1a1a;
      }
      a:hover{
        color: #000000;
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
            <li class="active"><a href="projects.php">Projects</a></li>
            <li><a href="workshops.php">Workshops</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="queries.php">Queries / Feedback</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="primary-text" align="center">Projects</p>
          <span class="secondary-text">'Club has undertaken several  innovative embedded & software projects which has not only won awards but also came in the light of electronics core companies'</span>
          <hr class="large"/>
        </div>
      </div>

      <!-- row 1 -->
      <div class="row">
        <!-- panel starting project 1-->
        <div class="col-lg-4">
          <div class="panel panel-default" id="lowCostIrrigationSystem" onclick="onProjectClick(this.id)">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/projects/smartIrrigationSystem.jpg" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
                <span class="pull-left"><strong>Low Cost Intelligent Irrigation System</strong></span>
                <span class="pull-left"><strong>(University Design Contest’15 First Prize)</strong></span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->

        <!-- panel starting project 2-->
        <div class="col-lg-4">
          <div class="panel panel-default" id="digitalNeuralNetwork" onclick="onProjectClick(this.id)">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/projects/neuralNetworks.png" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>Digital Neural Network</strong></span>
              <span class="pull-left"><strong>used for Handwriting Recognition</strong></span>

              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->

        <!-- panel starting project 3-->
        <div class="col-lg-4">
          <div id="dualModeRobot" onclick="onProjectClick(this.id)" class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/projects/dualModeRobot.jpg" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>Dual Mode Robot</strong></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->

      </div>
      <!-- row ending -->

      <!-- row 2 -->
      <div class="row">
        <!-- panel starting project 1-->
        <div class="col-lg-4">
          <div class="panel panel-default" id="gridSolver" onclick="onProjectClick(this.id)">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/projects/gridSolver.jpg" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>Grid Solver</strong></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->

        <!-- panel starting project 2-->
        <div class="col-lg-4">
          <div id="mazeSolver" onclick="onProjectClick(this.id)" class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/projects/mazeSolver.jpg" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>Maze Solver</strong></span>

              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->

        <!-- panel starting project 3-->
        <div class="col-lg-4">
          <div class="panel panel-default" id="gestureRecognition" onclick="onProjectClick(this.id)">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/projects/gestureControl.jpg" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>Gesture Recognition</strong></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->

      </div>


      <!-- row 3 -->
      <div class="row">
        <!-- panel starting project 1-->
        <div class="col-lg-4">
          <div class="panel panel-default" id="apexoEvent" onclick="onProjectClick(this.id)">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/projects/techfest.png" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>Apexo event IIT Bombay Techfest</strong></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->

        <!-- panel starting project 2-->
        <div class="col-lg-4">
          <div class="panel panel-default" id="pulseRateCalculator" onclick="onProjectClick(this.id)">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/projects/pulseRate.jpg" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>Pulse Rate Calculator</strong></span>

              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->

        <!-- panel starting project 3-->
        <div class="col-lg-4">
          <div class="panel panel-default" id="accelerometerBasedRobot" onclick="onProjectClick(this.id)">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/projects/accelerometer.jpg" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>Accelerometer based Wireless Robot</strong></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- panel ending -->

      </div>

      <!-- row 4 -->
      <div class="row">
        <!-- panel starting project 1-->
        <div class="col-lg-4 col-lg-offset-4">
          <div class="panel panel-default" id="eyantraDIP" onclick="onProjectClick(this.id)">
            <div class="panel-heading">
              <div class="row">
                <div class="col-lg-12">
                  <img src="../img/projects/eyantra.jpg" class="img-rounded img-responsive" alt="image">
                </div>
                <div class="col-lg-12">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left"><strong>e-Yantra’16 IIT Bombay Runner up</strong></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- panel ending -->
        </div>

      </div>

    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 text-center">
            <hr class="small"/>
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
      function onProjectClick(id){
        var myForm = document.getElementById('myForm');
        document.getElementById('projectNameField').value = id;
        myForm.submit();
      }
    </script>

    <form id="myForm" action="projectView.php" method="post">
      <input type="hidden" id="projectNameField" name="projectName" value="none">
    </form>

  </body>
</html>
