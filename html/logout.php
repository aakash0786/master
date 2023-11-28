<form>
	<input type="submit" name="logout" value="loguot">
</form>

<?php


session_start();

echo $_SESSION['un'],"<br>";

echo $_SESSION['ups'];

if(isset($_REQUEST['logout'])){

	session_unset();
	session_destroy();

	header("Location:aakash\login1.php");
}
?>


