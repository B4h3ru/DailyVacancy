<?php 
// require_once 'resource/views/header.php'; 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <title>Document</title> -->
    <!-- <link rel="stylesheet" href="resource/assets/style/style.css"> -->

     <?php
     echo '<link rel="stylesheet" href="resource/assets/style/style.css">';
     echo '<link rel="icon" href="resource/assets/images/dailyVacancy.png" type="image/x-icon">';
    //  echo '<link rel="stylesheet" href="ADV/resource/assets/style/login.css" >';
      ?>
</head>
<body>
    <?php
// Include the controller file
// require_once "Controller.php";

// Get the request URL path (e.g., /create)
$request = trim($_SERVER["REQUEST_URI"], "/");

// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Simple routing logic
if ($request == "dailyvacancy/home" || $request == "dailyvacancy") {
    include "resource/views/index.php";
    // $controller = new Controller();
    // $controller->create();
}
else if ($request == "dailyvacancy/vacancy"){
    include "resource/views/Vacancy.php";
}
else if ($request == "dailyvacancy/PostVacancy"){
    include "resource/views/PostVacancy.php";
}
else if ($request == "dailyvacancy/About"){
    include "resource/views/About.php";
}
else if ($request == "dailyvacancy/Contact"){
    include "resource/views/Contact.php";
}
else if ($request == "dailyvacancy/SignUp"){
    include "resource/views/signup.php";
}
else if ($request == "dailyvacancy/Login"){
    include "resource/views/login.php";
}
else {
    echo "404 - Page Not Found";
}
?>


</body>
</html>


