
<!DOCTYPE html>
<html lang="en">
<head>
<title>Upload Your Vacancy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/122e297bad.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="style/style.css"></link>
  <!--<link rel="stylesheet"  type="text/css" href="css/global.css"></link>-->
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">UWU-CSI</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container">


    <!--<br>
    <div class="col-lg-offset-4 col-lg-4">
        <center><h1>Upload your File</h1></center>
        <form action="/store" enctype="multipart/form-data" method="post">
        {{csrf_field()}}
            <input type="file" name="file">
            <br>
            <input type="submit" class="btn btn-primary" value="Upload">
        </form>
    </div>-->
    <div class="wrapper">
        <div class="upload-console">
          <h2 class="upload-console-header">
            Upload Files
          </h2>

          <div class="upload-console-body">
            <h3>Select Files From your Computer</h3>

            <form action="VacancyUploadController.php" method ="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
              </div>

              <div class="form-group">
                  <label for="Textarea1">Description</label>
                  <textarea class="form-control" id="Textarea1" rows="3" name="textarea"></textarea>
              </div>
              <input type="file" name="files" >
              <br>
              <input type="submit" value="Upload Files" name="submit">
            </form>

          </div>
        </div>
    </div>

    


</div>

<div class="footer">
    <div class="footer-content">
        <div class="footer-section about">
           <h3>UWU-CSI</h3>
           <p>
           The ever rising demand for IT experts in a 
           globally expanding market is opening up avenues for graduates in 
           computer sciences and technologies
           </p>

        </div>
        <div class="footer-section contact">
            <span><i class="fas fa-phone">&nbsp; 055-5555500</i></span>
            </br>
            <span><i class="fas fa-envelope">&nbsp; infoUWU-CSI@gmail.com</i></span>

            <div class="socials">
              <a href=""><i class="fab fa-facebook"></i></a>
              <a href=""><i class="fab fa-youtube"></i></a>
              <a href=""><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        
    </div>
     <div class="footer-bottom">
        &copy; Uva Wellassa University | Computer Science & Informtics Department
     
     </div>

</div>

</body>


</html>