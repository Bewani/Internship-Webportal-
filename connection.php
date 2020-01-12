<?php


function dbConnection(){
    $con = mysqli_connect("localhost","root","","internship_management");
    if(!$con){
        die("Connection Faild".mysqli_connect_error());
        }
        return $con;

}