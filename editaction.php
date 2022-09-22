<?php
include 'db.php';
$id = $_POST['id'];
$name= $_POST['name'];
$contact= $_POST['contact'];


$sql="UPDATE name SET name='$name', phone='$contact' where id=$id";
$result= mysqli_query($conn,$sql);
if($result){
    header("location:index.php");
}
?>