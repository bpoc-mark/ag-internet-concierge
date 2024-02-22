<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/define.php';

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ネット回線コンシェルジュ</title>
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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
          <a href="/"><img src="/images/common/logo.svg" alt="" /></a>
        </div>
        <div class="header--right">
          <div class="header--menu">
            <nav>
              <ul class="menu">
                <li><a href="#sec2">解決できること</a></li>
                <li><a href="#sec3">選ばれる理由</a></li>
                <li><a href="#sec5">ご利用までの流れ</a></li>
                <li><a href="#sec6">お客様の声</a></li>
                <li><a href="#sec7">よくある質問</a></li>
              </ul>
            </nav>
          </div>
          <a href="tel:0120-716-715" class="Hcontact">
            <img src="/images/common/Hcontact.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- コンテンツを記述 -->
  <main>
    <div class="contents">
      <section class="sec1" id="sec1">
        <div class="sec1--container">
          <div class="mar-style">
            <div class="l-wrap">
              <div class="datails-box">
                <div data-aos="fade-up">
                  <h1>インターネットの<br><span class="green">わからない</span>を<br class="brH">解決します。</h1>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                  <p class="ptext">当サイトは「インターネットのプロが親身に」をテーマに、<br class="brP">あらゆるインターネットの悩みを解決する無料相談サイトです。</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                  <div class="text--box">
                    <div class="container--box">
                      <div class="text-title">
                        <div class="text--tittle-img">
                          <img class="pcH1B" src="/images/common/h1B.png" alt="">
                        </div>
                      </div>
                      <a href="tel:+0120716715" class="text-title2">
                        <img src="/images/common/contactimg.png" alt="">
                      </a>
                      <div class="buttons">
                        <a href="https://page.line.me/?accountId=344sanfa" class="btn green">
                          <p>LINEから相談する</p><img class="arrow" src="/images/common/arrowB.png" alt="">
                        </a>
                        <a href="#contactSect" class="btn yellow">
                          <p>Webから相談する</p><img class="arrow" src="/images/common/arrowB.png" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="right">
                <div data-aos="fade-up" data-aos-delay="300">
                  <div class="illu--box">
                    <div class="illustration-img">
                      <div class="circle-box">
                        <img src="/images/common/circle1.png" alt="">
                        <img src="/images/common/circle2.png" alt="">
                        <img src="/images/common/circle3.png" alt="">
                      </div>
                      <img class="illusp" src="/images/common/illustrationimg.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sec2" id="sec2">
        <div class="hdr-container">
          <div class="mar-style">
            <div class="hdr">
              <h3 class="component--hdng-ttll" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">ネット回線コンシェルジュで出来ること</h3>
            </div>
          </div>
        </div>
        <div class="contnr">
          <div class="mar-style bg">
            <div class="sec2--container">
              <div class="l-wrap">
                <div class="wrapperContainer" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
                  <div class="wrapper">
                    <div class="tittle--text">
                      <h4>世の中に数多くある回線から、<br>あなたに合ったベストなプランを紹介</h4>
                    </div>
                    <div class="detail-box">
                      <p>「<b>リモートで仕事</b>をするから<b>データ共有やWeb会議が快適</b>に行えるネット環境にしたい」「<b>家でオンラインゲームをしたい</b>ので遊んでいる途中に<b>ネットが落ちたり、ラグが出ない回線</b>にしたい」「特に希望はないけど、とりあえず<b>速度も料金もバランスの取れたプランに変更したい</b>」など、あなたにあったプランを専門スタッフが丁寧にご提案します。</p>
                    </div>
                  </div>
                </div>
                <div class="wrapperContainer" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">
                  <div class="wrapper">
                    <div class="tittle--text">
                      <h4>しつこい営業、<br>勧誘電話や高額請求の対処</h4>
                    </div>
                    <div class="detail-box">
                      <p>「ネット回線の変更を検討し<b>資料請求をしたら、営業電話が止まらなくなった</b>」「安いプランを契約したつもりなのに、<b>支払い明細を確認したら想定以上の金額を支払っていた</b>」などのトラブルやお悩みを、専門スタッフが<b>消費者目線</b>で適切なアドバイスをいたします。誰に相談すればいいか分からないと悩んでいる方は、ネット回線コンシェルジュにご相談ください。</p>
                    </div>
                  </div>
                </div>
                <div class="wrapperContainer" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
                  <div class="wrapper">
                    <div class="tittle--text">
                      <h4>繋がりにくい・不安定・速度が遅いなどの<br>回線トラブルを改善</h4>
                    </div>
                    <div class="detail-box">
                      <p>一言で「インターネット環境が悪い」といっても、その<b>原因はさまざま</b>です。 有線接続と無線接続のどちらを使っているかによっても考えられる原因は異なります。<b>回線を変えずとも改善の対処法がある可能性がある</b>ので、まずはネット回線コンシェルジュにご相談ください。<br>豊富な知識で<b>最後までサポート</b>いたします。</p>
                    </div>
                  </div>
                </div>
                <div class="wrapperContainer" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="700">
                  <div class="wrapper">
                    <div class="tittle--text">
                      <h4>現在ご契約している回線の特定</h4>
                    </div>
                    <div class="detail-box">
                      <p>お客様の中に「月日が経って<b>どの会社と契約していたか忘れてしまった</b>」「他の情報と入り混じって<b>契約した会社がわからなくなってしまった</b>」などのお悩みをお持ちの方がいらっしゃいます。<br>ネット回線コンシェルジュでは、お客様からいくつか情報をいただき、光回線の一覧から該当のものをピックアップして<b>現在ご契約している会社をご案内</b>することが可能です。</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sec3" id="sec3">
        <div class="mar-style">
          <h3 class="component--hdng-ttl" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">ネット回線コンシェルジュが<br class="sp">選ばれる<span>4</span>つの理由</h3>
          <ul>
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <div class="row">
                <div class="col">
                  <div class="row-ttl">
                    <span>1</span>
                    <h4>業界トップの<br class="sp">幅広いサポート対応</h4>
                  </div>
                  <p><b>業界10年以上のスタッフが多数在籍。年間1万件以上の⽅</b>からインターネット回線･電気･Wi-Fi環境に関するご相談をいただいており、様々なお悩みをお伺いしています。<br>圧倒的な経験値で得た最適な解決策を導き出すまでのスピードや、的を得たアドバイスには<b>絶対の⾃信</b>を持っており、お客様からもご好評をいただいています。</p>
                </div>
                <div class="col">
                  <figure>
                    <img src="/images/sec3/img_dummy.jpg" alt="">
                  </figure>
                </div>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <div class="row">
                <div class="col">
                  <div class="row-ttl">
                    <span>2</span>
                    <h4>取り扱い商材数 NO.１</h4>
                  </div>
                  <p><b>ドコモ光、softbank光、auひかり、ビッグローブ光、NUROひかり、フレッツ光</b>など、弊社でご紹介できる商材は多数！<br>たくさんの商材を取り扱っているからこそ、お客様の状況、ニーズに合わせてご提案することが可能です。</p>
                </div>
                <div class="col">
                  <figure>
                    <img src="/images/sec3/img_dummy.jpg" alt="">
                  </figure>
                </div>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <div class="row">
                <div class="col">
                  <div class="row-ttl">
                    <span>3</span>
                    <h4>ご満足いただけるまでしっかりサポート</h4>
                  </div>
                  <p>ご相談を受けて、終わりにはしません。<br>お客様の<b>本質的な問題を解決するまで専門スタッフが最後まで寄り添い</b>、サポートいたします。<br>もちろん<b>ご相談は何度でも無料</b>です。<br>どんな内容でも、一度お気軽にご相談ください。</p>
                </div>
                <div class="col">
                  <figure>
                    <img src="/images/sec3/img_dummy.jpg" alt="">
                  </figure>
                </div>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <div class="row">
                <div class="col">
                  <div class="row-ttl">
                    <span>4</span>
                    <h4>お客様のタイミングで簡単にご相談可能</h4>
                  </div>
                  <p>お電話、Webフォーム、LINEの３つからお客様に合った方法でお問合せが可能です。<br><b>年中無休で受け付け</b>ているので、<b>土日祝日</b>も専門スタッフが丁寧にご対応いたします。<br>WebフォームやLINEからのお問合せも簡単な情報のみご記入いただくだけで、24時間以内にご返信いたします。<b>無理な勧誘や営業も一切いたしません</b>。</p>
                </div>
                <div class="col">
                  <figure>
                    <img src="/images/sec3/img_dummy.jpg" alt="">
                  </figure>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="secCTA">
        <div class="text--box tb2">
          <div class="container--box">
            <div class="text-title" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <div class="text--tittle-img">
                <img class="pcH1W" src="/images/common/h1W.png" alt="">
              </div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <a href="tel:0120-716-715" class="text-title2">
                <img class="con-sp" src="/images/common/contactimgW.png" alt="">
              </a>
            </div>
            <div class="buttons" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <a href="https://page.line.me/?liff.state=%3FaccountId%3D344sanfa" target="_blank" class="btn green">
                <p>LINEから相談する</p><img class="arrow" src="/images/common/arrowB.png" alt="">
              </a>
              <a href="#contactSect" class="btn yellow">
                <p>Webから相談する</p><img class="arrow" src="/images/common/arrowB.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="sec5" id="sec5">
        <div class="mar-style">
          <div class="sec5-container">
            <div class="sec5-title" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <h3>ご利用までの流れ</h3>
            </div>
            <div class="sec5-box-container ">
              <div class="card-container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                <div class="box-green">
                  <figure>
                    <img src="images/sec5/box-image.png" alt="box-image" class="box-image" />
                  </figure>
                </div>
                <div class="card-message">
                  <div class="card-title">
                    <h3><span>1</span>無料相談</h3>
                  </div>
                  <div class="card-description">
                    <p>お電話、Webフォーム、LINEの３つからお客様に合った方法でご相談いただきます。</p>
                  </div>
                </div>
              </div>
              <div class="card-container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
                <div class="box-green">
                  <figure>
                    <img src="images/sec5/box-image.png" alt="box-image" class="box-image" />
                  </figure>
                </div>
                <div class="card-message">
                  <div class="card-title">
                    <h3><span>2</span>ヒアリング</h3>
                  </div>
                  <div class="card-description">
                    <p>解決策を模索するため担当者より細かくヒアリングいたします。</p>
                  </div>
                </div>
              </div>
              <div class="card-container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">
                <div class="pc">
                  <svg xmlns="http://www.w3.org/2000/svg" width="64.604" height="29.611" viewBox="0 0 64.604 29.611" style="position: absolute;top: -2.5em;left: 50%;transform: translate(-50%, 0);">
                    <g id="Group_70" data-name="Group 70" transform="translate(-1500.198 -4890.235)">
                      <path id="Path_179" data-name="Path 179" d="M4469,4960.625l8.646,18.8" transform="translate(-2964.823 -63.559)" fill="none" stroke="#1a6c49" stroke-linecap="round" stroke-width="6"/>
                      <path id="Path_180" data-name="Path 180" d="M4469,4979.426l8.646-18.8" transform="translate(-2916.823 -63.559)" fill="none" stroke="#1a6c49" stroke-linecap="round" stroke-width="6"/>
                      <path id="Path_181" data-name="Path 181" d="M4487.817,4955.326v20.294" transform="translate(-2955.177 -62.091)" fill="none" stroke="#1a6c49" stroke-linecap="round" stroke-width="6"/>
                    </g>
                  </svg>
                </div>
                <div class="box-green">
                  <figure>
                    <img src="images/sec5/box-image.png" alt="box-image" class="box-image" />
                  </figure>
                </div>
                <div class="card-message">
                  <div class="card-title">
                    <h3><span>3</span>解決策を回答</h3>
                  </div>
                  <div class="card-description">
                    <p>お悩みに対する解決策を経験豊富な専門スタッフがその場で回答いたします。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sec6" id="sec6">
        <div>
          <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
            <h2 class="component--hdng-ttl">お客様の声</h2>
          </div>
          <div class="swiper" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card--container">
                  <div class="left-card">
                    <div class="circle">
                      <img src="images/sec6/circle01.png" alt="" />
                    </div>
                    <div class="circle-message">
                      <p class="description">愛知県名古屋市北区<br>
                        集合住宅にお住まい</p>
                      <p class="tag">Hさん</p>
                    </div>
                  </div>
                  <div class="right-card">
                    <h2>料金が格段に安くなりました！</h2>
                    <p>ケーブル会社のインターネットを利用していましたが月額料金が高いのではと気になっていました。
                      相談してもっと安くて安定したインターネットを紹介して頂き月額が２０００円近く安くなりました。</p>
                  </div>
                </div>
                <div class="triangle">
                  <img src="images/sec6/triangle.png" alt="" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card--container">
                  <div class="left-card">
                    <div class="circle">
                      <img src="images/sec6/circle02.png" alt="" />
                    </div>
                    <div class="circle-message">
                      <p class="description">静岡県田方郡<br>
                        函南町戸建てにお住まい</p>
                      <p class="tag">Tさん</p>
                    </div>
                  </div>
                  <div class="right-card">
                    <h2>設定がうまくいきました。</h2>
                    <p>初めてのインターネットだったのでとにかく設定がうまくいかずに悩んでいました。
                      家族も遠くにいる一人暮らしの身なので相談させてもらって大変助かりました。</p>
                  </div>
                </div>
                <div class="triangle">
                  <img src="images/sec6/triangle.png" alt="" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card--container">
                  <div class="left-card">
                    <div class="circle">
                      <img src="images/sec6/circle03.png" alt="" />
                    </div>
                    <div class="circle-message">
                      <p class="description">三重県四日市<br>
                        市戸建てにお住い</p>
                      <p class="tag">Iさん</p>
                    </div>
                  </div>
                  <div class="right-card">
                    <h2>速度が速くなり感謝です！</h2>
                    <p>工事不要のインターネットを利用しておりましたが速度に不満がありました！家族が４人いるのですが夜になると全くと言っていいほど速度が安定しません。
                      相談させていただきもっと安くて安定した光回線を紹介して頂き大変満足しています！担当の方もとても親切に対応していただきました。</p>
                  </div>
                </div>
                <div class="triangle">
                  <img src="images/sec6/triangle.png" alt="" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card--container">
                  <div class="left-card">
                    <div class="circle">
                      <img src="images/sec6/circle04.png" alt="" />
                    </div>
                    <div class="circle-message">
                      <p class="description">岐阜県岐阜市<br>
                        集合住宅にお住まい</p>
                      <p class="tag">Wさん</p>
                    </div>
                  </div>
                  <div class="right-card">
                    <h2>自分の環境に合った提案をしてくれます！</h2>
                    <p>自分の携帯のキャリアとエリアなどから最もお得で快適なインターネットを紹介していただきました。
                      工事後でも丁寧にサポートして頂き本当に感謝しております。有難うございました！</p>
                  </div>
                </div>
                <div class="triangle">
                  <img src="images/sec6/triangle.png" alt="" />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card--container">
                  <div class="left-card">
                    <div class="circle">
                      <img src="images/sec6/circle02.png" alt="" />
                    </div>
                    <div class="circle-message">
                      <p class="description">静岡県田方郡<br>
                        函南町戸建てにお住まい</p>
                      <p class="tag">Tさん</p>
                    </div>
                  </div>
                  <div class="right-card">
                    <h2>設定がうまくいきました。</h2>
                    <p>初めてのインターネットだったのでとにかく設定がうまくいかずに悩んでいました。
                      家族も遠くにいる一人暮らしの身なので相談させてもらって大変助かりました。</p>
                  </div>
                </div>
                <div class="triangle">
                  <img src="images/sec6/triangle.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="sec7" class="sec7">
        <div class="mar-style">
          <div>
            <h2 class="component--hdng-ttl" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">よくある質問</h2>
            <div class="sec7--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <a href="" class="sec7--drop-button">
                <div>
                  <span>Ｑ</span>
                  <p>
                    相談したら何か売りつけられない？
                  </p>
                </div>
                <img src="/images/common/arrow_icon_up.png" alt="">
              </a>
              <div class="sec7--drop-down">
                <p>
                  <span>A</span>ネット回線コンシェルジュはあくまでも相談の場を設けている相談窓口です。<br>強引に乗り換えをお勧めすることはありません。
                </p>
              </div>
            </div>
            <div class="sec7--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <a href="" class="sec7--drop-button">
                <div>
                  <span>Ｑ</span>
                  <p>
                    相談は本当に無料？
                  </p>
                </div>
                <img src="/images/common/arrow_icon_up.png" alt="">
              </a>
              <div class="sec7--drop-down">
                <p>
                  <span>A</span>何回相談してもインターネット相談は無料です。納得いくまでご相談に乗ります。
                </p>
              </div>
            </div>
            <div class="sec7--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <a href="" class="sec7--drop-button">
                <div>
                  <span>Ｑ</span>
                  <p>
                    どこで相談するの？
                  </p>
                </div>
                <img src="/images/common/arrow_icon_up.png" alt="">
              </a>
              <div class="sec7--drop-down">
                <p>
                  <span>A</span>基本的には電話相談となります。<br>ただ、お客様の居住地域等により応相談となります。
                </p>
              </div>
            </div>
            <div class="sec7--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <a href="" class="sec7--drop-button">
                <div>
                  <span>Ｑ</span>
                  <p>
                    相談の所要時間はどのくらい？
                  </p>
                </div>
                <img src="/images/common/arrow_icon_up.png" alt="">
              </a>
              <div class="sec7--drop-down">
                <p>
                  <span>A</span>１０分〜２０分くらいが目安となっております。<br>１〜２時間相談される方もおりますがお客様の料金負担はありませんのでご安心ください。
                </p>
              </div>
            </div>
            <div class="sec7--container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <a href="" class="sec7--drop-button">
                <div>
                  <span>Ｑ</span>
                  <p>
                    きちんとした窓口なのか？信用していいのか？
                  </p>
                </div>
                <img src="/images/common/arrow_icon_up.png" alt="">
              </a>
              <div class="sec7--drop-down">
                <p>
                  <span>A</span>ネット回線コンシェルジュはあくまでも相談の場を設けている相談窓口です。<br>強引に乗り換えをお勧めすることはありません。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="secCTA">
        <div class="text--box tb2">
          <div class="container--box">
            <div class="text-title" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <div class="text--tittle-img">
                <img class="pcH1W" src="/images/common/h1W.png" alt="">
              </div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <a href="tel:0120-716-715" class="text-title2">
                <img class="con-sp" src="/images/common/contactimgW.png" alt="">
              </a>
            </div>
            <div class="buttons" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
              <a href="https://page.line.me/?liff.state=%3FaccountId%3D344sanfa" target="_blank" class="btn green">
                <p>LINEから相談する</p><img class="arrow" src="/images/common/arrowB.png" alt="">
              </a>
              <a href="#contactSect" class="btn yellow">
                <p>Webから相談する</p><img class="arrow" src="/images/common/arrowB.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </section>
      <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
        <?php
        // お問い合わせフォーム
        require_once DOCROOT . 'contact/send_functions.php';
        include('./contact/includes/form.php'); ?>
      </div>
    </div>
    <!--/contents-->
  </main>

  <footer class="bg_ft">
    <div class="mar-style">
      <div class="footer--container">
        <div class="footer--des">
          <p class="p1">© GlobalCast Co.,Ltd. All Rights Reserved. </p>
          <div class="info--container">
            <div class="info">
              <p class="info--p"><a href="https://global-cast.co.jp/privacypolicy/" target="_blank" style="color: #fff;">運営会社</a></p>
              <p class="info--p1"><a href="https://global-cast.co.jp/" target="_blank" style="color: #fff;">プライバシー・ポリシー</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
  <script src="js/common.js" defer></script>
  <script>
    $('.sec2 .wrapper').matchHeight();
    $(".swiper .swiper-slide .card--container").matchHeight();

    AOS.init({
      once: true,
    });

    const swiper = new Swiper('.swiper', {
      slidesPerView: 1.3,
      spaceBetween: 25,
      loop: true,
      centeredSlides: true,
      breakpoints: {
        961: {
          slidesPerView: 1.4,
          spaceBetween: 45,
        },
        1200: {
          slidesPerView: 2.35,
          spaceBetween: 45,
        }
      }
    });

    function updatePadding() {
      var header = $('header').height()
      $('#sec1').css('margin-top', header + 'px');
    }
    updatePadding();

    $(window).resize(function() {
      updatePadding();
    });
  </script>

</body>

</html>