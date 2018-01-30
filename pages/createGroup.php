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
          <a class="navbar-brand" href="#" style="color:white;margin-right:30px;">Voting System</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">Home</a></li>
            <li class="active"><a href="#">Create Group</a></li>
            <li><a href="joinGroup.php">Join Group</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="adminLogin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <br><br><br><br>
    <div class="col-lg-4 col-lg-offset-4">
      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 align="center"><strong>Create Group</strong></h4>
          </div>
          <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form role="form">
                    <div class="form-group">
                      <label>Organisation</label>
                      <input class="form-control" placeholder="where voting is hosted">
                      <!-- <p class="help-block">in which voting is hosted</p> -->
                    </div>

                    <div class="form-group">
                      <label>Hoster's name</label>
                      <input class="form-control" placeholder="This will be used as your login username">
                    </div>

                    <div class="form-group">
                      <label>Password</label>
                      <input class="form-control" placeholder="only alpha-numeric">
                    </div>

                    <div class="form-group">
                      <label>Re-enter Password</label>
                      <input class="form-control" placeholder="Note: passwords should match">
                    </div>
                    <br>

                    
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    </form>
                  </div>
                  <!-- /.col-lg-6 (nested) -->
              </div>
              <!-- /.row (nested) -->
          </div>
          <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
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
