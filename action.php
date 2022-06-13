
<?php

$conn=mysqli_connect('localhost','root','','vote');
$_SESSION["ret"] = FALSE;
$User=$_POST['name'];
$address=$_POST['address'];
$id=$_POST['Id'];
$votes=$_POST['votes'];
$photo=$_FILES['photo']['name'];
$tempname = $_FILES['photo']['tmp_name'];   
     
        move_uploaded_file($tempname,"images/$photo"); 
 
$query="INSERT INTO regform (`name`, `address`, `cnic` , `totalvotes`, `image`) VALUES ('$User','$address','$id','$votes','$photo')";

$res=mysqli_query($conn,$query);
if ($res)
{
    
    header('Location: retrive.php');
    echo "DELETED";
    $_SESSION["ret"] = TRUE;
    unset($_SESSION['username']);
    
}
else{
    echo "Values not inserted";


}



?>