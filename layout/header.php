<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Construction</title>
    <link rel="shortcut icon" href="<?=$cdn_domaine?>/media/favicon.ico">
    <link href="<?=$cdn_domaine?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$cdn_domaine?>/css/all.css" rel="stylesheet">
    <link href="<?=$cdn_domaine?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?=$cdn_domaine?>/css/style.css" rel="stylesheet">
    <link href="<?=$cdn_domaine?>/plugins/css/settings.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/libs/sweetalert/sweetalert.css" type="text/css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/libs/intltelinput/css/intlTelInput.min.css"/>
    <style>
        .quote-wrap h2 {
            text-transform: inherit;
            font-size: 21px;
        }
        .text-right{
          text-align: right;
        }
        .callIcom{
            padding-right: 10px;
            transform: rotate(126deg);
            padding-top: 15px;
            text-decoration: none;
            color: #ffffff;
        }
        .callIa{
            text-decoration: none;
            color: #ffffff;
        }
        .tp-simpleresponsive a{
            transition: all 0.2s ease-out 0s;
            padding: 10px 25px;
            font-size: 14px;
            color: #ffffff !important;
        }
        .quote-wrap{
            background: #fdc236;
            padding: 15px 0;
        }

        .quote-wrap .quote-btn a {
            font-size: 15px;
            text-transform: inherit;
            padding: 7px 17px;
        }
        .readmore a {
            color: #fff !important;
            font-size: 15px;
            padding: 8px 17px;
            text-transform: inherit;
        }
        .service-image img {
            object-fit: cover;
            height: 270px;
            width: 100%;
        }
        .service-wrap .readmore a {
            padding: 7px 15px;
            font-size: 13px;
        }
        .contact-form input, .contact-form textarea {
            border: 2px solid #ddd;
            line-height: 23px;
            border-radius: 6px;
        }
        .information > strong {
            text-transform: none;
        }
        .iti{
            width: 100% !important;
        }
        .contact-form .button {
            font-size: 18px;
            background: #fdc236;
            text-transform: none;
            color: #fff;
            font-weight: bold;
            padding: 11px 25px;
            width: 50%;
            border-radius: 6px;
        }
        .contact-form .button:hover {
            color: #fff;
        }
        .contact-form .button:before{
            border-radius: 6px;
        }

        .loader-btn {
            width: 0.9rem;
            height: 0.9rem;
            vertical-align: middle;
            border: 2px solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner-border .75s linear infinite;
            animation: spinner-border .75s linear infinite;
            align-self: center;
            display: none;
        }
        .client-image img{
            width: 75px;
        }
        .tp-leftarrow .tp-arr-iwrapper:before {
            content: "\f104";
            opacity:0;
        }
        .pagi-icon{

        }












        @media(max-width: 767px) {

            h1 {
                font-size: 19px;
            }
            .inner-heading h3 {
                font-size: 23px;
            }
            iframe{
                width: 100% !important;
            }



        }






    </style>
</head>
<body>
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="d-flex">
                    <a href="tel:002250768495997" class="callIcom">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </a>
                    <a href="tel:002250768495997" class="pl-3 callIa">
                        +225 07 68 49 59 97
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="social text-right">
                    <a href="#" target="_blank">
                        <i class="fab fa-facebook-square" aria-hidden="true"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fab fa-twitter-square" aria-hidden="true"></i>
                    </a>
                    <a href="#" target="_blank"><i class="fab fa-google-plus-square" aria-hidden="true"></i>
                    </a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-youtube-square" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="navbar navbar-expand-lg bg-light">
                    <div class="logo">
                        <a href="<?=$domaine?>"><img src="<?=$cdn_domaine?>/media/logo.png" alt=""></a>
                    </div>
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="navigationwrape">
                    <nav class="navbar navbar-expand-lg"> <a class="navbar-brand" href="#">Navbar</a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li> <a href="<?=$domaine?>" class="<?=page_active('')?>" > Accueil </a></li>
                                <li> <a href="<?=$domaine?>/a-propos" class="<?=page_active('a-propos')?>"> Presentation </a></li>
                                <li> <a href="<?=$domaine?>/services"  class="<?=page_active('services')?>"> Services </a></li>
                                <li> <a href="<?=$domaine?>/projets"  class="<?=page_active('projets')?>"> Projets réalisés </a></li>
                                <li> <a href="<?=$domaine?>/contact"  class="<?=page_active('contact')?>"> Contact </a></li>
                                <li> <a href="<?=$domaine?>/faq"  class="<?=page_active('faq')?>"> Faq </a></li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>