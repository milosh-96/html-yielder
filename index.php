<?php 

   $file = file('index.html');
   if(isset($_GET['path'])) {
       $file = file($_GET['path'] . '.html');
   }
 
   $vars =
       [
           "name"=>"Kaya",
           "service1"=>"Graphics",
           "service2"=>"Video"
       ];
   foreach($file as $line) {
       foreach($vars as $key => $value) {
         if(strpos($line,'{'.$key.'}')) {
             $line = str_replace('{'.$key.'}',$value,$line);
         }
       }
       echo $line;
   
   }
   

?>