<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename ($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename ($_SERVER['PHP_SELF']));

//echo THIS_PAGE; 
//die;


switch (THIS_PAGE){ 

case 'index.php';
        $title = "Donna’s Music Studio";
        $body = 'home';
        $PageID = 'Donna\'s Music Studio';
break; 
        
        
case 'about.php';
        $body = 'about';
        $title = "About Music studio";    
        $PageID = 'About Donna';
break;
        
        
case 'lessons.php';
        $body = 'lessons';
        $title = "lessons";    
        $PageID = 'Lessons Page!';
break;
        
case 'contact.php';
        $body = 'contact';
        $title = "Contact Donna ";
        $PageID = 'When you are ready to experience the joy of learning music<br> please fill out the form below.';
break;
        
case 'policy.php';
        $body = 'policy';
        $title = "policy";    
        $PageID = 'Tuitions';
break;
     
        
        
case 'webcam.php';
        $title = "puppies";
        $logo = 'fa-pencil-square-o';
        $PageID = 'LIVE STREAM FOR Puppies!!';
break;
        
 
  
        
        
default : 
        $title = 'THIS_PAGE' ;
       
        $PageID = 'Welcome';  
}


$nav1 ['index.php'] = "HOME";
$nav1 ['about.php'] = "ABOUT";
$nav1 ['lessons.php'] = "LESSONS";
$nav1 ['contact.php'] = "CONTACT";
$nav1 ['policy.php'] = "POLICY";



function  makeLinks($nav1)
 {
     $myReturn = ''; 
   foreach($nav1 as $url => $text){
    
    if ($url == THIS_PAGE ){
        
        $myReturn .= " <li><a class=\"selected\" href=\"$url\">$text</a></li>";
    }else{ 
        $myReturn .= " <li><a href=\"$url\">$text</a></li>";
    }
 
   }  
     return $myReturn;
 }
    
?>


