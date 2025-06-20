<?php require_once 'header.php'; ?>
    <section>
        <div class="carousel-container">
            <div class="mySlides fade">
                <div class="numbertext">1/3</div>
                <img src="resource/assets/images/showcase.jpg" width="100%" height="25%" alt="" >
                <div class="text center">Find and Apply any vacancy for  free in this website</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2/3</div>
                <img src="resource/assets/images/showcase.jpg" width="100%" height="25%" alt="">
                <div class="text center">Find and Apply any vacancy for  free in this website</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3/3</div>
                <img src="resource/assets/images/images (2).jpg" width="100%" height="25%" alt="">
                <div class="text center">All vacancy information is shared daily</div>
            </div>
        </div>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
    </section>

    <script>
        let slideIndex = 0;
       showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
    </script>

    <section>

        <h1 class="container center">Popular Vacancy Category</h1>
        <div class="container category-container">
            
            <div class="category">
                <a href="category.php">
                    <img src="resource/assets/images/dailyVacancy.png" width="50%" height="50%" alt="">
                    <h1>banking and insurance</h1>
                </a>
            </div>
            <div class="category">
                <a href="">
                    <img src="resource/assets/images/dailyVacancy.png" width="50%" height="50%"  alt="">
                    <h1>Sales & Markating</h1>
                </a>
            </div>
            <div class="category">
                <a href="">
                    <img src="resource/assets/images/dailyVacancy.png" width="50%" height="50%"  alt="">
                    <h1>IT & telecom</h1>
                </a>
            </div>
            <div class="category">
                <a href="">
                    <img src="resource/assets/images/dailyVacancy.png" width="50%" height="50%" alt="">
                    <h1>Finance & Accounting</h1>
                </a>
            </div>
            <div class="category">
                <a href="">
                    <img src="resource/assets/images/dailyVacancy.png" width="50%" height="50%"  alt="">
                    <h1>Cons & Engineering </h1>
                </a>
            </div>
            <div class="category">
                <a href="">
                    <img src="resource/assets/images/dailyVacancy.png" width="50%" height="50%"  alt="">
                    <h1>Managment</h1>
                </a>
            </div>
            <div class="category">
                <a href="">
                    <img src="resource/assets/images/dailyVacancy.png" width="50%" height="50%" alt="">
                    <h1>NGO</h1>
                </a>
            </div>
            <div class="category">
                <a href="">
                    <img src="resource/assets/images/dailyVacancy.png" width="50%" height="50%"  alt="">
                    <h1>Freelancing</h1>
                </a>
            </div>
            <div class="category">
                <a href="">
                    <img src="resource/assets/images/dailyVacancy.png" width="50%" height="50%"  alt="">
                    <h1>Other Vacancy</h1>
                </a>
            </div>
            
        </div>
        <h1 class="container center "><button class = "btn">All Category</button></h1>
    </section>

<?php require_once 'footer.php'; ?>
