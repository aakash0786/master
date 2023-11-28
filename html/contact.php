
<!DOCTYPE html>
<html>
<head>
    <title>POKEMON WEBSITE</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

</head>
<body>
    <header>
        <nav>
            <div class="logo">
                Pokemon<span>X</span>Y
            </div>
            <div class="menu">
                <a href="pokemon.html">Home</a>
                <a href="about.html">About</a>
                <a href="gallery.html">Gallery</a>
                <a href="contact.php">Post</a>
            </div>
            <div class="icon">
                <i class="fa fa-search"></i>
                <a href="aakash/login1.php">Login</a>
            </div>
        </nav>
        <section class="h-text">
        	<div class="contenter">
        		<div class="row">
        			<div class="col-lg-6 m-auto">
        				<div class="card">
        					<div class="card-title">
        						<h2>File Post</h2>
        						<hr>
        					</div>
        					<div class="card-body">
        						<form  method="post" enctype="multipart/form-data">
        							<input type="file" name="postdata"><br>
        							<textarea name="desc"></textarea><br>
        							<button name="uploadbutton">Post img</button>        								
        						</form>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>            
        </section>        
    </header>
</body>
</html>  
<?php

if(isset($_POST['uploadbutton'])){

	$name=$_FILES['postdata']['name'];
	$temp_name=$_FILES['postdata']['tmp_name'];

	$desc=$_POST['desc'];

	move_uploaded_file($temp_name,"uploaded/".$name);
	echo "<script>alert('file uploaded successfully');</script>";

	$conn=new mysqli("localhost","root",'','ad');

	$conn->query("insert into ad values('$name','$desc')");
	$conn->close();
}
?>

<img src="<?php echo 'uploaded/'.$name ?>">















