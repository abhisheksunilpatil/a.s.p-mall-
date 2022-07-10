<?php
 include('connection.php');  
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $cpassword = $_POST['cpassword']; 
 
 if($con->connect_error){
    die('Connection Failed : '.$con->connect_error);
 }else{
    $stmt = $con->prepare("insert into login(username,email,password,cpassword)
            values(?,?,?,?)");
    $stmt->bind_param("ssss",$username,$email,$password,$cpassword);
    $stmt->execute();
    echo"registration successfully!!";
    $stmt->close();
    $con->close();
    header("Location:product.html");
 }
 

?>