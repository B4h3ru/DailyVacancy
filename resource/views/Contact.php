<?php require_once  'header.php' ?>

    <section class="contact-us">
        <div class="">
            <h1 style="font-size: 2rem; "> <b>Contact us</b> </h1>
            <p style="color: rgb(166, 166, 166);">Subheading for description or instructions</p>
            <form action="#Contact" method="POST" class="contact-form">
                <label class="contact-form" for="firstname">First Name</label>
                <input class="contact-form" type="text" name="firstname" placeholder="First name">
                <label class="contact-form" for="fathername">Father Name</label>
                <input class="contact-form" type="text" name="fathername" placeholder="Father name">
                <label class="contact-form" for="email">Email</label>
                <input class="contact-form" type="email" name="email" placeholder="Email">
                <label class="contact-form" for="massege">Your massege</label>
                <textarea class="contact-form" name="message" rows="8"  id="" placeholder="Enter your message or question"></textarea>
                <input class="contact-form submit" type="submit" placeholder="Submit">
            </form>
        </div>
        <div class="contact-logo">
            <img src="resource/assets/images/Screenshot 2024-12-06 113146.png" width="100%" height="100%" alt="">
        </div>   

    </section>
    
<?php require_once  "footer.php" ?>