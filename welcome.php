<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Welcome</title>
</head>
<body>
    
    

         <style>
            body {
            background-image:url('mg.jpg');
            background-size: cover;
                background-attachment: fixed;
             }
                h1{
                    color:dodgerblue
                    text-shadow: 2px 2px 4px #000000;
                
                }
            </style>
        <h1  class="Title">BIONIC ENGINEERS</h1>
          <br> 
        
     <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <pre><p> <h2> <i>"The first step towards getting somewhere
    is to decide you're not going to 
    stay where you are"</i></h2> </p> </pre> 
   
    <a href="resume_index.html"> 
    <button type="button" style="background-color:LightBlue;height:50px;width:120px;align:center;"> CREATE CV </button> </a>
    
    <br>
    
    <a href="logout.php"><h2>Logout</h2></a>
    
</body>
</html>