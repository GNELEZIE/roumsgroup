<?php
$countryCode = 'ci';

require_once $controller.'/save.contact.php';
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;
require_once $layout.'/header.php';
?>


    <div class="inner-heading">
        <div class="container">
            <h3>Projets réalisés</h3>
        </div>
    </div>
<div class="porfolio-wrap py-5">
    <div class="container py-5">
        <h1>Dernier  <span>Project</span></h1>
        <ul class="row portfolio-service">
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/media/m01.jpg" class="cover200" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Construction</a></h3>
                            <div class="portfolio-tags"> <span>Construction</span>, <span>réparateur</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/media/m02.jpg"  class="cover200" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Construction</a></h3>
                            <div class="portfolio-tags"> <span>Construction</span>, <span>réparation</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/media/proj3.jpg"  class="cover200" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Piscine</a></h3>
                            <div class="portfolio-tags"> <span>Constructeur</span>, <span>réparation</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/media/m03.jpg"  class="cover200" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Maison</a></h3>
                            <div class="portfolio-tags"> <span>Construction</span>, <span>réparation</span> </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>

<?php
require_once $layout.'/footer.php';
?>
