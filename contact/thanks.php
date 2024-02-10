<?php

require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/define.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/monolog.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/mail.php';
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . "/contact/send_functions.php";

$pageTitle = "完了画面";

?>
<!DOCTYPE html>
<html lang="ja">

    <head>
        <?php include('./includes/in_side_head.php'); ?>

        <!-- Google Tag Manager バレッドキッズ -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NKHNPVK');</script>
        <!-- End Google Tag Manager バレッドキッズ -->
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WDR23PM');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body class="page">
        <!-- Google Tag Manager (noscript) バレッドキッズ -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKHNPVK"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) バレッドキッズ -->
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDR23PM"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <header class="page__top">
            <?php includeWithVariables('./includes/header.php'); ?>
            <section id="contactSect" class="thanksPage">
                <div class="mar-style">
                    <div class="contactWrapper contactSect_inner">
                        <div class="thanksWrap">
                            <h3 class="component--hdng-ttl">送信完了</h3>
                            <p>お問合せありがとうございました。<br>専門スタッフが確認し、24時間以内にご返信いたします。<br>少々お待ちくださいませ。</p>
                            <a href="/" class="btn" style="display:flex;align-items:center;justify-content:center;margin:0 auto;position:relative;">
                                トップへ戻る
                                <img src="<?=BASEURL;?>/images/common/arrow_icon.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contents -->
            <?php include('./includes/footer.php'); ?>
    </body>

</html>
