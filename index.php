<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/define.php';

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>バレッドキッズ</title>
  <meta name="description" content="ページの説明" />
  <meta name="format-detection" content="telephone=no" />

  <link rel="icon" href="favicon.ico" />

  <!-- ogp -->
  <!-- ogp -->
  <meta property="og:site_name" content="" />
  <meta property="og:url" content="<?= BASEURL; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="<?= BASEURL; ?>images/ogp.jpg" />
  <meta property="og:locale" content="ja_JP" />

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="" />
  <meta name="twitter:image:src" content="<?= BASEURL; ?>images/ogp.jpg" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/base.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

  <header id="top-head">
    <div class="header--wrap">
      <div class="header--container">
        <div class="header--left">
          <a href="index.php"><img src="/images/common/logo.svg" alt="" /></a>
        </div>
        <div class="header--right">
          <a href="#sec12" class="header--request">
            <p class="header--request__txt">資料請求・無料体験</p>
          </a>
          <div class="header--menu">
            <a href="" class="header--menu__btn">
              <figure>
                <img src="/images/common/burger_button.svg" alt="" />
              </figure>
            </a>
            <div class="header--ham_menu">
              <div class="header--ham_menu__container">
                <a href="" class="close-btn">
                  <img src="/images/common/burger_button2.svg" alt="" />
                </a>
                <div class="close-btn__center">
                  <ul>
                    <li><a href="index.php">TOP</a></li>
                    <li><a href="#sec03">プログラミングで身につく力</a></li>
                    <li><a href="#sec06">バレッドキッズの3つの特徴</a></li>
                    <li><a href="#sec08">コース紹介</a></li>
                    <li><a href="#sec10">受講した保護者の声</a></li>
                    <li><a href="#sec11">よくある質問</a></li>
                    <li><a href="#sec13">教室一覧</a></li>
                  </ul>
                  <a href="#sec12" class="header--request">
                    <p>資料請求・無料体験</p>
                  </a>
                </div>
              </div>
              <div class="bg-overlay"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- コンテンツを記述 -->
  <main>
    <div class="contents">
      <section class="sec1">
        <h1 style="font-family: LineSeedBold; font-size: 70px;">インターネットの<br>わからないを解決します。</h1>
      </section>
      <section class="sec2">
        <div class="hdr-container">
          <div class="mar-style">
            <div class="hdr">
              <h3 class="component--hdng-ttll">ネット回線コンシェルジュで解決できること</h3>
            </div>
          </div>
        </div>
        <div class="contnr">
          <div class="mar-style bg">
            <div class="sec2--container">
              <div class="l-wrap">
                <div class="wrapperContainer">
                  <div class="wrapper">
                    <div class="tittle--text">
                      <h1>通信トラブル、速度が遅い、<br>
                        不安定などの解決</h1>
                    </div>
                    <div class="detail-box">
                      <p>解決できること01の文章がここに入ります。解解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここ</p>
                    </div>
                  </div>
                </div>
                <div class="wrapperContainer">
                  <div class="wrapper">
                    <div class="tittle--text">
                      <h1>高額請求や、勧誘電話の対処、開通後、<br>開通前の解約、契約のキャンセル</h1>
                    </div>
                    <div class="detail-box">
                      <p>解決できること01の文章がここに入ります。解解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここ</p>
                    </div>
                  </div>
                </div>
                <div class="wrapperContainer">
                  <div class="wrapper">
                    <div class="tittle--text">
                      <h1>あなたにあったベストな<br>
                        インターネットプランのご提案</h1>
                    </div>
                    <div class="detail-box">
                      <p>解決できること01の文章がここに入ります。解解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここ</p>
                    </div>
                  </div>
                </div>
                <div class="wrapperContainer">
                  <div class="wrapper">
                    <div class="tittle--text">
                      <h1>回線を変えたが<br>
                        やっぱり元の回線に戻したい</h1>
                    </div>
                    <div class="detail-box">
                      <p>解決できること01の文章がここに入ります。解解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここに入ります。解決できること01の文章がここ</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sec3">

      </section>
      <section class="secCTA">

      </section>
      <section class="sec5">

      </section>
      <section class="sec6">

      </section>
      <section id="sec7" class="sec7">

      </section>
      <section class="secCTA">

      </section>
      <section id="sec9">
        <?php
        // お問い合わせフォーム
        require_once DOCROOT . 'contact/send_functions.php';
        include('./contact/includes/form.php'); ?>
      </section>
    </div>
    <!--/contents-->

  </main>

  <footer class="bg_ft">
    <div class="mar-style">
      <div class="footer--container">
        <div class="footer--des">
          <p>© GlobalCast Co.,Ltd. All Rights Reserved. </p>
          <div class="info--container">
            <div class="info">
              <p class="info--p">運営会社</p>
              <p>プライバシー・ポリシー</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
  <script src="js/common.js" defer></script>
  <script>
    $('.sec2 .wrapper').matchHeight();

    AOS.init({
      once: true,
    });
  </script>

</body>

</html>