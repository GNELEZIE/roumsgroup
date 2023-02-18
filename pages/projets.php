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
                <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Interior Design</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio2.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Home</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio3.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Green House</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio4.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Home</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio5.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Interior Design</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio6.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Home</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio7.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Home</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio8.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Home</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio9.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Home</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio10.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Interior Design</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio11.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Home</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="project-image"><img src="<?=$cdn_domaine?>/images/portfolio12.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Home</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
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
