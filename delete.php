<?php
$_SESSION["delacc"] = FALSE;
$conn=mysqli_connect('localhost','root','','vote');
$name=$_REQUEST['name'];
$query = "DELETE FROM regform WHERE name='$name'";
$res = mysqli_query($conn,$query);
if($res)
{
    header('Location: retrive.php');
    echo "DELETED";
    $_SESSION["delacc"] = TRUE;
    unset($_SESSION['username']);
  
} 


?>