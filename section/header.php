<?php include "section/db.php" ?>
<!DOCTYPE html>
<html lang="tr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <!-- Meta start -->
    <meta charset="UTF-8">
    <meta name="robots" content="follow, index" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base>
    <title>Reloadedsky2</title>
    <!-- /meta start -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16" />
    <!-- /favicon -->

    <!-- Meta -->
    <meta name="keywords" content="metin2, Metin2 Panel, emek, orta emek, metin, pvp server metin2" />
    <meta name="description" content="Metin2 Panel pvp server Metin2 emek/zor." />
    <!-- /meta -->

    <!-- OpenGraph tags (espec. Facebook) -->
    <meta property="og:type" content="article" />
    <meta property="og:url" content="index-2.php" />
    <meta property="og:title" content="Metin2 Panel - Metin2 PVP Server" />
    <meta property="og:description" content="Metin2 Panel-#. Uzun süre boyunca, hoş dengeli ve ilginç oyun sunuyoruz!" />
    <meta property="og:image" content="data/upload/5f84556cc96374.71381751_epqmjflikognh.png" />
    <!-- /openGraph tags -->

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&amp;display=swap" rel="stylesheet">
    <link href="app/public/client/ares/asset/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="app/public/client/ares/asset/css/jquery.toast.min.css">

    <!--=== Add By Designer ===-->
    <link href="app/public/client/ares/asset/css/style.css" rel="stylesheet">
    <link href="app/public/client/ares/asset/css/responsive.css" rel="stylesheet">
    <link href="app/public/client/ares/asset/fonts/fonts.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="app/public/client/ares/asset/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="app/public/client/ares/main/css/extra.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="app/public/client/ares/main/css/fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="app/public/client/ares/notify/css/notify.css">
    <link rel="stylesheet" type="text/css" href="app/public/client/ares/notify/css/prettify.css">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="app/public/client/ares/asset/js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="app/public/client/ares/asset/js/tether.min.js"></script>
    <script src="app/public/client/ares/asset/js/bootstrap.min.js"></script>
    <script src="app/public/client/ares/asset/js/popper.min.js"></script>
    <!-- Object Fit -->

    <script type='text/javascript' src='app/public/client/ares/asset/js/select.js'></script>
    <script type='text/javascript' src='app/public/client/ares/asset/js/popuplogin.js'></script>
    <script type='text/javascript' src='app/public/client/ares/asset/js/ajaxpageloading.js'></script>
    <script type='text/javascript' src='app/public/client/ares/asset/js/modernizr.js'></script>
    <script type='text/javascript' src='app/public/client/ares/asset/js/jquery.history.js'></script>
    <script type='text/javascript' src='app/public/client/ares/asset/js/form-validation.js'></script>
    <script src="app/public/client/ares/asset/js/main.js" type="text/javascript" charset="utf-8"></script>
    <script src="app/public/client/ares/asset/js/jquery.easing.1.3.js"></script>
    <script src="app/public/client/ares/asset/js/jquery.animate-enhanced.min.js"></script>
    <script src="app/public/client/ares/asset/js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
    <script src="app/public/client/ares/asset/js/lightbox.js"></script>

    <script type="text/javascript" src="app/public/client/ares/main/js/fancybox.js"></script>
    <script src="app/public/client/ares/main/js/notify.js"></script>
    <script type="text/javascript" src="app/public/client/ares/notify/js/notify.js"></script>
    <script type="text/javascript" src="app/public/client/ares/notify/js/prettify.js"></script>
    <script type="text/javascript" src="app/public/client/ares/notify/js/notify-function.js"></script>

    <script src='../../www.google.com/recaptcha/api.js'></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var screenSize = $(window).height();
            var compareW = 767;
            if (screenSize > 0 && screenSize < compareW) {
                var fancy_a = 740;
                var fancy_b = 550;
                var fancy_c = "ishopbg-small";
                var fancy_d = "13px";
                var fancy_e = "3px";
                var fancy_f = "13px";
                var fancy_g = 754;
                var fancy_h = 574;
                var fancy_i = 6;
                var fancy_j = 20;
            } else {
                var fancy_a = 1016;
                var fancy_b = 655;
                var fancy_c = "ishopbg";
                var fancy_d = "16px";
                var fancy_e = "7px";
                var fancy_f = "16px";
                var fancy_g = 1032;
                var fancy_h = 690;
                var fancy_i = 8;
                var fancy_j = 28;
            }
            var fancybox_css = {
                'outer': {
                    'background': null
                },
                'close': {
                    'background_image': null,
                    'height': null,
                    'right': null,
                    'top': null,
                    'width': null
                }
            };
            $('a.itemshop').fancybox({
                'autoDimensions': false,
                'width': fancy_a,
                'height': fancy_b,
                'padding': 0,
                'scrolling': 'yes',
                'overlayColor': '#000',
                'overlayOpacity': 0.8,
                'onStart': function() {
                    fancybox_css.outer.background = $('#fancybox-outer').css('background');
                    fancybox_css.close.background_image = $('#fancybox-close').css('background-image');
                    fancybox_css.close.height = $('#fancybox-close').css('height');
                    fancybox_css.close.right = $('#fancybox-close').css('right');
                    fancybox_css.close.top = $('#fancybox-close').css('top');
                    fancybox_css.close.width = $('#fancybox-close').css('width');
                    $('#fancybox-outer').css({
                        'background': 'transparent url("https://demo.metin2panel.com/ares/app/public/client/ares/static/images/' + fancy_c + '.png") center center no-repeat'
                    });
                    $('#fancybox-close').css({
                        'background-image': 'none',
                        'cursor': 'pointer',
                        'height': fancy_d,
                        'right': '3px',
                        'top': fancy_e,
                        'width': fancy_f
                    });
                },
                'onComplete': function() {
                    $('#fancybox-inner').css({
                        'top': fancy_j,
                        'left': fancy_i
                    });
                    $('#fancybox-wrap').css({
                        'width': fancy_g,
                        'height': fancy_h
                    });
                },
                'onClosed': function() {
                    if (null != fancybox_css.outer.background) {
                        $('#fancybox-outer').css('background', fancybox_css.outer.background);
                    }
                    if (null != fancybox_css.close.background_image) {
                        $('#fancybox-close').css('background-image', fancybox_css.close.background_image);
                    }
                    if (null != fancybox_css.close.height) {
                        $('#fancybox-close').css('height', fancybox_css.close.height);
                    }
                    if (null != fancybox_css.close.right) {
                        $('#fancybox-close').css('right', fancybox_css.close.right);
                    }
                    if (null != fancybox_css.close.top) {
                        $('#fancybox-close').css('top', fancybox_css.close.top);
                    }
                    if (null != fancybox_css.close.width) {
                        $('#fancybox-close').css('width', fancybox_css.close.width);
                    }
                }
            });
        });
    </script>
</head>

<body>

    <style>
        .logo-header .logo {
            display: block;
            margin-right: auto;
            margin-left: auto;
            width: 246px;
            left: 0;
            right: 0;
            left: 114px;
            position: relative;
            filter: none;
            top: 57px;
        }

        .logo:hover {
            filter: brightness(120%);
        }
    </style>
    <div class="wrap">
        <!-- header start -->
        <header class="header clearfix">
            <nav class="navigation-custom">
                <div class="navigation-inner">
                    <ul class="left-menu">
                        <li><a href="index.php">HOME PAGE</a></li>
                        <li><a href="register.php">REGISTER</a></li>
                        <li><a href="download.php">DOWNLOAD GAME</a></li>
                    </ul>
                    <div class="logo">
                        <a href="index.php" class="logo-header">
                            <img src="data/upload/5f84556cc96374.71381751_epqmjflikognh.png" alt="logo" class="logo">
                        </a>
                    </div>
                    <ul class="right-menu">
                        <li><a href="player.php">ARRANGEMENT</a></li>
                        <li><a target="_blank" href="https://discord.com/invite/szMPGvTJgm">SUPPORT</a></li>
                        <li><a target="_blank" href="https://discord.com/invite/qb2NGn2DJ9">PROMOTION</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- header end -->