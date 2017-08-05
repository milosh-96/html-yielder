<?php 

   $file = file('index.html');
   if(isset($_GET['path'])) {
    $file = file($_GET['path'] . '.html');
   }
   require_once($_SERVER['DOCUMENT_ROOT'].'/inc/variables.php');
   foreach($file as $line) {
       foreach($variables as $key => $value) {
         if(strpos($line,'{'.$key.'}')) {
             $line = str_replace('{'.$key.'}',$value,$line);
         }
       }
       echo $line;
   
   }
   

?>