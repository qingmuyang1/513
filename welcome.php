<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>

<html lang="en">
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
    <main role="main" class="probootstrap-main js-probootstrap-main">
    <h1 style="text-align:center;" class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <div style="text-align:center;">  
    <p >
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <a href="shopping-index.php" class="btn btn-warning">Go to shopping cart</a>
        <a href="add2.php" class="btn btn-warning">Complete information</a>
    </p>
    <div>
    <p>Made with: <a>21IT1, nero (zhao lixing) 213190639</a></footer>
</body>
</html>