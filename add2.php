<html>
<head>
	<title>Add Users</title>
	<title>Aside - Free HTML5 Bootstrap 4 Template by ProBootstrap.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Free HTML5 Website Template by ProBootstrap.com" />
  <meta name="keywords"
    content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="ProBootstrap.com" />

  

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">

  <style>    table {  
    border-radius: 10px;  
    border: 2px solid green;  
  }  
    
    .banner {  
        background-color: #f8f9fa; 
        text-align: center;  
        padding: 30px; 
        color: #333; 
        font-size: 24px;  
    }  
</style>  
</head>

<body>
	    
<aside class="probootstrap-aside js-probootstrap-aside">
      <a href="#" class="probootstrap-close-menu js-probootstrap-close-menu d-md-none"><span class="oi oi-arrow-left"></span> Close</a>
      <div  data-animate-effect="fadeInLeft">
        
        <a href="index.html" class="mb-2 d-block probootstrap-logo">Aside</a>
        <img src="s3.jpg" alt="示例图片">
      </div>
      <div class="probootstrap-overflow">
        <nav class="probootstrap-nav">
          <ul>
            <li  data-animate-effect="fadeInLeft"><a href="index.html">Home</a></li>
            <li  data-animate-effect="fadeInLeft"><a href="about.html">About</a></li>
            <li  data-animate-effect="fadeInLeft"><a href="services.html">Services</a></li>
            <li  data-animate-effect="fadeInLeft"><a href="portfolio.html">Portfolio</a></li>
            <li   data-animate-effect="fadeInLeft"><a href="contact.html">Career</a></li>
            <li  data-animate-effect="fadeInLeft"><a href="login.php">Shopping Cart</a>
			<li  data-animate-effect="fadeInLeft"><a href="map.html">Contact</a>
			<li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li ><li > <li ><li ><li ><li ><li ><li ><li ><li >
        
        <footer  data-animate-effect="fadeInLeft">
          
          <p>Made with: <a>21IT1, nero (zhao lixing) 213190639</a></footer>
      </div>
    </aside>

	<main role="main" class="probootstrap-main js-probootstrap-main">
	<a href="welcome.php">Go to Home</a>
	<br/><br/>

	<form action="add2.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>FName</td>
				<td><input type="text" name="Fname"></td>
			</tr>
			<tr> 
				<td>SName</td>
				<td><input type="text" name="Sname"></td>
			</tr>
			<tr> 
				<td>city</td>
				<td><input type="text" name="city"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr> 
				<td>address</td>
				<td><input type="text" name="address"></td>
            </tr>
			<tr>
				<td>username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$Fname = $_POST['Fname'];
		$Sname = $_POST['Sname'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$city = $_POST['city'];
		$address = $_POST['address'];
		$username = $_POST['username'];

		
		// include database connection file
		include_once("config_2.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(Fname,Sname,city,email,mobile,username,address) VALUES('$Fname','$Sname','$city','$email','$mobile','$username','$address')");
		
		// Show message when user added
		echo "User added successfully. <a href='welcome.php'>BACK</a>";
	}
	?>
</body>
</html>
