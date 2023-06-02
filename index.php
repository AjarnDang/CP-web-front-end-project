
<?php include('header.php'); ?>

<link rel="stylesheet" href="css/home.css">


<body>
    <div id="banner" style="background-image: url('img/bg2.png');">
        <div class="container">
            <div class="topic">
                <!--<h1>&lt;GTCoding/&gt;</h1>-->
                <h6><b>WELCOME TO COLLEGE OF COMPUTING</b></h6>
                <h1 style="color:white;"><b>E-Learning</b></h1>
                <p>Success does not come from coincidence, but from sacrifice,
                    diligence, hard study and above all. It comes from the love
                    of what you are doing or learning.  
                    <br>
                    — Pele 
                </p>
               
              
                <button style="width: fit-content;" class="button primary" type="button" onclick="document.location='course.php'">
                <div class="label">
                    <span class="hover-effect-black"></span>
                    <span class="label-text">Join Course</span>
                </div>
                </button>
                
        
            </div>

           
        </div>
       
    </div>

    <div class="container">
        <h2 class="heading-pp mb-5">
                <b>Prominent Point 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
                    </svg></b></h2>
        <div class="second-content">
            <div class="row">

                    <div class="col-xs-12 col-md-4">
                    <div class="second-left-content"><a style="color:black;" href="">
                        <img class="img-second-content" src="https://pbs.twimg.com/media/EWTTkH5WAAQUkgg.jpg" alt="">
                        <h3><b>Online Courses</b></h3>
                        <p>Learn anything from anywhere just at your fungertips with our content</p><a href=""></a>
                        <a class="learn-more" href="">View Courses <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </a>
                    </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                    <div class="second-left-content"><a style="color:black;" href="ebook-page.php"><!--https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2015/08/11/1331740679722_3/the-dota-2-compendium-->
                    <img class="img-second-content" src="img/DARKHOLDALPHA2021001_Cover2-2.jpg" alt="">
                        <h3><b>Discover Knowledge</b></h3>
                        <p>With a plenty of e-book. you can explore your favorite and enjoy them simply</p></a>
                        <a class="learn-more" href="ebook-page.php">View E-Book <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </a>
                    </div>
                    </div>
                    
                    <div class="col-xs-12 col-md-4">
                    <div class="second-left-content"><a style="color:black;" href="">
                    <img class="img-second-content" src="http://cartoon.mthai.com/app/uploads/2014/05/429.jpg" alt="">
                        <h3><b>Learn with Experts</b></h3>
                        <p>Increase learning efficiency with teaching from experts with years of teaching experience.</p></a>
                        <a class="learn-more" href="">View Experts <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </a>
                    </div>
                    </div>


            </div>
        </div>
    </div>

   <?php include('carousel.php') ?>

   <div class="container">
       <div class="e-book">
        <h2 class="heading-ebook mb-5"><b>E-book</b></h2>
        <p>explore the varieties of E-Book that give you the most learning experience and quality of knowledge</p>
        


        <?php include('e-book.php') ?>
        


        <center>
            <button style="width: fit-content;" class="button outline mt-5" type="button" onclick="document.location='ebook-page.php'">
                <div class="label">
                    <span class="hover-effect"></span>
                    <span class="label-text">View E-Book</span>
                </div>
            </button>
        </center>
        </div>


        <div>

        </div>
   </div>




</body>

<?php include('footer.php') ?>
