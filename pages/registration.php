<?php

  session_start();
  if(!isset($_SESSION["siteVisited"])) {
    $_SESSION["siteVisited"] = true;
    include '../php/siteViewIncrementer.php';
  }
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>

<?php
  if(strcmp($_SERVER["REQUEST_METHOD"],"POST") == 0){
    $myfile = fopen($_SERVER[DOCUMENT_ROOT]."/data/registrations.txt", "a") or die("Unable to open file!");
    $txt = json_encode($_POST);
    $txt .= PHP_EOL;
    fwrite($myfile,$txt);
    fclose($myfile);
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

    <title>EmR | Registration</title>
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
            <li class="active"><a href="workshops.php">Workshops</a></li>
            <li><a href="projects.php">Projects</a></li>
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
        <div class="col-lg-8 col-lg-offset-2">
          <div class="panel panel-default">
            <div align="center" class="panel-heading">
              <i class="fa fa-street-view fa-fw"></i><strong> Registration Form</strong>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <div class="col-lg-6">
                <p>
                  <strong>Note</strong>: Students already registered for the workshop package <strong>need not register again</strong> and can directly come to the workshop.<br>
                  <br>
                  <strong>Venue</strong>: L - Block (ECE Dept.)<br>
                  <strong>Dates</strong>: 8th to 11th Feb, 2018<br>
                  <strong>Timings</strong>: 8th and 9th Feb (5 P.M - 7 P.M), 10th and 11th Feb (10 A.M - 5 P.M)<br>
                  <strong>Registration Fee</strong>: Rs.150/-<br><br>
                  <span style="color:red; font-size:25px;"> *</span> fields are mandatory.
                  <br><br>
                </p>
              </div>
              <div class="col-lg-6">
                <form id="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                  <div class="form-group input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </span>
                    <input class="form-control" id="name" placeholder="Name (required)" type="text" name="Name">
                  </div>

                  <div class="form-group input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-tty"></i>
                    </span>
                    <input class="form-control" id="mobile" placeholder="Mobile (optional)" type="text" name="Mobile">
                  </div>

                  <div class="form-group input-group">
                    <span class="input-group-addon">@</span>
                    <input class="form-control" id="email" placeholder="E-mail (required)" type="text" name="Email">
                  </div>

                  <br>
                  <div class="form-group">
                    <label>Year<span style="color:red;"> *</span></label>
                    <label class="radio-inline">
                      <input name="year" value="1st" id="1st" type="radio">1st
                    </label>
                    <label class="radio-inline">
                      <input name="year" value="2nd" id="2nd" type="radio">2nd
                    </label>
                    <label class="radio-inline">
                      <input name="year" value="3rd" id="3rd" type="radio">3rd
                    </label>
                  </div>

                  <div class="form-group">
                    <label>Have you attended Introductory Image Processing Workshop?<span style="color:red;"> *</span></label>
                    <label class="radio-inline">
                      <input name="hasAttended" value="Yes" id="Yes" type="radio">Yes
                    </label>
                    <label class="radio-inline">
                      <input name="hasAttended" value="No" id="No" type="radio">No
                    </label>
                  </div>

                  <div class="form-group">
                    <label>Queries (optional)</label>
                    <textarea class="form-control" rows="4" id="message" name="Message"></textarea>
                  </div>

                  <a onclick="submitForm()" class="btn btn-success btn-block">Submit</a>
                </form>
              </div>

            </div>
            <!-- /.panel-body -->
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
        xhttp.open("GET", "/data/siteViewCount.txt", true);
        xhttp.send();
      }
    </script>

    <script>
      function submitForm(){
        // validation
        var validated = true;
        if( document.getElementById("name").value == "")
          validated = false;

        if( document.getElementById("email").value == "")
          validated = false;

        if(!(document.getElementById("1st").checked || document.getElementById("2nd").checked || document.getElementById("3rd").checked ))
          validated = false;

        if(!(document.getElementById("Yes").checked || document.getElementById("No").checked))
          validated = false;

        // alert(document.getElementById("1st").checked);
        // alert(document.getElementById("2nd").checked);
        // alert(document.getElementById("3rd").checked);
        // alert(document.getElementById("Yes").checked);
        // alert(document.getElementById("No").checked);

        if(validated){
          alert("submitted! we will reach you soon :-)");
          document.getElementById("myForm").submit();
        }
        else{
          alert("please fill the details, so that it helps us reaching you!");
        }

      }
    </script>
  </body>
</html>
