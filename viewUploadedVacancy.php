
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
    <table class="table table-bordered" >
        <thead>
            <tr>
                <th >ID</th>
                <th >Title</th>
                <th >Description</th>
                <th >File</th>
                <th >Company </th>
                <th>Action </th>
            </tr>
        </thead>
        <tbody>
            <?php
                include './vacancyUploadProcess.php';
                $result = ViewFiles();

                foreach($result as $file):
                ?>

                    <tr>
                        <td><?php echo $file['vacancy_id']?></td>
                        <td><?php echo $file['vacancy_title']?></td>
                        <td><?php echo $file['vacancy_description']?></td>
                        <td><?php echo $file['vacancy_file']?></td>
                        <td><?php echo $file['company_id']?></td>
                        <td class="text-center"><a href="vacancyDownload.php?id=<?php echo $file['vacancy_id']?>" class="btn btn-primary">Download</a></td>
                    </tr>


            <?php
            endforeach;
            ?>

        </tbody>
    </table>

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