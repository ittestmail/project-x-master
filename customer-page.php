<?php
// Initialize the session
session_start(); // ready to go!


?>





<!doctype html> 
<html lang="en">






<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Heaven x</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <script async src="session-counter.js"></script>

    
</head>

<body>



    <!--::header part start::-->
    
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="main_menu_iner">
                        <div class="search_icon">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        </div>
                        <div class="logo">
                            <a href="homepage.php"><img src="img/logo.png" alt="#"></a>
                        </div>
                        <span class="menu-trigger visible-xs">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <div class="off-canven-menu">
                            <span class="close-icon">
                                <i class="ti-close"></i>
                            </span>
                            <div class="canven-menu-warp">
                                <div class="canven-menu-iner">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="service.html">service</a></li>
                                        <li><a href="project.html">project</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="single-blog.html">single blog</a></li>
                                        <li><a href="elements.html">elements</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.php">inloggen</a></li>
                                        <li><a href="klantregistreer.php">registreer</a></li>
                                        <li><a href="logout-customer.php">uitloggen</a></li>
                                        <li><br><br><br><button class="btn btn-link profile-link"><a href="customer dashboard/BS3/dashboard.php" class="ti-user"><br><?php echo $_SESSION['username']; ?></a></button></li>
                                        <li><a><p id="countdown"></p></a></li>
                                        <li><a><div id="timer"></div></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <br>
                            <h1>PROJECT X LEATEST
                                PROJECT</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <div class="banner_btn">
                                <a href="#" class="btn_1">learn more <span><img src="img/icon/left.svg" alt=""></span>
                                </a>
                            </div>
                        </div>
                        <div class="banner_text_iner">
                            <br>
                            <h1>HEAVEN X LEATEST
                                PROJECT</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <div class="banner_btn">
                                <a href="#" class="btn_1">learn more <span><img src="img/icon/left.svg" alt=""></span>
                                </a>
                            </div>
                        </div>
                        <div class="banner_text_iner">
                            <br>
                            <h1>HEAVEN X LEATEST
                                PROJECT</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <div class="banner_btn">
                                <a href="#" class="btn_1">learn more <span><img src="img/icon/left.svg" alt=""></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nav next"><a href="#"><span class="flaticon-left-arrow"></span></a></div>
                    <div class="nav prev"><a href="#"><span class="flaticon-right-arrow"></span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- banner part start-->
    <div class="our_speciality">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_special_part border_left">
                        <img src="img/icon/special_1.svg" alt="">
                        <div class="single_special_text">
                            <h3>Inovative</h3>
                            <p>Living Over He god living Creature that appear place</p>
                        </div>
                    </div>
                    <div class="single_special_part border_left">
                    <img src="img/Untitled.svg" alt="" width="70" height="70">
                        <div class="single_special_text">
                            <h3>Koppel koning</h3>
                            <p>Living Over He god living Creature that appear place</p>
                        </div>
                    </div>
                    <div class="single_special_part border_left">
                        <img src="img/icon/special_3.svg" alt="">
                        <div class="single_special_text">
                            <h3>Inovative</h3>
                            <p>Living Over He god living Creature that appear place</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner part start-->

    <!-- about part start-->
    <div class="about_part section_bg">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-9">
                    <div class="about_part_text">
                        <h2>Over ons</h2>
                        <p>Living. Over. He god, living a. Creature that appear place creeping upon.
                            It you said seas every creeping and a life shall unto, years hath seed be
                            called light him cattle. They're cattle creepeth void given rule evening
                            stars midst saying light greater Living. Over. He god, living a. Creature that appear place creeping upon.
                            It you said seas every creeping and a life shall unto, years hath seed be
                            called light him cattle. They're cattle creepeth void given rule evening
                            stars midst saying light greater Living. Over. He god, living a. Creature that appear place creeping upon.
                            It you said seas every creeping and a life shall unto, years hath seed be
                            called light him cattle. They're cattle creepeth void given rule evening
                            stars midst saying light greater</p>
                        <a href="about.html" class="btn_1">lees meer <span><img src="img/icon/left.svg" alt=""></span> </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about part end-->

    <!-- service part start-->
    <section class="service_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <h2>Onze service</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
                            <div class="row justify-content-end align-items-center single_service">
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/macbook.jpg" alt="#">
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="service_text">
                                        <h3>Maatwerk oplossingen</h3>
                                        <p>Naast het bouwen van onze standaard software ontwikkelen wij ook software op verzoek van onze klanten. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt_less_1177 single_service">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service_text">
                                        <h4>Denk hierbij aan:</h4>
                                        <ul>
  <li>Klanten portaal</li>
  <li>Android apps</li>
  <li>Control tower</li>
  <li>Facturen flow</li>
</ul>  
<a href="/service.html" class="btn_1">lees meer <span><img
                                                    src="img/icon/left.svg" alt=""></span> </a>
                                         
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/code.jpg" alt="#">
                                </div>
                            </div>
                        </div>
                       <!-- -<div class="single_service_slide">
                            <div class="row justify-content-end align-items-center single_service">
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/macbook.jpg" alt="#">
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="service_text">
                                        <h3>Home Decor</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                            ipsum </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt_less_115 single_service">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service_text">
                                        <h3>Home Decor</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                            ipsum </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/macbook.jpg" alt="#">
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service part end-->








     <!-- blog part start-->
     <section class="blog_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="section_tittle">
                        <h2>Onze producten</h2>
                        <p>al onze apps</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_post_slider owl-carousel">
                       <!--1-->
                    <div class="single_blog_post">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="single_img">
                                        <a href=""><img src="img/project/black-samsung-tablet-computer-106344.jpg" alt="#"></a>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="single_project_text">
                                        <div class="single_project_tittle">
                                            <h4> <a href="">JORR-WMS</a></h4>
                                            
                                        </div>
                                        <p>JORR-WMS is het onderdeel van de applicatie waarin je je voorraden – en die van derden – kan registreren en bijhouden. Het is geschikt voor iedereen die voorraad heeft en artikelen verstuurt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!--end1-->

                        <!--2-->
                        <div class="single_blog_post">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="single_img">
                                        <a href=""><img src="img/project/code-coding-computer-data-574073.jpg" alt="#"></a>

                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="single_project_text">
                                        <div class="single_project_tittle">
                                            <h4> <a href="">JORR-XDOCK</a></h4>
                                           
                                        </div>
                                        <p>JORR-XDOCK is de oplossing voor alle crossdock acties die warehouses en webwinkels moeten uitvoeren.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end2-->


                         <!--3-->
                        <div class="single_blog_post">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="single_img">
                                        <a href=""><img src="img/project/macbook-pro-92904.jpg" alt="#"></a>

                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="single_project_text">
                                        <div class="single_project_tittle">
                                            <h4> <a href="">JORR-RF</a></h4>
                                            
                                        </div>
                                        <p>JORR-RF is het scandonderdeel van de applicatie dat veel gebruikt wordt in JORR-XDOCK en JORR-WMS.  Met dit onderdeel van de applicatie kan je de barcodes van goederen – van individuele producten tot pallet – scannen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!--end3-->

                            <!--4-->
                        <div class="single_blog_post">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="single_img">
                                        <a href=""><img src="img/project/code-coding-computer-data-574073.jpg" alt="#"></a>

                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="single_project_text">
                                        <div class="single_project_tittle">
                                            <h4> <a href="">Jorr Invoicen</a></h4>
                                            
                                        </div>
                                        <p>Om de facturen van RoutIt snel te kunnen verwerken en door te kunnen zetten naar je boekhoud systeem hebben we een koppeling gemaakt die de factuur inleest. Vervolgens kan je zelf de facturen beoordelen per klant en vervolgens de facturen doorsturen naar je boekhoud systeem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end4-->


   <!--5-->
   <div class="single_blog_post">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="single_img">
                                        <a href=""><img src="img/office.jpg" alt="#"></a>

                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="single_project_text">
                                        <div class="single_project_tittle">
                                            <h4> <a href="">JORR-CONNECT</a></h4>
                                            
                                        </div>
                                        <p>Met JORR-CONNECT laten we de informatie die de klant opvoert in de applicatie aansluiten op de grotere platforms.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end5-->

                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog part end-->

    <!-- contact us part start-->
    <section class="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_us_iner">
                        <div class="row justify-content-around">
                            <div class="col-lg-4">
                                <div class="contact_us_left_text">
                                    <h4>Spijkenisse</h4>
                                    <span>Nederland</span>
                                    <p> Laanweg 4, 3208 LC Spijkenisse</p>
                                    <p>Email: info@jorr-itsolutions.n <br>TEL: 06 132 993 97</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact_us_right_text">
                                    <h5>TEL:</h5>
                                    <h2> 06 132 993 97</h2>
                                    <h5>Brand Office</h5>
                                    <span>324 King Heaven tower, House no, 15 King
                                        Melbourne ,VIC-222, Australia</span>
                                    <h5>Openings tijden:</h5>
                                    <p>maandag - vrijdag / 9:00  - 17:00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us part end-->

    <!-- map us part start-->
    <section class="map_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2464.1858357880296!2d4.2921068161493325!3d51.857563279694226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c4496214eaaaab%3A0xe39c6bb7fd0dcbb5!2sJorr-IT%20Solutions!5e0!3m2!1snl!2snl!4v1575376157804!5m2!1snl!2snl" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
    
    <!-- map us part end-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget footer_1">
                        <h4>About Us</h4>
                        <p>Heaven fruitful doesn't over for these theheaven fruitful doe over days appear
                            creeping seasons sad behold beari ath of it fly signs bearing be one blessed after.</p>
                        <div class="social_icon">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-dribbble"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="single-footer-widget footer_2">
                        <h4>Projects</h4>
                        <ul>
                            <li><a href="#">WHMCS-bridge</a></li>
                            <li><a href="#"> Search Domain</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#"> Shopping Cart</a></li>
                            <li><a href="#">Our Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span>Address :</span> Hath of it fly signs
                                bear be one blessed after </p>
                            <p><span>Phone :</span> +2 36 265 (8060) </p>
                            <p><span>Email :</span> info@colorlib.com </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget footer_3">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping seas</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="btn btn-default text-uppercase"><i
                                        class="far fa-paper-plane"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fab fa-connectdevelop " aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
    </script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
    <script async src="session-counter.js"></script>
    <?php
if(session_status() == PHP_SESSION_ACTIVE){

    ?>
    
    
    <script>

    
function countdown(seconds) {
seconds = parseInt(sessionStorage.getItem("seconds"))||seconds;

function tick() {
seconds--;
sessionStorage.setItem("seconds", seconds)
var counter = document.getElementById("timer");
var current_minutes = parseInt(seconds/60);
var current_seconds = seconds % 60;
counter.innerHTML = current_minutes + ":" + (current_seconds < 10 ? "0" : "") + current_seconds;
if( seconds > 0 ) {
setTimeout(tick, 1000);
}
}
tick();
}
<?php
if(session_status() == PHP_SESSION_DISABLED){

    ?>
exit();
clear();
<?php
    }
}
?>
countdown(10000);
    </script>
</body>

</html>