<html>
<head>
    <title>Add Comment Page</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <style>
table {
position: relative;
top: 10px;
left: 12%;

border-collapse: collapse;
width: 75%;
margin: 10px;
color: #588c7e;
background-color: rgba(0, 0, 0, 0.5); 
font-size: 25px;
text-align: center;
}
th {
background-color: transparent;
color: white;
text-align: center;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
    color : white;}
 td, th {
  border: 1px solid #ddd;
  padding: 8px;
  color: white;
}
</style>
    
</head>

<?php
session_start();


$servername = 'localhost';
$username = 'root';
$pass = '';
$db = 'Comment';
$conn = mysqli_connect($servername,$username,$pass,$db);
if(!$conn){
die("Sorry we failed to connect : ". mysqli_connect_error());
}

?>
<?php


    
        $name = $_SESSION['name'];
        $comment = $_SESSION['comment'];
        
$sql = "INSERT INTO tables(Name,Comments) VALUES('$name' , '$comment')";


$result = mysqli_query($conn,$sql);

if($result){

}
else{
echo "The Record was not inserted. Error - ".mysqli_error($conn);
}


?>

<body>
    <table>
        <tr>
            
            <th>Name</th>
            <th>Comment</th>
            
        </tr>
        <?php
        
            $show = "SELECT DISTINCT * FROM tables ";
            $natija = mysqli_query($conn,$show);
            
            while($row = mysqli_fetch_array($natija)) {
                echo "<tbody>";
                echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Comments'] . "</td>";
            
                echo "</tr>";
                echo "</tbody>";
            
            }
            echo "</table>";
       
        ?>
    </table>
</body>    

<div class = "contact-form">
    <h2>Add Comment</h2>
    <form action ="/ICC Convener/Approve.php" method = "post">
    <p>Name</p><input placeholder="Enter Your Name" id = "name" name = "name" type="text">
    <p>Your Comment</p><input placeholder="Add Your Comment" id = "comment" name = "comment" type="text" >
    
    <a href="/ICC Convener/Approve.php" target="_parent"><button type="submit" class = "button">Submit</button></a>
</form>









</html>