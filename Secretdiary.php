<?php
$username=$_POST['username']
$password=$_POST['password']
$username=$_POST['username']
$password=$_POST['password']
$conn= new mysqli('localhost','root','','secretdiary');
if($conn->connect_error)
{
    die('Connection Failed:'.$conn->connect_error)    
}
else
{
$stmt=$conn->prepare("insert into secreydiary(username,emailid,password)
values(?,?,?)")
$stmt->bind_param("sss",$username,$emailid,$password);
$stmt->execute();
echo "registration successful";
$stmt->close();
$conn->close();
}
?]