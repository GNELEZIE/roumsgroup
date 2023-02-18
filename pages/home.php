<?php
$countryCode = 'ci';

//require_once $controller.'/save.contact.php';
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;

require_once $layout.'/header.php';
include_once $layout.'/slider.php';
?>

    <div class="quote-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2>Vous cherchez un constructeur de qualité pour votre prochain projet?</h2>
                </div>
                <div class="col-lg-3">
                    <div class="quote-btn"><a href="<?=$domaine?>/contact">Contactez-vous</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>A propos de <span>Roums Group</span></h1>
                    <div class="aboutTxt">Curabitur congue egestas dapibus.</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non libero consectetur, blandit mauris eget, imperdiet nisl. Etiam commodo ex nec erat tempor varius. Nunc rutrum pretium nunc in malesuada. Curabitur mollis urna ac sapien vulputate, ut congue sapien vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam et suscipit dui. Maecenas velit quam, mollis id erat eget, scelerisque elementum odio. Maecenas ac sagittis erat. Quisque hendrerit dapibus diam, a venenatis dui efficitur nec. Aenean tincidunt ullamcorper fermentum.</p>
                    <div class="readmore"><a href="<?=$domaine?>/a-propos">En savoir plus</a></div>
                </div>
                <div class="col-lg-5">
                    <div class="about-image"><img src="<?=$cdn_domaine?>/images/about-jhoss.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-wrap">
        <div class="container">
            <h1>Nos <span>Services</span></h1>
            <ul class="row serviceList">
                <li class="col-lg-4 col-md-6">
                    <div class="service-image"><img src="<?=$cdn_domaine?>/media/constr.jpg" alt="">
                        <div class="hoverlink">
                            <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="service-details">
                        <h3><a href="#">Construction rénovation</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu faucibus.</p>
                        <div class="readmore"><a href="<?=$domaine?>/construction">En savoir plus</a></div>
                    </div>
                </li>
                <li class="col-lg-4 col-md-6">
                    <div class="service-image"><img src="<?=$cdn_domaine?>/media/ie.jpg" alt="">
                        <div class="hoverlink">
                            <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="service-details">
                        <h3><a href="#">Import export</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu faucibus.</p>
                        <div class="readmore"><a href="<?=$domaine?>/import-export">En savoir plu</a></div>
                    </div>
                </li>
                <li class="col-lg-4 col-md-6">
                    <div class="service-image"><img src="<?=$cdn_domaine?>/media/equ.jpg" alt="">
                        <div class="hoverlink">
                            <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="service-details">
                        <h3><a href="#">Fournitures et équipements</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu faucibus.</p>
                        <div class="readmore"><a href="<?=$domaine?>/fournitures-et-equipements">En savoir plu</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="porfolio-wrap">
        <div class="container">
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

    <div class="testimonials-wrap">
        <div class="container">
            <div class="heading-wrap">
                <h1>Témoignages</h1>
            </div>
            <ul class="owl-carousel testimonials">
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at egestas diam. Phasellus eget tortor tellus. Aliquam erat volutpat. Nunc sed arcu malesuada, viverra justo bibendum, sagittis ipsum. Quisque in ornare dui, id scelerisque eros. </p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?=$cdn_domaine?>/media/user.png" alt=""></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at egestas diam. Phasellus eget tortor tellus. Aliquam erat volutpat. Nunc sed arcu malesuada, viverra justo bibendum, sagittis ipsum. Quisque in ornare dui, id scelerisque eros. </p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?=$cdn_domaine?>/media/user.png" alt=""></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at egestas diam. Phasellus eget tortor tellus. Aliquam erat volutpat. Nunc sed arcu malesuada, viverra justo bibendum, sagittis ipsum. Quisque in ornare dui, id scelerisque eros. </p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?=$cdn_domaine?>/media/user.png" alt=""></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at egestas diam. Phasellus eget tortor tellus. Aliquam erat volutpat. Nunc sed arcu malesuada, viverra justo bibendum, sagittis ipsum. Quisque in ornare dui, id scelerisque eros. </p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?=$cdn_domaine?>/media/user.png" alt=""></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at egestas diam. Phasellus eget tortor tellus. Aliquam erat volutpat. Nunc sed arcu malesuada, viverra justo bibendum, sagittis ipsum. Quisque in ornare dui, id scelerisque eros. </p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?=$cdn_domaine?>/media/user.png" alt=""></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at egestas diam. Phasellus eget tortor tellus. Aliquam erat volutpat. Nunc sed arcu malesuada, viverra justo bibendum, sagittis ipsum. Quisque in ornare dui, id scelerisque eros. </p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?=$cdn_domaine?>/media/user.png" alt=""></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="team_wrap">
        <div class="container">
            <h1>Nos <span>Expert</span></h1>
            <p>Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec <br>
                tetuer adipis elit, aliquam eget nibh etlibura.</p>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team">
                        <div class="team-image"> <img src="<?=$cdn_domaine?>/images/team01.png" alt="">
                            <div class="team-info">
                                <h5><a href="#">STEVE JOBS</a></h5>
                                <span>Supervisor</span>
                                <ul class="experts">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team">
                        <div class="team-image"> <img src="<?=$cdn_domaine?>/images/team02.png" alt="">
                            <div class="team-info">
                                <h5><a href="#">Alex Cameron</a></h5>
                                <span>Supervisor</span>
                                <ul class="experts">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team">
                        <div class="team-image"> <img src="<?=$cdn_domaine?>/images/team03.png" alt="">
                            <div class="team-info">
                                <h5><a href="#">Jack Peterson</a></h5>
                                <span>Supervisor</span>
                                <ul class="experts">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team">
                        <div class="team-image"> <img src="<?=$cdn_domaine?>/images/team04.png" alt="">
                            <div class="team-info">
                                <h5><a href="#">Adam Lewis</a></h5>
                                <span>Supervisor</span>
                                <ul class="experts">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="contact-wrap">
                <h1>Contactez <span>nous</span></h1>
                <div class="row">
                    <div class="col-lg-8 column">
                        <div class="contact-form">
                            <div id="message"></div>
                            <form method="post" name="contactform" id="contactform">
                                <?php if(!empty($success)){ ?>
                                    <div class="alert alert-success" style="font-size: 14px" role="alert">
                                        <?php foreach($success as $succ){ ?>
                                            <?php echo $succ ?>
                                        <?php }?>
                                    </div>
                                <?php }?>

                                <?php if(!empty($errors)){ ?>
                                    <div class="alert alert-danger" style="font-size: 14px" role="alert">
                                        <?php foreach($errors as $error){ ?>
                                            <?php echo $error ?>
                                        <?php }?>
                                    </div>
                                <?php }?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input name="nom" type="text" id="nom" placeholder="Nom & Prénom">
                                    </div>
                                    <div class="col-lg-12 pb-2">
                                        <input type="tel" class="form-control style-input" id="phone" name="phone" maxlength="10" required>
                                        <input type="hidden"  name="isoPhone" id="isoPhone" value="">
                                        <input type="hidden"  name="dialPhone" id="dialPhone" value="">
                                    </div>
                                    <div class="col-lg-12">
                                        <input name="email" type="text" id="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea rows="4" name="message" id="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="hidden" class="form-control" name="formkey" value="<?=$token?>">
                                        <button title="" class="button" type="submit" id="submit"> <i class="loarder"></i> Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 column">
                        <div class="contact-now">
                            <div class="contact"> <span><i class="fa fa-home"></i></span>
                                <div class="information"> <strong>Localisation</strong>
                                    <p>Angré Djibi Arcades 1</p>
                                </div>
                            </div>
                            <div class="contact"> <span><i class="fa fa-envelope"></i></span>
                                <div class="information"> <strong>Email</strong>
                                    <p>info@roumsgroups.com</p>
                                </div>
                            </div>
                            <div class="contact"> <span><i class="fa fa-phone"></i></span>
                                <div class="information"> <strong>Téléphone</strong>
                                    <p>+225 07 68 49 59 97</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require_once $layout.'/footer.php';
?>
<script>
    $(document).ready(function(){

        $('.tp-leftarrow.default').html('<i class="fa fa-angle-left"></i>');



        var contactform = $('#contactform');
        contactform.submit(function(e){
            e.preventDefault();
            $('.loarder').html('<i class="fas fa-circle-notch fa-spin pagi-icon"></i>');
            var value = document.getElementById('contactform');
            var form = new FormData(value);

            $.ajax({
                method: 'post',
                url: '<?=$domaine?>/controle/save.contact',
                data: form,
                contentType:false,
                cache:false,
                processData:false,
                success: function(data){
//                alert(data);
                    if(data == "ok"){
                        swal("Votre message a été envoyé avec succès !!!","", "success");
                        $('.loarder').html('');
                    }else if(data == "1"){
                        $('.loarder').html('');
                        swal("Action Impossible !", " Votre adresse email n\'est pas correct", "error");
                    }
                    else {
                        $('.loarder').html('');
                        swal("Action Impossible !", "Une erreur s\'est produite lors du traitement des données !", "error");
                    }
                },
                error: function (error, ajaxOptions, thrownError) {
                    alert(error.responseText);
                }
            });

        });


        $("#phone").keyup(function (event) {
            if (/\D/g.test(this.value)) {
                this.value = this.value.replace(/\D/g, '');
            }
        });

        var inputPhone = document.querySelector("#phone");
        window.intlTelInput(inputPhone, {
            initialCountry: '<?=$countryCode?>',
            onlyCountries: ["ci"],
            utilsScript: "<?=$cdn_domaine?>/libs/intltelinput/js/utils.js"
        });
        var iti = window.intlTelInputGlobals.getInstance(inputPhone);
        var countryData = iti.getSelectedCountryData();
        $('#isoPhone').val(countryData["iso2"]);
        $('#dialPhone').val(countryData["dialCode"]);
        inputPhone.addEventListener("countrychange", function() {
            var iti = window.intlTelInputGlobals.getInstance(inputPhone);
            var countryData = iti.getSelectedCountryData();
            $('#isoPhone').val(countryData["iso2"]);
            $('#dialPhone').val(countryData["dialCode"]);
        });

    });
</script>