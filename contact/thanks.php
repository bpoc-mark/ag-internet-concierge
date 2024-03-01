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
    </head>
    <body class="page">
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
