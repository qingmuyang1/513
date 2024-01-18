<?php  
// 获取已上传的文件名列表（如果存在）  
$uploaddir = 'uploads/'; // 上传文件的目录（确保此目录存在）  
$uploadfiles = glob($uploaddir . '*.{pdf,docx}', GLOB_BRACE); // 获取所有上传的PDF和DOCX文件名列表（数组）  
?>  
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>上传结果</title>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free HTML5 Website Template by ProBootstrap.com" />
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="ProBootstrap.com" />
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet"> -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <style>  
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
            <li ><a href="contact.html">Contact</a></li>
            <li ><a href="login.php">Shopping Cart</a>
            <li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li><li>
          </ul>
        </nav>
        <footer  data-animate-effect="fadeInLeft">
          
          <p>Made with: <a>21IT1, nero (zhao lixing) 213190639</a></footer>
      </div>
    </aside>
    <main role="main" class="probootstrap-main js-probootstrap-main">
    <h2>Uploaded files</h2>  
    <?php foreach ($uploadfiles as $file): ?>  
        <p><?php echo $file; ?></p> 
    <?php endforeach; ?>  
    <a href="index.html">Return to Home</a> 
    
    <main>
</body>  
</html>