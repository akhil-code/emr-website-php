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

    <title>NIT KKR's Voting System | Create Group</title>
    <link rel="icon" href="../img/icon.png" sizes="32x32"/>

    <!-- bootstrap core css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style>
      .huge{
        font-size: 22px;
      }
    </style>
  </head>

  <body style="background-color:#90EE90">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <img align="left" style="margin-top:5px;margin-bottom:5px;margin-right:10px;" src="../img/icon.png" alt="logo" height="42" width="42">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:white;margin-right:30px;">Dashboard</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="positions.php">Positions</a></li>
            <li><a href="votersList.php">Voters</a></li>
            <li><a href="nominees.php">Nominees</a></li>
            <li><a href="shareLink.php">Share</a></li>
            <li><a href="viewGraphs.php">View</a></li>
            <li><a href="accountControl.php">Control</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="adminLogin.php"><span class="fa fa-user-times"></span>  Log out</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <br><br><br><br>
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="panel panel-default">
              <div class="panel-heading">
                <i class="fa fa-chain-broken fa-fw"></i> Account Information
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <i class="fa fa-coffee fa-fw"></i> Organisation
                    <span class="pull-right text-muted small"><em>Name</em>
                    </span>
                  </a>
                  <a href="#" class="list-group-item">
                    <i class="fa fa-folder fa-fw"></i> Username
                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                    </span>
                  </a>
                </div>
              </div>
              <!-- /.panel-body -->
          </div>

          <div class="panel panel-default">
              <div class="panel-heading">
                <i class="fa fa-clock-o fa-fw"></i> Timeline
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <i class="fa fa-calendar-plus-o fa-fw"></i> Created on
                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                    </span>
                  </a>
                  <a href="#" class="list-group-item">
                    <i class="fa fa-check-circle fa-fw"></i> Started on
                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                    </span>
                  </a>
                  <a href="#" class="list-group-item">
                    <i class="fa fa-times-circle fa-fw"></i> Will end on
                    <span class="pull-right text-muted small"><em>Yesterday</em>
                    </span>
                  </a>
                </div>
                <!-- /.list-group -->
                <a href="#" class="btn btn-danger btn-block">Delete Account</a>
              </div>
              <!-- /.panel-body -->
          </div>

        </div>

        <div class="col-lg-8 col-md-6">
          <br>
          <div class="row">
            <!-- panel starting -->
            <div class="col-lg-4 col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">Akhil Guttula</div>
                      <div>8950409998</div>
                    </div>
                  </div>
                </div>
                <a href="votersList.php">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <!-- panel ending -->

            <!-- panel starting -->
            <div class="col-lg-4 col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-child fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">26</div>
                      <div>Positions</div>
                    </div>
                  </div>
                </div>
                <a href="positions.php">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <!-- panel ending -->


            <!-- panel starting -->
            <div class="col-lg-4 col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-bar-chart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">26</div>
                      <div>Votes</div>
                    </div>
                  </div>
                </div>
                <a href="viewGraphs.php">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <!-- panel ending -->

          </div>

          <div class="row">
            <!-- panel starting -->
            <div class="col-lg-4 col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-flag fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">26</div>
                      <div>Nominees</div>
                    </div>
                  </div>
                </div>
                <a href="nominees.php">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <!-- panel ending -->

            <!-- panel starting -->
            <div class="col-lg-4 col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-share fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">26</div>
                      <div>Share</div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <!-- panel ending -->

            <!-- panel starting -->
            <div class="col-lg-4 col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-check fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">ON</div>
                      <div>Status</div>
                    </div>
                  </div>
                </div>
                <a href="accountControl.php">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <!-- panel ending -->
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-info">
                <div class="panel-heading">
                  Help
                </div>
                <div class="panel-body">
                    <p>Steps: Create positions -> add nominees -> add voters list -> share link -> see votes</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>



    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 text-center">
            <hr class="small"/>
            <p class="text-muted"><xmp><develop> Ag </design></xmp></p>
            <!-- <p class="text-muted" style="color:black;">Copyright &copy; Akhil Guttula</p> -->
          </div>
        </div>
      </div>
      <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jquery -->
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>


    <!-- custom theme javascript -->
    <script>
      // Scrolls to the selected menu item on the page
      $(function() {
          $('a[href=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
              if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                  if (target.length) {
                      $('html,body').animate({
                          scrollTop: target.offset().top
                      }, 1000);
                      return false;
                  }
              }
          });
      });
      //#to-top button appears after scrolling
      var fixed = false;
      $(document).scroll(function() {
          if ($(this).scrollTop() > 250) {
              if (!fixed) {
                  fixed = true;
                  // $('#to-top').css({position:'fixed', display:'block'});
                  $('#to-top').show("slow", function() {
                      $('#to-top').css({
                          position: 'fixed',
                          display: 'block'
                      });
                  });
              }
          } else {
              if (fixed) {
                  fixed = false;
                  $('#to-top').hide("slow", function() {
                      $('#to-top').css({
                          display: 'none'
                      });
                  });
              }
          }
      });
    </script>

  </body>
</html>
