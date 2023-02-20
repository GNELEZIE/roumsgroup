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
            <h3>Nos services</h3>
        </div>
    </div>
<div class="service-wrap">
    <div class="container">
        <h1 class="wow slideInLeft"> <span>Services</span></h1>
        <ul class="row serviceList">
            <li class="col-lg-4 col-md-6 wow slideInRight">
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
            <li class="col-lg-4 col-md-6 wow slideInRight">
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
            <li class="col-lg-4 col-md-6 wow slideInRight">
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

<?php
require_once $layout.'/footer.php';
?>
<script>
    $(document).ready(function(){

        var contactform = $('#contactform');
        contactform.submit(function(e){
            e.preventDefault();
            $('.loarder').html('<i class="fas fa-circle-notch fa-spin"></i>');
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