<?php
$servername='191.96.56.1';
$username='u812963415_ruhunafot';
$password='eK4y*3RJt=8';
$db='u812963415_ruhunafot';

    $conn=new mysqli($servername,$username,$password,$db);


    if($conn->connect_error){
        die("connection failed= ".$conn->connect_error);
    }

    $sql1="INSERT INTO user_table (UID,UNAME,U_password,Approval,Approval_bY_UID) VALUES('U00001','U01','U01Pass','null','null'),('U00002','U02','U02Pass','null','null'),('U00003','U03','U03Pass','null','null'),('U00004','U04','U04Pass','null','null')";
    if($conn->query($sql1)==False){
    die("Create failed= \n ".$conn->error);
    }


    $sql2="INSERT INTO admin_user_table (AID,ANAME,A_password,A_Level) VALUES('A00001','A01','A01Pass','null'),('A00002','A02','A02Pass','null'),('A00003','A03','A03Pass','null')";
    if($conn->query($sql2)!=TRUE){
        die("Create failed= \n ".$conn->error);
    }

    $sql3="UPDATE admin_user_table 
            SET UID=AID";
    if($conn->query($sql3)!=TRUE){
        die("Create failed= \n ".$conn->error);
    }
        
   $conn->close();
?>