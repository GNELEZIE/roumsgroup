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
            <h3>Faq</h3>
        </div>
    </div>
<div class="inner-content faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-2 py-3">
                <h3 class="font-17"><span>Questions fréquemment posées</span></h3>
                <div class="faqs">
                    <div class="collaps">
                        <ul class="faqs-service">
                            <li>
                                <h4 class="active">Suspendisse tempor eros neque non placerat neque iaculis sed?</h4>
                                <p style="display:block;height:auto;">Mauris quis consectetur eros, eu dapibus nulla. Quisque imperdiet mattis pellentesque. Suspendisse tempor eros neque, non placerat neque iaculis sed. Mauris et ipsum eget quam sollicitudin tristique.</p>
                            </li>
                            <li>
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <p>Mauris quis consectetur eros, eu dapibus nulla. Quisque imperdiet mattis pellentesque. Suspendisse tempor eros neque, non placerat neque iaculis sed. Mauris et ipsum eget quam sollicitudin tristique.</p>
                            </li>
                            <li>
                                <h4>Suspendisse tempor eros neque non placerat neque iaculis sed?</h4>
                                <p>Mauris quis consectetur eros, eu dapibus nulla. Quisque imperdiet mattis pellentesque. Suspendisse tempor eros neque, non placerat neque iaculis sed. Mauris et ipsum eget quam sollicitudin tristique.</p>
                            </li>
                            <li>
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <p>Mauris quis consectetur eros, eu dapibus nulla. Quisque imperdiet mattis pellentesque. Suspendisse tempor eros neque, non placerat neque iaculis sed. Mauris et ipsum eget quam sollicitudin tristique.</p>
                            </li>
                        </ul>
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
    /**faq**/
    /**Collaps**/
    jQuery(function ($) {
        $(document).ready(function() {
            $('.collaps h4').each(function() {
                var tis = $(this), state = false;
                tis.click(function() {
                    var answer = tis.next('p').hide().css('height','auto').slideUp();
                    $('.collaps p').hide().css('height','auto').slideUp();
                    $('.collaps h4').removeClass("active");
                    answer.slideToggle(state);
                    state = true;
                    tis.toggleClass('active',state);
                });
            });
        });
    });
</script>