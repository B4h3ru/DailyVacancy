<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/style/login.css">
    <link rel="shortcut icon" href="../../../resource/assets/images/dailyVacancy.png" type="image/x-icon">
    <!-- <script src="../assets/js/script.js"></script> -->
</head>
<body onload="Display();">
    <h1 class="center">Welcome to administration Dashboard</h1>
    <p class="center">
        <button class="nav-btn" onclick="Display();">Post</button> &nbsp;
        <button class="nav-btn" onclick="DisplayAddAdmin();" >Add-Admin</button>&nbsp;
        <button class="nav-btn" onclick="DisplayAdminList();">Admin-List</button> &nbsp; 
        <button class="nav-btn" onclick="DisplayPostList();">Vacancy-List</button> &nbsp;
        <button class="nav-btn" onclick="DisplayUserPost();">Manage-user-post</button></p>
    
    <section class="section-style" id="postvacancy">
        <h2 class="center">Post Vacancy</h2>
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
                <button class="btn">POST</button><br><br>
            </form>

         </div>

     </section>

     <section class="section-style" id="addadmin">
        <h1 class="center"> Add Admin </h1>
        <div class="add-admin-style">
            <div class="table -d">
                <!-- <p class="center">Add Admin</p> -->
                <form action="">
                    <div class="input-div ">
                        <label class="input-style" for="firstname">First Name</label>
                        <input class="input-style" type="text" name="firstname" placeholder="Enter first name" required>
                    </div>
                    <div class="input-div ">
                        <label class="input-style" for="lastname">Last Name</label>
                        <input class="input-style" type="text" name="lastname" placeholder="Enter last name" required>
                    </div>
                    <div class="input-div">
                        <label class="input-style" for="email">E-mail</label>
                        <input class="input-style" type="email" name="email" placeholder="Enter E-mail" required>
                    </div>
                    <div class="input-div">
                        <label class="input-style" for="password">Password</label>
                        <input class="input-style" type="text" name="password" placeholder="Enter password" required>
                    </div>
                    <div class="input-div">
                        <label class="input-style" for="confirmpassword">Confirm Password</label>
                        <input class="input-style" type="text" name="confirmpassword" placeholder="Confirm password">
                    </div>
                    <button class="btn">ADD</button>
                </form>
            </div>
            
    </section>
    <section class="section-style " id="adminlist">
            <h1 class="center">Admin-List</h1>
            <div class="table-div">
                <table >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Emial address</th>
                            
                            <th colspan="3">Status</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>001</td>
                        <td>bahiru walelign</td>
                        <td>bahir@gmail.com</td>
                        <td><a href="">Activated</a></td>
                        <td><a href="">Deactivated</a></td>
                        <td><a href="">Remove</a></td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>bahiru walelign</td>
                        <td>bahir@gmail.com</td>
                        <td><a href="">Activated</a></td>
                        <td><a href="">Deactivated</a></td>
                        <td><a href="">Remove</a></td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>bahiru walelign</td>
                        <td>bahir@gmail.com</td>
                        <td><a href="">Activated</a></td>
                        <td><a href="">Deactivated</a></td>
                        <td><a href="">Remove</a></td>
                    </tr>

                </table>
                
            </div>
            
        </div>


    
     </section>

     <section class="section-style" id="postlist">

        <div class="table-div">
            <h1 class="center">Posted Vacancy List</h1>
            <table >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>decription</th>
                        <th>Category</th>
                        <th colspan="3">Cntrols</th>
                    </tr>
                </thead>
                <tr>
                    <td>001</td>
                    <td>bahiru walelign</td>
                    <td>bahir@gmail.com</td>
                    <td>bahir123</td>
                    <td><a href="">Details</a></td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">delete</a></td>
                </tr>
                

            </table>
            
        </div>
   
     </section>

     <section class="section-style" id="userpost">

        <div class="table-div">
            <h1 class="center">Manage User Posted Vacancy</h1>
            <table >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Emial address</th>
                        <th>Username</th>
                        <th colspan="3">Status</th>
                    </tr>
                </thead>
                <tr>
                    <td>001</td>
                    <td>bahiru walelign</td>
                    <td>bahir@gmail.com</td>
                    <td>bahir123</td>
                    <td><a href="">check</a></td>
                    <td><a href="">Approve</a></td>
                    <td><a href="">Reject</a></td>
                </tr>
                

            </table>
            
        </div>
     </section>

    <script>
        
        let postv = document.getElementById("postvacancy");
        let addadmin = document.getElementById("addadmin");
        let adminlist = document.getElementById("adminlist");
        let postlist= document.getElementById("postlist");
        let userpost= document.getElementById("userpost");

        function Display(){
            postv.style.display="block";
            addadmin.style.display="none";
            adminlist.style.display="none";
            postlist.style.display="none";
            userpost.style.display="none";
            
        }
        function DisplayAdminList(){
             postv.style.display="none";
             addadmin.style.display="none";
             adminlist.style.display="block";
             postlist.style.display="none";
             userpost.style.display="none";
             
         }
         function DisplayAddAdmin(){
             postv.style.display="none";
             addadmin.style.display="block";
             adminlist.style.display="none";
             postlist.style.display="none";
             userpost.style.display="none";
         }
         function DisplayPostList(){
            postv.style.display="none";
            addadmin.style.display="none";
            adminlist.style.display="none";
            postlist.style.display="block";
            userpost.style.display="none";
        }
         function DisplayUserPost(){
             postv.style.display="none";
             addadmin.style.display="none";
             adminlist.style.display="none";
             postlist.style.display="none";
             userpost.style.display="block";
         }

    </script>
</body>
</html>