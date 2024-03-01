<?php

require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/define.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/monolog.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/mail.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . "/contact/send_functions.php";

?>
<!DOCTYPE html>
<html lang="ja">

    <head>
        <?php include('./includes/in_side_head.php'); ?>
    </head>
    <body class="page">
        <header class="page__top">
            <?php includeWithVariables('./includes/header.php'); ?>
            <div class="">
                <section id="sec9" class="confirmPage">
                    <div class="contactWrapper">
                        <div class="bdr-radius">
                            <?php
                            // お問い合わせフォーム
                            include('./includes/form.php'); ?>
                        </div>
                    </div>
                </section>
            </div>

            <!-- contents -->
            <?php include('./includes/footer.php'); ?>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
            <script src="../js/common.js" defer></script> 
            <script>
                // Get a reference to the reset button
                var resetButton = document.querySelector('input[type="reset"]');

                if(resetButton){
                    // Add a click event listener to the reset button
                    resetButton.addEventListener('click', function() {
                        // Use JavaScript to navigate back to the previous page
                        window.history.back();
                    });
                }
            </script>
    </body>

</html>
