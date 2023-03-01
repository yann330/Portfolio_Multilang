<meta charset="UTF-8">
<?php
    header("Content-Type: text/html; charset=UTF-8");
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);
    $language = 'en';

    if(isset($_GET['lang'])){
        $language = $_GET['lang'];
    }
    $connection = new mysqli('localhost', 'root', '', 'portfolio');
    $connection->set_charset("utf8");
    // Check connection
    $language = $connection->real_escape_string($language);
    $sql = $connection->query("SELECT * FROM translations WHERE language='$language'");

    $translations = array();

    while($data = $sql->fetch_assoc()){
        $translations[$data['elementId']] = $data;
    }
    //exit(json_encode($translations));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title id="pf_titre">Yanis : Accueil</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Poppins for Title -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Start Header -->
<header id="mu-header" class="" role="banner">
    <div class="container">
        <nav class="navbar navbar-default mu-navbar">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Text Logo -->
                    <a class="navbar-brand" id="<?php echo $translations['name']['id']?>" href="#"><?php echo $translations['name']['content']?></a>

                    <!-- Image Logo -->
                    <!-- <a class="navbar-brand" href="#"><img src="assets/images/logo.png"></a> -->


                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav mu-menu navbar-right">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#mu-about">ABOUT US</a></li>
                        <li><a href="#mu-service">SERVICES</a></li>
                        <li><a href="#mu-portfolio">PORTFOLIO</a></li>
                        <li><a href="#mu-testimonials">TESTIMONIALS</a></li>
                        <li><a href="#mu-contact">CONTACT</a></li>
                        <li>
                            <select class="form-control" id="langSwitcher">
                                <option value="en">EN</option>
                                <option value="fr">FR</option>
                                <option value="jp">JP</option>
                            </select>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>
<!-- End Header -->

<!-- Start Featured Slider -->

<section id="mu-featured-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-featured-area">
                    <h1>Yanis Houri</h1>

                    <!-- Start text slide -->
                    <div class="mu-featured-slider-wrapper">
                        <div class="mu-featured-slider" id="typed-strings">
                            <p>Je suis <span>Ingénieur informatique</span></p>
                        </div>
                        <span id="typed"></span>
                    </div>
                    <!-- Start text slide -->

                    <div class="mu-featured-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere ipsa necessitatibus voluptate. Dolores sed neque, accusantium iusto inventore harum quibusdam, aspernatur, ullam vero ea eos ipsam tenetur dolore qui voluptatibus!</p>
                        <a href="#mu-portfolio" class="mu-primary-btn view-my-work-btn">VIEW MY WORK</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Featured Slider -->

<!-- Start main content -->

<main role="main">

    <!-- Start About -->
    <section id="mu-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-area">

                        <div class="mu-about-header">
                            <h2 class="mu-heading-title">ABOUT ME</h2>
                            <span class="mu-header-dot"></span>
                            <p>My name is Kevin Pitter. I am professional <strong>Web Designer</strong> and <strong>Web Developer</strong>. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>

                        <!-- Start About Us Content -->
                        <div class="mu-about-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-about-content-left">
                                        <img class="mu-profile-img" src="assets/images/profile.jpg" alt="Profile Image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-about-content-right">

                                        <!-- Start skills progress bar -->

                                        <div class="mu-skill-progress-bar">
                                            <h3>Skills</h3>
                                            <span>Html5</span>
                                            <div class="mu-pro-bar mu-html5-bar">

                                            </div>
                                            <span>css</span>
                                            <div class="mu-pro-bar mu-css-bar">

                                            </div>
                                            <span>Photoshop</span>
                                            <div class="mu-pro-bar mu-photoshop-bar">
                                            </div>
                                            <span>Wordpress</span>
                                            <div class="mu-pro-bar mu-wordpress-bar">
                                            </div>
                                            <span>jQuery</span>
                                            <div class="mu-pro-bar mu-jquery-bar">
                                            </div>
                                        </div>

                                        <!-- Start Social Media -->
                                        <div class="mu-social-media">
                                            <h3>Social</h3>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>

                                        <!-- Download Ressume Button -->
                                        <a href="#" class="mu-resume-btn">Download My Resume</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End About Us Content -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Start Service -->
    <section id="mu-service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-service-area">

                        <div class="mu-service-header">
                            <h2 class="mu-heading-title">MY SERVICES</h2>
                            <span class="mu-header-dot"></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>

                        <!-- Start Service Content -->
                        <div class="mu-service-content">
                            <div class="row">

                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-leaf"></i>
											</span>
                                        <h4>UI/UX Design</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->

                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-desktop"></i>
											</span>
                                        <h4>Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->

                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-briefcase"></i>
											</span>
                                        <h4>Branding</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->

                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-camera"></i>
											</span>
                                        <h4>Photography</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->

                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-android"></i>
											</span>
                                        <h4>Apps Development</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->

                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-line-chart"></i>
											</span>
                                        <h4>Digital Marketing</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->

                            </div>
                        </div>
                        <!-- End Service Content -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service -->

    <!-- Start Portfolio -->
    <section id="mu-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-portfolio-area">

                        <div class="mu-portfolio-header">
                            <h2 class="mu-heading-title">MY PORTFOLIO</h2>
                            <span class="mu-header-dot"></span>
                        </div>

                        <!-- Start Portfolio Filter -->
                        <div class="mu-portfolio-filter-area">
                            <ul class="mu-simplefilter">
                                <li class="active" data-filter="all">All</li>
                                <li data-filter="1">Web App</li>
                                <li data-filter="2">UI/UX</li>
                                <li data-filter="3">Graphics Design</li>
                                <li data-filter="4">Mobile App</li>
                                <li data-filter="5">Branding</li>
                                <li data-filter="6">Marketing</li>
                            </ul>
                        </div>

                        <!-- Start Portfolio Content -->
                        <div class="mu-portfolio-content">
                            <div class="filtr-container">

                                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="1">
                                    <div class="mu-item-thumbonail">
                                        <img class="img-responsive" src="assets/images/portfolio/img-1.jpeg" alt="image">
                                    </div>
                                    <div class="mu-filter-item-content">
                                        <h4 class="mu-filter-item-title">WEB DEVELOPMENT</h4>
                                        <a class="mu-filter-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="mu-filter-imglink" href="assets/images/portfolio/img-1.jpeg" title="Web Development"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="2">
                                    <div class="mu-item-thumbonail">
                                        <img class="img-responsive" src="assets/images/portfolio/img-2.jpeg" alt="image">
                                    </div>
                                    <div class="mu-filter-item-content">
                                        <h4 class="mu-filter-item-title">UI/UX DESIGN</h4>
                                        <a class="mu-filter-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="mu-filter-imglink" href="assets/images/portfolio/img-2.jpeg" title="UI/UX DESIGN"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="3">
                                    <div class="mu-item-thumbonail">
                                        <img class="img-responsive" src="assets/images/portfolio/img-3.jpeg" alt="image">
                                    </div>
                                    <div class="mu-filter-item-content">
                                        <h4 class="mu-filter-item-title">GRAPHICS DESIGN</h4>
                                        <a class="mu-filter-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="mu-filter-imglink" href="assets/images/portfolio/img-3.jpeg" title="GRAPHICS DESIGN"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="4">
                                    <div class="mu-item-thumbonail">
                                        <img class="img-responsive" src="assets/images/portfolio/img-4.jpeg" alt="image">
                                    </div>
                                    <div class="mu-filter-item-content">
                                        <h4 class="mu-filter-item-title">MOBILE APP</h4>
                                        <a class="mu-filter-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="mu-filter-imglink" href="assets/images/portfolio/img-4.jpeg" title="MOBILE APP"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="5">
                                    <div class="mu-item-thumbonail">
                                        <img class="img-responsive" src="assets/images/portfolio/img-5.jpeg" alt="image">
                                    </div>
                                    <div class="mu-filter-item-content">
                                        <h4 class="mu-filter-item-title">BRANDING</h4>
                                        <a class="mu-filter-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="mu-filter-imglink" href="assets/images/portfolio/img-5.jpeg" title="BRANDING"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="6">
                                    <div class="mu-item-thumbonail">
                                        <img class="img-responsive" src="assets/images/portfolio/img-6.jpeg" alt="image">
                                    </div>
                                    <div class="mu-filter-item-content">
                                        <h4 class="mu-filter-item-title">MARKETING</h4>
                                        <a class="mu-filter-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="mu-filter-imglink" href="assets/images/portfolio/img-6.jpeg" title="MARKETING"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="1">
                                    <div class="mu-item-thumbonail">
                                        <img class="img-responsive" src="assets/images/portfolio/img-7.jpg" alt="image">
                                    </div>
                                    <div class="mu-filter-item-content">
                                        <h4 class="mu-filter-item-title">WEB DEVELOPMENT</h4>
                                        <a class="mu-filter-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="mu-filter-imglink" href="assets/images/portfolio/img-7.jpg" title="WEB DEVELOPMENT"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="4">
                                    <div class="mu-item-thumbonail">
                                        <img class="img-responsive" src="assets/images/portfolio/img-8.jpeg" alt="image">
                                    </div>
                                    <div class="mu-filter-item-content">
                                        <h4 class="mu-filter-item-title">MOBILE APP</h4>
                                        <a class="mu-filter-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="mu-filter-imglink" href="assets/images/portfolio/img-8.jpeg" title="MOBILE APP"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="3">
                                    <div class="mu-item-thumbonail">
                                        <img class="img-responsive" src="assets/images/portfolio/img-9.jpeg" alt="image">
                                    </div>
                                    <div class="mu-filter-item-content">
                                        <h4 class="mu-filter-item-title">GRAPHICS DESIGN</h4>
                                        <a class="mu-filter-link" href="#"><i class="fa fa-link"></i></a>
                                        <a class="mu-filter-imglink" href="assets/images/portfolio/img-9.jpeg" title="GRAPHICS DESIGN"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Portfolio Content -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio -->

    <!-- Start Testimonials -->
    <section id="mu-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-testimonials-area">
                        <div class="mu-testimonial-header">
                            <h2 class="mu-heading-title">Client Testimonials</h2>
                            <span class="mu-header-dot"></span>
                        </div>

                        <div class="mu-testimonials-block">
                            <ul class="mu-testimonial-slide">

                                <li>
                                    <i class="fa fa-quote-right mu-quote-icon"></i>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                    <h5 class="mu-ct-name"> - Jhon Doe</h5>
                                    <span class="mu-ct-title">CEO, Apple Inc.</span>
                                </li>

                                <li>
                                    <i class="fa fa-quote-right mu-quote-icon"></i>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                    <h5 class="mu-ct-name"> - Alice Boga</h5>
                                    <span class="mu-ct-title">Director, Google Inc.</span>
                                </li>

                                <li>
                                    <i class="fa fa-quote-right mu-quote-icon"></i>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                    <h5 class="mu-ct-name"> - Jhon Smith</h5>
                                    <span class="mu-ct-title">Web Developer</span>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials -->


    <!-- Start Contact -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">

                        <div class="mu-contact-header">
                            <h2 class="mu-heading-title">CONTACT ME</h2>
                            <span class="mu-header-dot"></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>

                        <!-- Start Contact Content -->
                        <div class="mu-contact-content">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="mu-contact-top">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="mu-contact-top-single">
                                                    <div class="mu-icon"><i class="fa fa-map-marker"></i></div>
                                                    <p>Dooley Branch Rd Millen, GA 30442, USA</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mu-contact-top-single">
                                                    <div class="mu-icon"><i class="fa fa-phone"></i></div>
                                                    <p>+90 987 678 9834</p>
                                                    <p>+90 567 098 785</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mu-contact-top-single">
                                                    <div class="mu-icon"><i class="fa fa-envelope"></i></div>
                                                    <p>contact@domain.com</p>
                                                    <p>support@domain.com</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mu-contact-bottom">
                                        <div id="form-messages"></div>
                                        <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
                                            </div>
                                            <button type="submit" class="mu-send-msg-btn"><span>SUBMIT</span></button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Contact Content -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

</main>

<!-- End main content -->


<!-- Start footer -->
<footer id="mu-footer" role="contentinfo">
    <div class="container">
        <div class="mu-footer-area">
            <p class="mu-copy-right">&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
        </div>
    </div>

</footer>
<!-- End footer -->



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="assets/js/slick.min.js"></script>
<!-- Filterable Gallery js -->
<script type="text/javascript" src="assets/js/jquery.filterizr.min.js"></script>
<!-- Gallery Lightbox -->
<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Ajax contact form  -->
<script type="text/javascript" src="assets/js/app.js"></script>
<!-- Featured Slider -->
<script type="text/javascript" src="assets/js/typed.min.js"></script>
<!-- On scroll JS  -->
<script src="assets/js/jquery.appear.js"></script>
<!-- Progress Bar -->
<script type="text/javascript" src="assets/js/jquery.lineProgressbar.js"></script>


<!-- Custom js -->
<script type="text/javascript" src="assets/js/custom.js"></script>



<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $("#langSwitcher").val('<?php echo $_GET['lang']?>')
        $('#langSwitcher').on('change', function(){
            window.location = '<?php echo $_SERVER['PHP_SELF'] ?>?lang=' + $(this).val();
        });
    });
</script>
</body>
</html>


