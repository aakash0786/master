<?php
error_reporting(E_ERROR | E_PARSE);

$hostname = "localhost";
$username = "root";
$userpass = "";
$userDB = "aakash";

$UserName = $_REQUEST ['userName'];
$UserPass = $_REQUEST ['userPass'];
$UserLogin = $_REQUEST ['userLogin'];

$con = new mysqli($hostname,$username,$userpass,$userDB);

if(isset($UserLogin)){
    $quryy = "insert into userdata values ('$UserName','$UserPass')";
    // header('Location:dashboard.php');

    try{
        $con->query($quryy);
    $con->close();

    }

    catch(Exception $e){
        echo "<script>alert('can not insert Duplicate entry')</script>";
    }
    
}
// else{
//     echo"Please check your connection";
// }


?>