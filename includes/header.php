<?php include 'includes/config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?=$title?> </title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/styles.css" />
     
    <link rel="stylesheet" href="css/lightbox.css"/>
    <link rel="stylesheet" href="css/lightbox.min.css"/>
    <link rel="stylesheet" href="css/form.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?                    family=Cardo&display=swap" rel="stylesheet">
    
   <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<!--    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>-->
    <script src="js/script.js"></script>
    
    
</head>
<body class="<?php echo $body ;  ?> ">


    <div class="wrapper"> 
<header>


<div id="headrow" >
 
 <a href="index.php"><img class="logo1" src="images/logo.png"     alt="logo"></a> 
  
</div>

<nav id="cssmenu">
  <ul>
      
    <?=makeLinks ($nav1) ?>

</ul>
  
</nav>
  
   <h1 class="h1top" > <a href="lessons.php">  Music <br>
A Joy for Life!
  </a> 
   </h1>
   
</header>

<section>
 <h2 class="pageID"> <?=$PageID?> </h2>        
