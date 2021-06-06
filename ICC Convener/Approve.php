<html>
<head>
    <title>Add Comment Page</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<?php

$name = $_POST['name'];
$comment = $_POST['comment'];
session_start();
$_SESSION['name'] = $name;
$_SESSION['comment'] = $comment;

?>
<h1 class = "textcolor">Hi, <?php echo $name; ?> !</h1>

<div class = "contact-form">
    
    <h2> Your Comment Was - </h2>
    <p><?php echo $comment;?></p>
    <br>
    <p>Are you sure to submit this comment ?</p>
    
    <a href="/ICC Convener/Redirect.php" target="_parent"><button type="submit" class="button2">Submit</button></a>
   
    <a href="/ICC Convener/Add Comment.php" target="_parent"><button type="submit" class = "button">Take Me Back</button></a>
</div>


</html>