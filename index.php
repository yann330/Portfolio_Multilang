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
    <title id="pf_titre">Yanis : Accueil</title>
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">
    <link href="sty.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


</head>
<body>

<header id="mu-header" class="" role="banner">
    <div class="container">
        <nav class="navbar navbar-default mu-navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" id="<?php echo $translations['name']['id']?>" href="#"><?php echo $translations['name']['content']?></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav mu-menu navbar-right">
                        <li>
                            <select class="form-control" id="langSwitcher">
                                <option value="en">EN</option>
                                <option value="fr">FR</option>
                                <option value="jp">JP</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<section id="mu-featured-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-featured-area">
                    <h1>Yanis Houri</h1>
                    <div class="mu-featured-slider-wrapper">
                        <div class="mu-featured-slider" id="typed-strings">
                            <p>Apprenti <span>Ingénieur informatique</span></p>
                        </div>
                        <span id="typed"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main role="main">

    <section id="mu-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-area">

                        <div class="mu-about-header">
                            <h2 class="mu-heading-title">À PROPOS DE MOI</h2>
                            <span class="mu-header-dot"></span>
                            <p>Je m'appelle Yanis Houri, je suis étudiant en deuxième année informatique à l'école d'ingénieur <strong>Sup Galilée</strong>. Je suis également apprenti ingénieur automaticien au sein de <strong>Kering</strong></p>
                        </div>

                        <div class="mu-about-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-about-content-left">
                                        <img class="mu-profile-img" src="assets/images/me.jpg" alt="Profile Image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-about-content-right">
                                        <div class="mu-skill-progress-bar">
                                            <h3>Skills</h3>
                                            <span>C/C++/JAVA/Assembler(Mips, LC3)</span>
                                            <div class="mu-pro-bar mu-html5-bar">
                                            </div>
                                            <span>MySQL</span>
                                            <div class="mu-pro-bar mu-css-bar">
                                            </div>
                                            <span>PHP/Symfony/JavaScript/jQuery</span>
                                            <div class="mu-pro-bar mu-jquery-bar">
                                            </div>
                                            <span>Html5/Css</span>
                                            <div class="mu-pro-bar mu-photoshop-bar">
                                            </div>
                                            <span>Python</span>
                                            <div class="mu-pro-bar mu-jquery-bar">
                                            </div>
                                            <span>UML</span>
                                            <div class="mu-pro-bar mu-wordpress-bar">
                                            </div>
                                            <span>Maven/Selenium/Jenkins</span>
                                            <div class="mu-pro-bar mu-css-bar">
                                            </div>
                                            <span>Git</span>
                                            <div class="mu-pro-bar mu-html5-bar">
                                            </div>
                                        </div>
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
                            <h2 class="mu-heading-title">PARCOURS ACADÉMIQUES</h2>
                            <span class="mu-header-dot"></span>
                        </div>

                        <div class="mu-service-content">
                            <div class="row">

                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-graduation-cap"></i>
											</span>
                                        <h4>Obtention BAC</h4>
                                        <p>2019 - Tizi-ouzou, Algérie</p>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-desktop"></i>
											</span>
                                        <h4>Licence 1</h4>
                                        <p>2019 - Institut Galilée, <strong>Villetaneuse, France</strong></p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->

                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-desktop"></i>
											</span>
                                        <h4>Licence 2</h4>
                                        <p>2020 - Institut Galilée, <strong>Villetaneuse, France</strong></p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->
                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-desktop"></i>
											</span>
                                        <h4>Ingénieur 1</h4>
                                        <p>2021 - Institut Galilée, <strong>Villetaneuse, France</strong></p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->

                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-desktop"></i>
											</span>
                                        <h4>Ingénieur 2 (en cours)</h4>
                                        <p>2022 - Sup Galilée, <strong>Villetaneuse, France</strong></p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->

                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-desktop"></i>
											</span>
                                        <h4>Ingénieur 3 (à venir)</h4>
                                        <p>2023 - Sup Galilée, <strong>Villetaneuse, France</strong></p>
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
    <!-- Start Service -->
    <section id="mu-service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-service-area">
                        <div class="mu-service-header">
                            <h2 class="mu-heading-title">PROJETS ACADÉMIQUES</h2>
                            <span class="mu-header-dot"></span>
                        </div>

                        <div class="mu-service-content">
                            <div class="row">

                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-graduation-cap"></i>
											</span>
                                        <h4>Obtention BAC</h4>
                                        <p>2019 - Tizi-ouzou, Algérie</p>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-desktop"></i>
											</span>
                                        <h4>Licence 1</h4>
                                        <p>2019 - Institut Galilée, <strong>Villetaneuse, France</strong></p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->

                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-desktop"></i>
											</span>
                                        <h4>Licence 2</h4>
                                        <p>2020 - Institut Galilée, <strong>Villetaneuse, France</strong></p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->
                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-desktop"></i>
											</span>
                                        <h4>Ingénieur 1</h4>
                                        <p>2021 - Institut Galilée, <strong>Villetaneuse, France</strong></p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->

                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-desktop"></i>
											</span>
                                        <h4>Ingénieur 2 (en cours)</h4>
                                        <p>2022 - Sup Galilée, <strong>Villetaneuse, France</strong></p>
                                    </div>
                                </div>
                                <!-- / Service Single Content -->

                                <!-- Service Single Content -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="mu-service-content-single">
											<span class="mu-service-icon-box">
												<i class="fa fa-desktop"></i>
											</span>
                                        <h4>Ingénieur 3 (à venir)</h4>
                                        <p>2023 - Sup Galilée, <strong>Villetaneuse, France</strong></p>
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


    <!-- Start Contact -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">

                        <div class="mu-contact-header">
                            <h2 class="mu-heading-title">CONTACTEZ MOI</h2>
                            <span class="mu-header-dot"></span>
                            <p>Pour plus d'informations me concernant, n'hesitez par à mon contacter en utilisant les coordonnées ci-dessous:</p>
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
                                                    <p>Enghien-les-bains, France</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mu-contact-top-single">
                                                    <div class="mu-icon"><i class="fa fa-phone"></i></div>
                                                    <p>07 58 35 53 87</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mu-contact-top-single">
                                                    <div class="mu-icon"><i class="fa fa-envelope"></i></div>
                                                    <p>yanis.houri@kering.com</p>
                                                    <p>yanis.houri@edu.univ-paris13.fr</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

</main>





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


