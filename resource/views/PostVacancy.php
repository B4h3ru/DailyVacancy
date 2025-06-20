<?php include_once 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Vacancy</title>
    <link rel="stylesheet" href="../../ADV/resource/assets/style/login.css" class="s">
    

</head>
<body>
    <h1 class="container-first center">Post Vacancy</h1>
    <section class="section-style" id="postvacancy" style="border-style: none; color:white;" >
        <div>
            <form action="" method="POST">
                <div class="input-div">
                    <label class="input-style" for="title">Vacancy Title *</label>
                    <input class="input-style" type="text" name="title" placeholder="Enter vacancy title" required><br>
                </div>
                <div class="input-div">
                    <label class="input-style" for="companyName">Company Name *</label>
                    <input class="input-style" type="text" name="companyName" placeholder="Enter company name" required>
                </div>
                <div class="input-div">
                    <p class="input-style">Starting date : <input class="" type="date" name="startingdate" > ending date: <input class="" type="date" name="enddate" required> </p>
                </div>
                <div class="input-div">
                    <p class="input-style">Working Time : <select name="workingtime" id="" required> 
                        <option value="Full-time">Full time</option>
                        <option value="Part-time">Part time</option>
                    </select> Location :<input type="text" name="location" placeholder="Enter Work location" > </p>
                </div>
                <div class="input-div">
                    <p class="input-style">Select image : <input class="" type="file" name="startingdate" ></p>
                </div>
                <div class="input-div">
                    <label class="input-style" for="vacancycategory">Select vacancy Category *</label>
                    <select class="input-style" name="vacancycategory" id="" required> 
                        <option value="Banking-insurance">Banking and insurance</option>
                        <option value="Sales-markating">Sales & Markating</option>
                        <option value="IT-telecom">IT & telecom</option>
                        <option value="Cons-engineering ">Cons & Engineering </option>
                        <option value="Finance-accounting">Finance & Accounting</option>
                        <option value="Managment">Managment</option>
                        <option value="NGO">NGO</option>
                        <option value="Freelancing">Freelancing</option>
                        <option value="Other Vacancy">Other Vacancy</option>
                    </select>
                </div>
                <div class="input-div">
                    <label class="input-style"  for="Vacancydescription" required> Vacancy Description *</label>
                    <textarea class="input-style"  name="Vacancydescription" cols="50" rows="10"  id="" placeholder="Enter Your Vacancy Description" required></textarea>
                </div>
                <div class="input-div">
                    <label class="input-style" for="applylink">Vacancy Applying Link or E-mail address *</label>
                    <input class="input-style" type="url" name="applylink" placeholder="Enter Applying link or Email address" required> 
                </div>
                <button class="btnn">POST</button><br><br>
            </form>

         </div>

     </section>
    
    </body>
</html>
<?php include_once "footer.php" ?>
