<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "database.php";
    
    $username =$_POST['usname'];
    $date =$_POST['doj'];
    $position =$_POST['job'];
   
    $sql ="SELECT * FROM `hello1` WHERE username ='$username' AND DOJ ='$date' AND position='$position'";
    $result =mysqli_query($conn,$sql);
    $num =mysqli_num_rows($result);
    if($num >=1){
        
        session_start();
        $_SESSION['generate']= true;
        $_SESSION['username']=$username;
        $_SESSION['DOJ']=$date;
        $_SESSION['position']= $position;
        header("location:\php-pdf-master\php-pdf-master\source.php");
    }
    
    


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create certificate using PHP</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

 

    <div class="main-block">
        <div class="header">
            GET YOUR CERTIFICATE
        </div>
        <div class="body">
            <form action='' method="POST">
                <input type="text" name="usname" placeholder="Username" id="text" required>
                <input type="text" name="doj" placeholder="DOJ" id="date" required>
                <input type="text" name="job" placeholder="Job Title" id="title" required>
                <input type="submit" value="Submit" id="sub">
            </form>
        </div>
       
    </div>
    
    <script src="index.js"></script>
</body>
</html>