<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contack app</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            aschit contact form
        </h1>
</header>
<h2>Update Contact</h2>

<?php
include 'db.php';
$id=$_GET['id'];
$sql="SELECT * FROM name WHERE id=".$id;
$result= mysqli_query($conn,$sql);

if ($result){
    $row=mysqli_fetch_assoc($result);
    $contactname=$row['name'];
    $contactphone=$row['phone'];

}

?>
<form action="editaction.php" method="post">
    <div class="main">
        <label for="name">Name:</label> <br>
        <input type="text" name="name" id="name" value="<?php global $contactname; echo $contactname?>" required> <br>
        <label for="contact">Number:</label> <br> 
        <input type="contact" name="contact" id="contact" value="<?php global $contactphone; echo $contactphone?>" required> <br> <br>
        <input type="hidden" name="name" id="id" value="<?php global $id; echo $id?>" required>
        <input type="submit" value="Update">
        
        
    </div>
</form>

    
</body>
</html>