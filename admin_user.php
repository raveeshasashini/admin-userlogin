<?php

    $servername='localhost';
    $username='191.96.56.1';
    $password='eK4y*3RJt=8';
    $db='u812963415_ruhunafot';

        $conn=new mysqli($servername,$username,$password,$db);


        if($conn->connect_error){
            die("connection failed= ".$conn->connect_error);
        }

        

        $sql3="INSERT INTO User (UID,UName,Password) VALUES ('U00001','U01','U01Pass'),('U00002','U02','U02Pass'),('U00003','U03','U03Pass')";
        /*if($conn->query($sql3)==TRUE){
            echo "New record add successfully";
        }*/

        if($conn->query($sql)!=FALSE){
            die("Create failed= \n ".$conn->error);
        }

        // CREATE TABLE Admin

        if($conn->query($sql2)!=FALSE){
            die("Create failed=\n".$conn->error); 
        }
        
        $sql4="INSERT INTO User (UID,UName,Password) VALUES ('U00001','U01','U01Pass'),('U00002','U02','U02Pass'),('U00003','U03','U03Pass')";
        if($conn->query($sql4)==TRUE){
            echo "New record add successfully";
        }
        else{
            echo "New record failed=".$conn->error;
        }
    $conn->close();


?>