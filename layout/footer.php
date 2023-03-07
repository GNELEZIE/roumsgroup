
<div class="footer-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-xs-12">
                <div class="footer-logo">
                    <a href="<?=$domaine?>"><img src="<?=$cdn_domaine?>/media/logo-blanc.png" alt=""></a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquam neque eget ipsum porta, sed convallis odio convallis...
                    <a href="#">Lire la suite</a> </p>
                <div class="social">
                    <a href="#." target="_blank">
                        <i class="fab fa-facebook-square" aria-hidden="true"></i>
                    </a> <a href="#." target="_blank">
                        <i class="fab fa-twitter-square" aria-hidden="true"></i>
                    </a> <a href="#." target="_blank"><i class="fab fa-google-plus-square" aria-hidden="true"></i>
                    </a> <a href="#." target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="#." target="_blank"><i class="fab fa-youtube-square" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-12">
                <h3>Navigation</h3>
                <ul class="footer-links">
                    <li> <a href="<?=$domaine?>/a-propos"> Presentation </a></li>
                    <li> <a href="<?=$domaine?>/services"> Nos services</a></li>
                    <li> <a href="<?=$domaine?>/contact"> Contact-nous </a></li>
                    <li> <a href="#"> Faq </a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12">
                <h3>Services</h3>
                <ul class="footer-links">
                    <li><a href="<?=$domaine?>/construction">Construction rénovation</a></li>
                    <li><a href="<?=$domaine?>/import-export">Import export</a></li>
                    <li><a href="<?=$domaine?>/fournitures-et-equipements">Fournitures et équipements</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12">
                <h3>Contacts</h3>
                <div class="footer-address">Angré Djibi Arcades 1</div>
                <div class="call-us"> <a href="#">+225 07 68 49 59 97</a></div>
                <div class="fax"> <a href="#">+225 00 00 00 00 00</a></div>
            </div>
        </div>
        <div class="footerWrp">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="copyright">Copyright © ROUMS GROUP 2023 </div>
                </div>
                <div class="col-lg-6 col-md-5 w100 text-rights">
                   <p class="m-0">Designed and Developed by <a href="https://makompe.com/" target="_blank" style="text-decoration: none">Makompe Communication</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-scroll scrollToTop"><a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>
<script src="<?=$cdn_domaine?>/js/jquery-2.1.4.min.js"></script>
<script src="<?=$cdn_domaine?>/js/bootstrap.bundle.min.js"></script>
<script src="<?=$cdn_domaine?>/plugins/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=$cdn_domaine?>/plugins/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?=$cdn_domaine?>/js/owl.carousel.js"></script>
<script src="<?=$cdn_domaine?>/js/script.js"></script>
<script src="<?=$cdn_domaine?>/libs/sweetalert/sweetalert2.min.js"></script>
<script src="<?=$cdn_domaine?>/libs/intltelinput/js/intlTelInput.min.js"></script>
<script src="<?=$cdn_domaine?>/libs/wow/wow.js"></script>
<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();

</script>
</body>
</html>

