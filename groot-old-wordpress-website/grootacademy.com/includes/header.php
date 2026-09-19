<?php
// Disable reporting of warnings
error_reporting(E_ALL & ~E_WARNING);
?>

<?php include("define.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- usercentrics consent script as dated 14-Aug-2024 -->
    <script id="usercentrics-cmp" src="https://app.usercentrics.eu/browser-ui/latest/loader.js"
        data-settings-id="ckkjOhhqs1JNrS" async></script>
    <!-- usercentrics consent script as dated 14-Aug-2024 -->
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N3TMZ6WF');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Tag Manager by swiggy walal account date 14-Aug-2024 -->

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TVN2997');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Tag Manager by swiggy walal account date 14-Aug-2024 -->
    <!-- meta tag -->
    <!-- favicon -->
    <style>
        .mobilefooter {
            position: fixed;
            top: 40%;
            right: 0;
            display: flex;
            flex-direction: column;
            width: 70px;
            height: auto;
            /* gap: 25px; */
            background-color: #0B4D99;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            z-index: 99999999;
        }

        .button {
            display: block;
            width: 100%;
            height: 70px;
            background-color: #0B4D99;
            border: none;


        }

        .b1 {
            border-top-left-radius: 15px;
            border-bottom: 1px solid white;
        }

        .b2 {
            border-top: 1px solid white;
            border-bottom-left-radius: 15px;
        }

        .inputboxes {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: row;
            gap: 5px;
            width: 100%;
            background-color: #0B4D99;
            height: 50px;
            position: fixed;
            bottom: 0px;
            z-index: 99999;

        }

        .footer-form-input-field {
            height: 35px;
            padding: 3px;

        }

        .formfields {
            width: 200px;
        }

        .footer-button {
            background-color: #32B562;
            border: none;
            border-radius: 5px;
            padding: 4px;
            font-weight: bold;
            padding-left: 17px;
            padding-right: 18px;
            border: 1px solid;
            color: #fff;
        }


        @media (min-width:250px) and (max-width:450px) {
            .inputboxes {
                display: none;
            }

            .mobilefooter {
                display: flex;
                flex-direction: row;
                top: 90%;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 50px;
                z-index: 99999999;
                border-top-left-radius: 15px;
                border-bottom-left-radius: 0px;
                border-top-right-radius: 15px;
            }

            .b1 {
                border-top-left-radius: 15px;
                border: 0;
                border-right: 2px solid white;
            }

            .b2 {
                border: 0;
                border-top-right-radius: 15px;
            }

            .button {
                height: 50px;
                display: block;
            }

        }

        @media (min-width:747px) and (max-width:935px) {

            .footer-form-input-field {
                width: 150px;
                /* background-color: #32B562; */
            }

            .inputbutton {
                width: 100px;
            }
        }

        @media (min-width:550px) and (max-width:747px) {

            .footer-form-input-field {
                width: 100px;
                /* background-color: #32B562; */
            }

            .inputbutton {
                width: 100px;
            }
        }

        @media (min-width:450px) and (max-width:550px) {

            .footer-form-input-field {
                width: 60px;
                /* background-color: #32B562; */
            }

            .inputbutton {
                width: 100px;
            }
        }
    </style>

    <link rel="apple-touch-icon" href="<?php echo FINAL_WEBSITE_URL; ?>apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon"
        href="<?php echo FINAL_WEBSITE_URL; ?>assets/images/groot-new-favicon-icon-with-blue-backgournd.png">
    <!-- Bootstrap v4.4.1 css -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/bootstrap.min.css"> -->
    <!-- bootstrap cdn but by satnam sir just for experment -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/slick.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/off-canvas.css">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/fonts/linea-fonts.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/fonts/flaticon.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/rsmenu-main.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/rs-spacing.css">

    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/responsive.css">
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- assets\css\font-awesome-pro\css -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/font-awesome-pro/css/all.css">
        <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/font-awesome-pro/css/free.css">
     -->
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?php echo FINAL_WEBSITE_URL; ?>assets/css/style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>