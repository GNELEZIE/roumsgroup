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
            <h3>Contact</h3>
        </div>
    </div>
    <div class="inner-content">
        <div class="container">
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
            <div class="map text-center pt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.0493925295073!2d-3.9801463857256865!3d5.409448536611582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc193657f0df6b3%3A0xf553c593acfe0e20!2sLes%20Arcades%201!5e0!3m2!1sfr!2sci!4v1676716624701!5m2!1sfr!2sci" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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