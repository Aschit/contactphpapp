<?php
include 'db.php';
$id= $_GET['id'];

$sql="delete from name where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:index.php");
}
?>