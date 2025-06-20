<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/style/style.css">
        <link rel="icon" href="../assets/images/dailyVacancy.png" type="image/x-icon">
        <title>Daily Vacancy | እለታዊ የቅጥር ማስታወቂያ </title>

    </head>
    <body>
        <header class="nav" style="position: fixed;">
            <div class="nav-logo">
                <img src="resource/assets/images/dailyVacancy.png" width="50px" height="46px"  alt=""><p style="position: absolute; display: inline; top: -12px; margin-left: 5px;" > Daily Vacancy</p>
            </div>
            <div class="menu"> 
                <input type="checkbox" id="chkbox" class="chkbox">
                <label for="chkbox" class="chkbox-label" >
                    <div class="menu-style-1"></div>
                    <div class="menu-style-2"></div>
                    <div class="menu-style-3"></div>
                </label> 
                <form action="" class="search-form">
                    <input class="search" type="search" name="search" placeholder="Search">
                    <input class="search-btn" type="image" src="resource/assets/images/search.png" width="25px" height="25px" alt="search">
                </form>
                <ul class="nav-group">
                    <li class="nav-list"><a class="nav-link"  href="home">Home</a></li>
                    <li class="nav-list"><a class="nav-link"  href="vacancy">Vacancy</a></li>
                    <!-- <li class="nav-list"><a class="nav-link"  href="PostVacancy">Post-Vacancy</a></li> -->
                    <li class="nav-list"><a class="nav-link"  href="About">About-us</a></li>
                    <li class="nav-list"><a class="nav-link"  href="Contact">Contact-us</a></li>
                    <?php
                    if(isset($_SERVER['user'])){

                    }else{
                        echo '
                        <li class="nav-list"><a class="nav-link login-btn"  href="SignUp">Sign-Up</a></li>
                        <li class="nav-list"><a class="nav-link login-btn"  href="Login">Login</a></li> 
                        ';
                    }
                    
                    ?>
                    
                </ul>
            </div>
            
        </header>
        


