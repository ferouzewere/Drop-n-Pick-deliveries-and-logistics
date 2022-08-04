<?php

//Database Connection

$conn = mysqli_connect('localhost','root','', 'library');
// if($conn->connect_error){
//     die('Connection Failed : '.$conn->connect_error);
// }
// else{
//     $stmt = $conn->prepare("insert into registration(fullName, pNum, email, password1, password2) values(?,?,?,?,?)");
//     $stmt->bind_param("sisss",$fullName, $pNum, $email, $password1, $password2);
//     $stmt->execute();
//     echo "You have successfuly created an account";
//     $stmt->close();
//     $stmt->close();

// }
$rs = mysqli_query($conn, $sql);

//get the post records
$fullName = $_POST['fullName'];
$pNum = $_POST['pNum'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

//database insert into SQL code
$sql = "INSERT INTO 'registration' ('Id', 'fullName', 'pNum', 'email', 'password1', 'password2') VALUES ('0', '$fullName', '$pNum', '$email', '$password1', '$password2')";

$rs = mysqli_query($conn, $sql);

if($rs)
{
    echo "Account created successfuly!";
}

?>