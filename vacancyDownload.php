<?php
include './connection.php';
global $con;
$con = dbConnection();

if (isset($_GET['id'])) {
   $ID = $_GET['id'];
   //echo $ID;
   $sql = "SELECT * FROM vacancy_upload WHERE  vacancy_id=$ID";
   $result = mysqli_query($con,$sql);
    //echo $result;
   $file = mysqli_fetch_assoc($result);
   $file_path = 'UploadedFiles/'.$file['vacancy_file'];
   //echo $result;
   if(file_exists($file_path)){
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file_path));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('uploads/' . $file['name']));
    readfile('uploadedFiles/' . $file['vacancy_file']);
      
            
        }else{
            echo"error";
        }

    }


