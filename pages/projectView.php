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

    <br><br><br><br>
    <div class="container">

      <div class="row">

        <!-- panel starting -->
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading" style="background:	#e6e6e6">
              <div class="row">
                <div class="col-lg-12">
                  <h1 id="projectName" align="center">Please go back and reload the page</h1>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="col-lg-6">
                <div>
                  <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"  style="visibility:hidden;" onload="this.style.visibility = 'visible';" src="" id="myiframe" allowfullscreen></iframe>
                  </div>
                  <br>
                </div>
              </div>
              <div id="descriptionContainer" class="col-lg-6">

              </div>

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

    <!-- custom theme javascript -->
    <script>

      var projectName = "<?php echo $_POST["projectName"]; ?>";
      loadJSON(projectName);

      function createH3Element(text){
        var strongElement = document.createElement("strong");
        strongElement.innerHTML = text;
        var headingElement = document.createElement("h3");
        headingElement.appendChild(strongElement);
        return headingElement;
      }

      function createPElement(text){
        var pElement = document.createElement("p");
        pElement.innerHTML = text;
        return pElement;
      }

      function loadJSON(projectName) {
        var fileLocation = '../data/projectsData.json';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange=function() {
          if (this.readyState == 4 && this.status == 200) {
            var jsonText = this.responseText;
            var jsonObject = JSON.parse(jsonText);
            if(jsonObject != undefined && jsonObject[projectName] != undefined){

              // title
              if("title" in jsonObject[projectName]){
                document.getElementById("projectName").innerHTML = jsonObject[projectName]["title"];
              }
              // url
              if("url" in jsonObject[projectName]){
                document.getElementById("myiframe").src = jsonObject[projectName]["url"];
              }
              else{
                document.getElementById("myiframe").style.display = "none";
              }
              // project description
              if("projectDescription" in jsonObject[projectName]){
                // creating project description heading
                var headingElement = createH3Element("Project Description");
                document.getElementById("descriptionContainer").appendChild(headingElement);

                if(typeof jsonObject[projectName]["projectDescription"] === 'object'){
                  var details = jsonObject[projectName]["projectDescription"];
                  for(key in details){
                    // creating heading
                    headingElement = createH3Element(key);
                    document.getElementById("descriptionContainer").appendChild(headingElement);

                    // creating content
                    if(typeof details[key] === 'object'){
                        for(ele in details[key]){
                          pElement = createPElement(details[key][ele]);
                          document.getElementById("descriptionContainer").appendChild(pElement);
                        }
                    }
                    else{
                      pElement = createPElement(details[key]);
                      document.getElementById("descriptionContainer").appendChild(pElement);
                    }

                  }
                }
                else{
                  var contentElement = document.createElement("p");
                  contentElement.innerHTML = jsonObject[projectName]["projectDescription"];
                  document.getElementById("descriptionContainer").appendChild(contentElement);
                }
              }
              else{
                document.getElementById("projectDescription").style.display = "none";
                document.getElementById("projectDescriptionHeading").style.display = "none";
              }

              // team
              if("team" in jsonObject[projectName]){
                headingElement = createH3Element("Team");
                document.getElementById("descriptionContainer").appendChild(headingElement);

                if(typeof jsonObject[projectName]["team"] === 'object'){
                  for(ele in jsonObject[projectName]["team"]){
                    var pElement = createPElement(jsonObject[projectName]["team"][ele]);
                    document.getElementById("descriptionContainer").appendChild(pElement);

                  }
                }
                else{
                  var pElement = createPElement(jsonObject[projectName]["team"]);
                  document.getElementById("descriptionContainer").appendChild(pElement);

                }
              }
              else{
                document.getElementById("team").style.display = "none";
                document.getElementById("teamHeading").style.display = "none";
              }

            }
            else{

              document.getElementById("myiframe").style.display = "none";
              document.getElementById("projectDescription").style.display = "none";
              document.getElementById("projectDescriptionHeading").style.display = "none";
              document.getElementById("team").style.display = "none";
              document.getElementById("teamHeading").style.display = "none";
              alert("project not found");
            }
          }
        };
        xhttp.open("GET",fileLocation, true);
        xhttp.send();
      }

    </script>



  </body>
</html>
