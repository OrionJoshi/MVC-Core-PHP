<?php 

//    spl_autoload_register('myAutoloader');

//    function myAutoloader($className) {
//        $path = "classes/";
//        $extention = ".class.php";
//        $fullPath = $path . $className . $extention;

//        if(!file_exists($fullPath)) {
//            return false;
//        }

//        include_once $fullPath;
//    }
// Include auto class autoload function

include 'includes/class-autoload.inc.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //for Viewing DAta
    $testObj1 = new UserView();
    $testObj2->showUser("jojj");

    //For Creating User
    $testObj2 = new UsersContr();
    $testObj2->createUser("jojj","ksnjf", "121-3-3");

    //For Updating Users
    $testObj3 = new UsersContr();
    $testObj3->userUpdate(1, "josh", "man", "12333");

    //For Delete User
    $testObj3 = new UsersContr();
    $testObj3->userDelete(1)
?>
</body>
</html>