<?php

include ('./connection.php');

$con = dbConnection();

    return $con;
  // var $fileTitle, $fileDescription, $File;


    function UploadFile(){
        global $con; 
        
            if ($_FILES['files']) {
                $files= $_FILES['files'];
                $fileName = $_FILES['files']['name'];
                $fileTmpName = $_FILES['files']['tmp_name'];
                $fileSize = $_FILES['files']['size'];
                $fileError = $_FILES['files']['error'];
                $fileType = $_FILES['files']['type'];
            
                $Title = $_POST["title"];
                $description = $_POST["textarea"];
                //check the function
                //$com_Id="COM_54";
                //$pname = rand(1000,10000). "-" .$fileName;
              
                $fileExt = explode('.' , $fileName);
                $fileActualExt = strtolower(end($fileExt));
            
                $allowed = array('pdf','zip','rar','docx','jpg');
            
                if(in_array($fileActualExt,$allowed)){
                        if($fileError === 0){
                            if($fileSize < 1000000){
                                $fileNameNew = uniqid('',true).  "." . $fileActualExt;
                                    $fileDestination = 'UploadedFiles/'. $fileNameNew;
                                    move_uploaded_file($fileTmpName,$fileDestination);
            
                                    // $sql = "INSERT INTO vacancy_upload(Title,About,Vacancy_File,Com_ID)VALUES('$Title','$description','$fileNameNew','$com_Id')";
                                    $sql = "INSERT INTO `vacancy_upload`(`vacancy_title`, `vacancy_description`, `vacancy_file`) VALUES ('$Title','$description','$fileNameNew')";
                                    if(mysqli_query($con,$sql)){
                                        
                                        echo "File Uploaded Successfully";
                                        //return error($error);
            
                                    }else{
                                        echo "Error  while uploading files!";
                                        //return error($error);
                                    }
                             
                            }else{
                               echo "The file size is too big";
                                //return error($error);
                            }
            
                        }else{
                           echo "Try again"; 
                           // return error($error);
                        }
            
                }else{
                   echo "Please upload file that having valid extention";
                    //return error($error);
            
                }

               
            }else{
                echo  "Please Upload file before uploading";
               // return error($error);
            }
            
        
        
    }

    
function ViewFiles(){
    global $con;

    $sql = "SELECT * FROM vacancy_upload";
    $result_set = mysqli_query($con,$sql);
    $files = mysqli_fetch_all($result_set, MYSQLI_ASSOC);

    return $files;
}

/*function error($error){
    $Error = $_GET['$error'];

    return $Error;

}*/


 /*$localhost = 'localhost';
 $DBname ='project';
 $DBuser ='root';
 $DBpassword ='';

 $conn = mysqli_connect($localhost, $DBuser, $DBpassword,$DBname,);



if(isset($_POST['submit'])){
    $files= $_FILES['files'];
    $fileName = $_FILES['files']['name'];
    $fileTmpName = $_FILES['files']['tmp_name'];
    $fileSize = $_FILES['files']['size'];
    $fileError = $_FILES['files']['error'];
    $fileType = $_FILES['files']['type'];

    $Title = $_POST["title"];
    $description = $_POST["textarea"];
    //$pname = rand(1000,10000). "-" .$fileName;
  
    $fileExt = explode('.' , $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('pdf','zip','rar','docx','jpg');

    if(in_array($fileActualExt,$allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){
                    $fileNameNew = uniqid('',true).  "." . $fileActualExt;
                        $fileDestination = 'UploadedFiles/'. $fileNameNew;
                        move_uploaded_file($fileTmpName,$fileDestination);

                        $sql = "INSERT into uploaded_vacant(Title,Des,Document)VALUES('$Title','$description','$fileNameNew')";

                        if(mysqli_query($conn,$sql)){
                            echo "File Uploaded Successfully";

                        }else{
                            echo "Error !";
                        }
                        //echo "Successfully Uploaded";

                }else{
                    echo "The file size is too big";
                }

            }else{
                echo "There is an error"; 
            }

    }else{
        echo "Please upload file that having valid extention";

    }
}*/

