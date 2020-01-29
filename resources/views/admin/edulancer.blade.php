<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edulancer</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <script src="js/custom.js"></script>
    <style>
        .dropbtn {
            background-color: rgb(95,18,130);
            color: white;
            padding: 16px;
            font-size: 16px;
            border: round 1px;
            border-color:white;
            border-radius: 25px;
            cursor: pointer;
        }

/* The container <div> - needed to position the dropdown content */
    .dropdown {
    position: relative;
    display: inline-block;
    }

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  border: round 1px;
            border-color:white;
            border-radius: 25px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    border-color:white;
            border-radius: 25px;
            background-color: rgb(95,18,130)}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    border-color:white;
            border-radius: 25px;
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    border-color:white;
            border-radius: 25px;
  background-color: rgb(95,18,130);
}
    </style>
</head>
<body>
<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="#"><img src="images/logo.png" alt="logo"></a>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-7 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        <!-- <a class="btn gradient-bg" href="http://localhost:8000/backend">Sign in</a> -->

                           <div class="dropdown">
                                        <button class="dropbtn">Sign in</button>
                                        <div class="dropdown-content">
                                            
                                            <a href="http://localhost:8000/backend">Student As login</a>
                                            <a href="http://localhost:8000/reg_for_teacher">Teacher As login</a>
                                        </div>
                                    </div>









                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-date="2018/05/01" style="background: url('images/uiu.jpg') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <!-- <span class="dday"></span> -->
                                            <!-- <label>Days</label> -->
                                        </div>

                                        <div class="countdown-holder flex align-items-baseline">
                                            <!-- <span class="dhour"></span> -->
                                            <!-- <label>Hours</label> -->
                                        </div>

                                        <div class="countdown-holder flex align-items-baseline">
                                            <!-- <span class="dmin"></span> -->
                                            <!-- <label>Minutes</label> -->
                                        </div>
                                       

                                        <div class="countdown-holder flex align-items-baseline">
                                            <!-- <span class="dsec"></span> -->
                                            <!-- <label>Seconds</label> -->
                                        </div>
                                    </div>

                                    <h2 class="entry-title">Edulancer is a multi-learning online platform  <br>Registration now!</h2>
                                </div><!--- .entry-header -->
                               

                                                                
                                    <div class="dropdown">
                                        <button class="dropbtn">Registration</button>
                                        <div class="dropdown-content">
                                            
                                            <a href="http://localhost:8000/registration">As Student</a>
                                            <a href="http://localhost:8000/reg_teacher">As Teacher</a>
                                        </div>
                                    </div>
                                

                                <div class="entry-footer">
                                 <!-- <a class="btn gradient-bg" href="#">Registration</a>    -->
                                 
                                 <!-- <a class="btn gradient-bg" href="#">Registration As a Teacher</a>  -->
                                    
                               







                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->

            

           
        </div>

        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div>

        <!-- Add Arrows -->
        <!-- <div class="swiper-button-next flex justify-content-center align-items-center"> -->
            <!-- <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span> -->
        <!-- </div>  -->

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <!-- <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span> -->
        </div>
    </div><!-- .swiper-container -->
</header><!-- .site-header -->

<div class="homepage-info-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-5">
                <figure>
                    <img src="images/logo-2.png" alt="logo">
                </figure>
            </div>

            <div class="col-12 col-md-8 col-lg-7">
                <header class="entry-header">
                    <h2 class="entry-title">What Edulancer?</h2>
                </header>

                <div class="entry-content">
                    <p>Edulancer is a multi-learning online platform where anyone can teach and
learn everything according to their preferences. This platform offer an online one-on-one learning system so that learner get the attention learner
need to understand your subjects and ace your competitive exams</p>
                </div>

                <footer class="entry-footer">
                    <a href="http://localhost/send%20my%20mail/course.html" class="btn gradient-bg">Go the Study Material</a>
                    <a href="http://localhost:8000/settings" class="btn dark">LIVE CLASS</a>
                </footer>
            </div>
        </div>
    </div>
</div>

<div class="homepage-featured-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="featured-events-wrap flex flex-wrap justify-content-between">
                    <div class="event-content-wrap positioning-event-1">
                        <figure>
                            <a href="#"><img src="images/1.jpg" alt="1"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Md.Atikur Rahman</h3>
                            
                            <div class="posted-date">EXPERT AT MATMATICS</div>
                            <h3 class="entry-title">Send Message</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-2">
                        <figure>
                            <a href="#"><img src="images/2.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                        <h3 class="entry-title">Jahid Hasan Evan</h3>
                            
                            <div class="posted-date">EXPERT AT CALCULAS</div>
                            <h3 class="entry-title">Send Message</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-3">
                        <figure>
                            <a href="#"><img src="images/3.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                        <h3 class="entry-title">Raihan Ahamed</h3>
                            
                            <div class="posted-date">EXPERT AT JAVA</div>
                            <h3 class="entry-title">Send Message</h3>
                        </header>
                    </div>

                     <div class="event-content-wrap positioning-event-5">
                        <figure>
                            <a href="#"><img src="images/salman.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                        <h3 class="entry-title">Salman Haque</h3>
                            
                            <div class="posted-date">EXPERT AT MARKETING</div>
                            <h3 class="entry-title">Send Message</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-4 half">
                        <figure>
                            
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-5 half">
                        <figure>
                            
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-6 half">
                        <figure>
                           
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-7">
                        <figure>
                           
                        </figure>

                        <header class="entry-header">
                        
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-8">
                        <figure>
                            <a href="#"><img src="images/modern.jpg" alt="1"></a>
                        </figure>

                        <header class="entry-header">
                        <h3 class="entry-title">Fariha Hasan</h3>
                            
                            <div class="posted-date">EXPERT AT Beaution</div>
                            <h3 class="entry-title">Send Message</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-9">
                        <figure>
                            <a href="#"><img src="images/smoke.jpg" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Mirza Saudia Islam</h3>
                            
                            <div class="posted-date">EXPERT AT Cooking</div>
                            <h3 class="entry-title">Send Message</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-10 half">
                       
                    </div>

                    <div class="event-content-wrap positioning-event-11 half">
                        <figure>
                            <!-- <a href="#"><img src="images/autumn.jpg" alt=""></a> -->
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="homepage-next-events">
    <div class="container">
        <div class="row">
            <div class="next-events-section-header">
                <h2 class="entry-title">Our Services Available</h2>
                <p>This tutoring services is available for dhaka city,chittagong,rajshahi. very soon we are going to start this services in all other division</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="images/next15.jpg" alt="1"></a>

                        <div class="event-rating">Free</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Dhaka City</h3>

                        <!-- <div class="posted-date">Saturday <span>Jan 27, 2018</span></div> -->
                    </header>

                    <div class="entry-content">
                        <p>In the Dhaka city all the thana this services is available to the user. you can easily registred and use this site totally free</p>
                    </div>

                    <footer class="entry-footer">
                        <!-- <a href="#">Buy Tikets</a> -->
                    </footer>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="images/next15.jpg" alt="1"></a>

                        <div class="event-rating">Free</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Chittagong</h3>

                        <!-- <div class="posted-date">Saturday <span>Jan 27, 2018</span></div> -->
                    </header>

                    <div class="entry-content">
                        <p>In the  chittagong city all the thana this services is available to the user. you can easily registred and use this site totally free</p>
                    </div>

                    <footer class="entry-footer">
                       
                    </footer>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="images/next15.jpg" alt="1"></a>

                        <div class="event-rating">Free</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Rajshahi</h3>

                        <!-- <div class="posted-date">Saturday <span>Jan 27, 2018</span></div> -->
                    </header>

                    <div class="entry-content">
                        <p>In the Rajshahi city all the thana this services is available to the user. you can easily registred and use this site totally free</p>
                    </div>

                    <footer class="entry-footer">
                     
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="homepage-regional-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="regional-events-heading entry-header flex flex-wrap justify-content-between align-items-center">
                    <h2 class="entry-title">Our Course</h2>

                    <div class="select-location">
                        <select>
                            <option>Dhaka</option>
                            <option>Chittagong</option>
                            <option>Rajshahi</option>
                        </select>
                    </div>
                </header>

                <div class="swiper-container homepage-regional-events-slider">
                    <div class="swiper-wrapper">
                        <div class=""">
                            <figure>
                                
                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                               
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                              
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-2.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Learn Cycling </h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"><span>Available in mirpur</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-3.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Learn Dance</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"> <span>Available in gulshan</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-4.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Learn Photography</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"> <span>Available in dhanmondi</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-5.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Learn Sports</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"><span>Available in dhanmondi</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-6.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Learn Msuic</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"><span>Available in mirpur</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-1.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Learn Voice over </h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"> <span>Available in Sahabag</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->
                    </div><!-- .swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .swiper-container -->
                <header class="regional-events-heading entry-header flex flex-wrap justify-content-between align-items-center">
                    <h2 class="entry-title">Others Course</h2>

                  
                </header>

                  
                <div class="swiper-container homepage-regional-events-slider">
                    <div class="swiper-wrapper">
                        <div class=""">
                            <figure>
                                
                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                               
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                              
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->
                       
                        




                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-2.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Learn Cycling </h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"><span>Available in mirpur</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-3.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Learn Dance</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"> <span>Available in gulshan</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-4.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Learn Photography</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"> <span>Available in dhanmondi</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-5.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Learn Sports</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"><span>Available in dhanmondi</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-6.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Learn Msuic</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"><span>Available in mirpur</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/event-slider-1.jpg" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="#">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">Learn Voice over </h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"> <span>Available in Sahabag</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->
                    </div><!-- .swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .swiper-container -->
                

            </div>
        </div>
    </div>
</div>

<div class="newsletter-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h2 class="entry-title">Subscribe to our newsletter to get the latest trends & news</h2>
                    <p>Join our database NOW!</p>
                </header>

                <div class="newsletter-form">
                    <form class="flex flex-wrap justify-content-center align-items-center">
                        <div class="col-md-12 col-lg-3">
                            <input type="text" placeholder="Name">
                        </div>

                        <div class="col-md-12 col-lg-6">
                            <input type="email" placeholder="Your e-mail">
                        </div>

                        <div class="col-md-12 col-lg-3">
                            <input class="btn gradient-bg" type="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="images/logo.png" alt="logo"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

</body>
</html>