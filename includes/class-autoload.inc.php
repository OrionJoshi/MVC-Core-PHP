<?php 

   spl_autoload_register('myAutoloader');

   function myAutoloader($className) {
       $path = "classes/";
       $extention = ".class.php";
       $fullPath = $path . $className . $extention;

       if(!file_exists($fullPath)) {
           return false;
       }

       include_once $fullPath;
   }
?>