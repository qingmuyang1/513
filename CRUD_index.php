<?php
/**
* Simple PHP CRUD Script
* Developed by TutorialsClass.com
* URL:  http://tutorialsclass.com/code/php-simple-crud-application
**/

// Create database connection using config file
include_once("config_2.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <style>  
	
   table {  
    border-radius: 10px;  
    border: 2px solid green;  
  }  
    
  td {  
    font-size: 24px; /* 设置字体大小 */  
    font-weight: bold; /* 加粗字体 */  
    color: white; /* 设置字体颜色为白色 */  
    background-color: green; /* 设置背景颜色为绿色 */  
  }  
</style>  
</head>
<body>
<aside class="probootstrap-aside js-probootstrap-aside">
      <a href="#" class="probootstrap-close-menu js-probootstrap-close-menu d-md-none"><span class="oi oi-arrow-left"></span> Close</a>
      <div  data-animate-effect="fadeInLeft">
        
        <a href="index.html" class="mb-2 d-block probootstrap-logo">Aside</a>
        <img src="s3.jpg" alt="图片">
      </div>
      <div class="probootstrap-overflow">
        <nav class="probootstrap-nav">
          <ul>
            <li ><a href="index.html">Home</a></li>
            <li ><a href="about.html">About</a></li>
            <li ><a href="services.html">Services</a></li>
            <li ><a href="portfolio.html">Portfolio</a></li>
            <li ><a href="contact.html">Career</a></li>
            <li ><a href="login.php">Shopping Cart</a>
            <li ><a href="map.html">Contact</a>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
            <li>
          </ul>
        </nav>
        <footer data-animate-effect="fadeInLeft">
          <ul class="list-unstyled d-flex probootstrap-aside-social">
            <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
            <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
            <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
          </ul>
          <p>Made with: <a>21IT1, nero (zhao lixing) 213190639</a></footer>
      </div>
    </aside>
    <main role="main" class="probootstrap-main js-probootstrap-main">

<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>FName</th> <th>SName</th> <th>Mobile</th><th>city</th> <th>Email</th> <th>address</th><th>username</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['Fname']."</td>";
        echo "<td>".$user_data['Sname']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['city']."</td>";
        echo "<td>".$user_data['email']."</td>";  
        echo "<td>".$user_data['address']."</td>";   
        echo "<td>".$user_data['username']."</td>";   
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <main>
</body>
</html>
