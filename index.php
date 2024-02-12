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
        <div class="mar-style">
          <div class="sec5-container">
            <div class="sec5-title">
              <h3>ご利用までの流れ</h3>
            </div>
            <div class="sec5-box-container ">
              <div class="card-container">
                <div class="box-green">
                  <figure>
                    <img src="images/sec5/box-image.png" alt="box-image" class="box-image" />
                  </figure>
                </div>
                <div class="card-message">
                  <div class="card-title">
                    <h3><span>1</span>お申し込み</h3>
                  </div>
                  <div class="card-description">
                    <p>簡単なフォームにて<br>
                      情報の入力をします。</p>
                  </div>
                </div>
              </div>
              <div class="card-container">
                <div class="box-green">
                  <figure>
                    <img src="images/sec5/box-image.png" alt="box-image" class="box-image" />
                  </figure>
                </div>
                <div class="card-message">
                  <div class="card-title">
                    <h3><span>2</span>カウンセリング</h3>
                  </div>
                  <div class="card-description">
                    <p>当社スタッフからの<br>連絡を待ちます。</p>
                  </div>
                </div>
              </div>
              <div class="card-container">
                <div class="box-green">
                  <figure>
                    <img src="images/sec5/box-image.png" alt="box-image" class="box-image" />
                  </figure>
                </div>
                <div class="card-message">
                  <div class="card-title">
                    <h3><span>3</span>相談</h3>
                  </div>
                  <div class="card-description">
                    <p>連絡がきたら<br>
                      詳細をお伝え下さい。</p>
                  </div>
                </div>
              </div>
              <div class="card-container">
                <div class="box-green">
                  <figure>
                    <img src="images/sec5/box-image.png" alt="box-image" class="box-image" />
                  </figure>
                </div>
                <div class="card-message">
                  <div class="card-title">
                    <h3><span>4</span>問題解決</h3>
                  </div>
                  <div class="card-description">
                    <p>相談により問題解決！</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
    <section class="sec6">

    </section>
    <section id="sec7" class="sec7">
      <div class="mar-style">
        <div data-aos="fade-up" data-aos-anchor-placement="top-center">
          <h2 class="component--hdng-ttl" data-aos="fade-up" data-aos-anchor-placement="top-center">よくある質問</h2>
          <div class="sec7--container">
            <a href="" class="sec7--drop-button">
              <div>
                <span>Ｑ.</span>
                <p>
                  どういうお子さんが学んでいるの？
                </p>
              </div>
              <img src="/images/common/arrow_icon_up.png" alt="">
            </a>
            <div class="sec7--drop-down">
              <p>
                <span>A.</span>年中～高校３年生までの方が学んでいらっしゃいます。長く通っている方では、６年以上継続している方もいます。プログラミングやパソコンの基礎から応用、検定取得までできるので、着実にレベルアップを目指していただけます。
              </p>
            </div>
          </div>
          <div class="sec7--container">
            <a href="" class="sec7--drop-button">
              <div>
                <span>Ｑ.</span>
                <p>
                  未経験で家にもパソコンがないけど大丈夫なの？
                </p>
              </div>
              <img src="/images/common/arrow_icon_up.png" alt="">
            </a>
            <div class="sec7--drop-down">
              <p>
                <span>A.</span>教室では週１・２回、各５０分ひとり１台のパソコンを使って練習しますので、その中でしっかりスキルアップしていきます。また、宿題なども出しませんので、ご自宅にパソコンがなくても大丈夫ですので、ご安心ください。
              </p>
            </div>
          </div>
          <div class="sec7--container">
            <a href="" class="sec7--drop-button">
              <div>
                <span>Ｑ.</span>
                <p>
                  他のプログラミング教室何が違うの？
                </p>
              </div>
              <img src="/images/common/arrow_icon_up.png" alt="">
            </a>
            <div class="sec7--drop-down">
              <p>
                <span>A.</span>プログラミングに加え、タイピングやパソコンの操作や知識も併せて総合的に学べます。将来、どんな職業についても必要な総合的なスキルをバランスよく育みます。
              </p>
            </div>
          </div>
          <div class="sec7--container">
            <a href="" class="sec7--drop-button">
              <div>
                <span>Ｑ.</span>
                <p>
                  無料体験は何ができるの？費用は一切かからないの？
                </p>
              </div>
              <img src="/images/common/arrow_icon_up.png" alt="">
            </a>
            <div class="sec7--drop-down">
              <p>
                <span>A.</span>プログラミングとパソコン操作の両方の要素が入った課題で体験ができます。費用は一切かかりませんので、お気軽に無料体験をご予約ください。
              </p>
            </div>
          </div>
          <div class="sec7--container">
            <a href="" class="sec7--drop-button">
              <div>
                <span>Ｑ.</span>
                <p>
                  入会するタイミングは？いつでもできるの？
                </p>
              </div>
              <img src="/images/common/arrow_icon_up.png" alt="">
            </a>
            <div class="sec7--drop-down">
              <p>
                <span>A.</span>空席のところであれば、何月からでも、月途中からでもご入会いただけます。
              </p>
            </div>
          </div>
          <div class="sec7--container">
            <a href="" class="sec7--drop-button">
              <div>
                <span>Ｑ.</span>
                <p>
                  １回の授業は何分？月何回通うの？
                </p>
              </div>
              <img src="/images/common/arrow_icon_up.png" alt="">
            </a>
            <div class="sec7--drop-down">
              <p>
                <span>A.</span>１回の授業は５０分です。コースによって、月４回～８回受講いただけます。<br>
                ＊教室の授業カレンダーにより回数が変動する月もございます

              </p>
            </div>
          </div>
          <div class="sec7--container">
            <a href="" class="sec7--drop-button">
              <div>
                <span>Ｑ.</span>
                <p>
                  人気のコースを教えてください。
                </p>
              </div>
              <img src="/images/common/arrow_icon_up.png" alt="">
            </a>
            <div class="sec7--drop-down">
              <p>
                <span>A.</span>総合的に学べる、PC-ICT+ロジカコースが人気です。プログラミングでは、子どもむけのビジュアル言語から、一般的なテキスト言語、パソコンではタイピングからオフィス操作、検定取得までお子様のスキルを育むカリキュラムです。
              </p>
            </div>
          </div>
        </div>
      </div>
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