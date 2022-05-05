<?php
    $name=$_POST['Name'];
    $mail=$_POST['Email'];
    $message=$_POST['Message'];

    //Database connection
    $conn=new mysqli('localhost','root','','contact');
    if($conn->connect_error){
      die('connection failed :'.$conn->connect_error);
    }else{
      $stmt=$conn->prepare("insert into registration(name,mail,message) values(?,?,?)"));
      $stmt->bind_param("sss",$name,$mail,$message);
      $stmt->execute();
      echo "registration successfull";
      $stmt->close();
      $stmt->close();
    }
    

?>