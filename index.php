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
<form action="Adddata.php" method="post">
    <div class="main">
        <label for="name">Name:</label> <br>
        <input type="text" name="name" id="name" required> <br>
        <label for="contack">Number:</label> <br> 
        <input type="contact" name="contact" id="contact" required> <br> <br>
        <input type="submit" value="save">
        
        
    </div>
</form>
<hr>
<h2>List of contact</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Actions</th>
    </tr>
    <?php
    include 'db.php';
    $sql="SELECT*FROM name";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $phone=$row['phone'];

            ?>
            <tr>
                <td><?php echo $name ?></td>
                <td><?php echo $phone ?></td>
                <td>
                    <a href="http:delete.php?id=<?php echo $id?>">Delete</a>
                    <a href="http:edit.php?id=<?php echo $id?>">Update</a>
                </td>
            </tr>

            <?php

            
        }

    }

  ?>
    
</table>
    
</body>
</html>