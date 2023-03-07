<?php
$countryCode = 'ci';

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
                <h1 class="wow slideInLeft">A propos </h1>
                <div class="aboutTxt wow slideInLeft">Services à travers le monde </div>
                <p class="wow slideInLeft">
                    Roums group, dont le siège social est basé à Abidjan en Côte d'Ivoire se donne pour mission principale de fournir des services de haut standing et des produits de qualité à des clients du monde entier. Notre équipe a créé une plateforme qui permet à nos clients de bénéficier d'un service à la demande qui répond à leurs besoins spécifiques, qu'il s'agisse de bâtiments, de travaux publics, d'importations, d'exportations, de fournitures ou d'équipements. Nous avons recours à des technologies modernes pour offrir des services à la demande, tels que des systèmes de gestion de la qualité et des systèmes de traçabilité. Nous faisons également appel à des méthodes de surveillance et de contrôle de qualité rigoureuses pour maintenir des normes élevées. Nous nous efforçons également de développer des partenariats avec des fournisseurs
                </p>
                <div class="readmore wow slideInRight"><a href="<?=$domaine?>/a-propos">En savoir plus</a></div>
            </div>
            <div class="col-lg-5">
                <div class="about-image wow slideInRight"><img src="<?=$cdn_domaine?>/media/empl02.jpg" class="cover375" alt=""></div>
            </div>
        </div>
    </div>
</div>
<div class="service-wrap">
    <div class="container">
        <h1 class="wow slideInLeft">Nos <span>Services</span></h1>
        <ul class="row serviceList">
            <li class="col-lg-4 col-md-6 wow slideInRight">
                <div class="service-image"><img src="<?=$cdn_domaine?>/media/constr.jpg" alt="">
                    <div class="hoverlink">
                        <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div class="service-details">
                    <h3><a href="#">Construction rénovation</a></h3>
                    <p>Votre partenaire de confiance en matière de construction et rénovation.</p>
                    <div class="readmore"><a href="<?=$domaine?>/construction">En savoir plus</a></div>
                </div>
            </li>
            <li class="col-lg-4 col-md-6 wow slideInRight">
                <div class="service-image"><img src="<?=$cdn_domaine?>/media/ie.jpg" alt="">
                    <div class="hoverlink">
                        <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div class="service-details">
                    <h3><a href="#">Import export</a></h3>
                    <p>Nous travaillons avec les meilleurs fournisseurs et les transporteurs.</p>
                    <div class="readmore"><a href="<?=$domaine?>/import-export">En savoir plu</a></div>
                </div>
            </li>
            <li class="col-lg-4 col-md-6 wow slideInRight">
                <div class="service-image"><img src="<?=$cdn_domaine?>/media/equ.jpg" alt="">
                    <div class="hoverlink">
                        <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div class="service-details">
                    <h3><a href="#">Fournitures et équipements</a></h3>
                    <p>Nous nous engageons à fournir des produits de haute qualité.</p>
                    <div class="readmore"><a href="<?=$domaine?>/fournitures-et-equipements">En savoir plu</a></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="porfolio-wrap">
    <div class="container">
        <h1 class="wow slideInRight">Dernier  <span>Project</span></h1>
        <ul class="row portfolio-service">
            <li class="col-lg-3 col-md-6 wow slideInLeft">
                <div class="project-image"><img src="<?=$cdn_domaine?>/media/portfolio.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Interior Design</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 wow slideInLeft">
                <div class="project-image"><img src="<?=$cdn_domaine?>/media/portfolio2.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Home</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 wow slideInLeft">
                <div class="project-image"><img src="<?=$cdn_domaine?>/media/portfolio3.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Green House</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 wow slideInLeft">
                <div class="project-image"><img src="<?=$cdn_domaine?>/media/portfolio4.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Home</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 wow slideInLeft">
                <div class="project-image"><img src="<?=$cdn_domaine?>/media/portfolio5.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Interior Design</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 wow slideInLeft">
                <div class="project-image"><img src="<?=$cdn_domaine?>/media/portfolio6.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Home</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="col-lg-3 col-md-6 wow slideInLeft">
                <div class="project-image"><img src="<?=$cdn_domaine?>/media/portfolio12.jpg" alt="">
                    <div class="portfolio-overley">
                        <div class="content">
                            <h3><a href="#">Home</a></h3>
                            <div class="portfolio-tags"> <span>Builder</span>, <span>Repairman</span> </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 wow slideInLeft">
                <div class="project-image"><img src="<?=$cdn_domaine?>/media/portfolio10.jpg" alt="">
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
            <h1 class="wow slideInLeft">Témoignages</h1>
        </div>
        <ul class="owl-carousel testimonials wow slideInRight">
            <li class="item">
                <div class="testi-info">
                    <p>Je suis ravi de partager mon expérience positive avec ROUMS GROUP pour la rénovation de ma maison. Je suis un client satisfait et je recommande vivement cette entreprise à quiconque cherche à rénover sa maison.</p>
                    <div class="name">KONAN Kouamé Hervé</div>
                    <div class="client-image"><img src="<?=$cdn_domaine?>/media/user.png" alt=""></div>
                </div>
            </li>
            <li class="item">
                <div class="testi-info">
                    <p>
                        L'équipe de ROUMS GROUP a été très professionnelle et a travaillé en étroite collaboration avec moi pour
                        comprendre mes besoins et mes attentes en matière de rénovation. Ils ont fourni des conseils judicieux pour répondre à toutes mes demandes.
                    </p>
                    <div class="name">TOGBA Blaise</div>
                    <div class="client-image"><img src="<?=$cdn_domaine?>/media/user.png" alt=""></div>
                </div>
            </li>
            <li class="item">
                <div class="testi-info">
                    <p>Je suis très satisfait du résultat final de leur service d'import-export. Tout a été fait selon mes spécifications et je suis très satisfait du travail accompli par ROUMS GROUP. Merci ROUMS GROUP pour votre excellent travail!</p>
                    <div class="name">FOFANA Aly</div>
                    <div class="client-image"><img src="<?=$cdn_domaine?>/media/user.png" alt=""></div>
                </div>
            </li>
            <li class="item">
                <div class="testi-info">
                    <p>Leur service a été exceptionnel, de la préparation des documents à la livraison des marchandises. La qualité de leur travail est incomparable et leur attention aux détails est vraiment remarquable. Ils ont respecté les délais impartis et ont travaillé avec diligence pour s'assurer que tout était livré en temps et en heure.</p>
                    <div class="name">Diallo Maimouna</div>
                    <div class="client-image"><img src="<?=$cdn_domaine?>/media/user.png" alt=""></div>
                </div>
            </li>
            <li class="item">
                <div class="testi-info">
                    <p>Le processus d'import-export peut être complexe et difficile à naviguer, mais ROUMS GROUP a rendu tout le processus extrêmement facile et transparent pour moi. Ils ont travaillé en étroite collaboration avec moi pour comprendre mes besoins en matière d'import-export. </p>
                    <div class="name">Tra bi Irie</div>
                    <div class="client-image"><img src="<?=$cdn_domaine?>/media/user.png" alt=""></div>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="team_wrap">
    <div class="container">
        <h1 class="wow slideInRight">Nos <span>Expert</span></h1>
        <p class="wow slideInLeft text-justify">ROUMS GROUP est une entreprise de construction et de rénovation qui se compose d'une équipe d'experts hautement qualifiés et professionnels. Chaque membre de l'équipe apporte des compétences et des connaissances uniques à l'entreprise, ce qui permet à ROUMS GROUP de fournir des services de construction et de rénovation de haute qualité à ses clients.</p>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team wow slideInLeft">
                    <div class="team-image"> <img src="<?=$cdn_domaine?>/media/team01.png" alt="">
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
                <div class="team wow slideInLeft">
                    <div class="team-image"> <img src="<?=$cdn_domaine?>/media/team02.png" alt="">
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
                <div class="team wow slideInLeft">
                    <div class="team-image"> <img src="<?=$cdn_domaine?>/media/team03.png" alt="">
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
                <div class="team wow slideInLeft">
                    <div class="team-image"> <img src="<?=$cdn_domaine?>/media/team04.png" alt="">
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
            <h1 class="wow slideInLeft">Contactez <span>nous</span></h1>
            <div class="row">
                <div class="col-lg-8 column">
                    <div class="contact-form wow slideInLeft">
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
                                    <textarea name="msg" id="msg" rows="5" placeholder="Message"></textarea>
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
                    <div class="contact-now wow slideInRight">
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

        $('.tp-leftarrow.default').html('<i class="fa fa-angle-left icon-paginate"></i>');
        $('.tp-rightarrow.default').html('<i class="fa fa-angle-right icon-paginate"></i>');



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
                        $('#phone').val('');
                        $('#msg').val('');
                        $('#email').val('');
                        $('#nom').val('');

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