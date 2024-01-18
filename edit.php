<?php
// include database connection file
include_once("config_2.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$Sname=$_POST['Sname'];
	$Fname=$_POST['Fname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET Fname='$Fname',Sname='$Sname',email='$email',mobile='$mobile',city='$city',address='$address' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: CRUD_index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$Fname = $user_data['Fname'];
	$Sname = $user_data['Sname'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
	$city = $user_data['city'];
	$address = $user_data['address'];
}
?>
<html>
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
	<a href="CRUD_index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Frist_Name</td>
				<td><input type="text" name="Fname" value=<?php echo $Fname;?>></td>
			</tr>
			<tr> 
				<td>last_Name</td>
				<td><input type="text" name="Sname" value=<?php echo $Sname;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
			</tr>
			<tr> 
				<td>City</td>
				<td><input type="text" name="city" value=<?php echo  $city;?>></td>
			</tr>
			<tr> 
				<td>address</td>
				<td><input type="text" name="address" value=<?php echo  $address;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

