<?php
if (!defined("DOCROOT")) header("location: /");
/**
 * Adding configuration like sending email or SMTP config
 * @author ShogoKinoshita <shogo.kinoshita@argog.co.jp>
 */
/*******************************************
 *
 * ログファイル
 *
 *******************************************/

$config["logFile"]["dir"] = DOCROOT . '/logs/';
$config["logFile"]["name"] = "mail.log";

/*******************************************
 *
 * 応募内容保存CSVファイル
 *
 *******************************************/

$config["csvFile"]["dir"] = DOCROOT . '/logs/';
$config["csvFile"]["name"] = "submit-form.csv";


/*******************************************
 *
 * 問い合わせ
 *
 *******************************************/

## 問い合わせ担当者
$config['receptionist_email'] = 'kids@valed.jp';

## 自動返信メールの差出人名
$config['sender_name'] = 'バレッドキッズ運営';

## 自動返信メールの差出人メールアドレス
$config['sender_email'] = "kids@valed.jp";

## メールの差出人を固定 (0:無効 / 1:固定)
## 固定にした場合、Reply-Toにお客様のアドレスがセットされます。
$config['reply_to_fixed'] = 1;

## 設置者に届くメールの件名
## %sにはシリアル番号が入ります。
$config['receptionist_subject'] = "【バレッドキッズ】夏休みコースへのお問合せ";

## 必須の項目
## メールアドレスはemailにしてください。
$config['required_param'] = ["email","お子さまのお名前", "お子さまのお名前のフリガナ", "保護者のお名前", "保護者のお名前のフリガナ", "お子さまの学年", 
                            "郵便番号", "住所", "連絡先（携帯でもOK）",  "人数", "参加希望日"];

$config['required_checkbox_param'] =  ["希望コース","個人情報の取扱い"];


## 設置者に届くメールの本文整形
## "<_"と"_>"で挟まれている項目名(変数)を挿入します。
$config['receptionist_body'] = <<<__posted_body__

お問い合わせ担当者 様<br>
<br>
バレッドキッズの問い合わせフォームからメールが届きました<br>
<br>
<br>
━━━　ご入力内容　━━━━━━━━━━━━━━━━━━━━━━━━<br>
【希望教室名】 <br>
<_教室名_> <br>
【希望コース】 <br>
<_希望コース_> <br>
【参加希望日】 <br>
<_参加希望日_> <br>
<br/>
【お子さまのお名前】 <br>
<_お子さまのお名前_> <br>
【お子さまのフリガナ】 <br>
<_お子さまのお名前のフリガナ_> <br>
【保護者のお名前】 <br>
<_保護者のお名前_> <br>
【フリガナ】 <br>
<_保護者のお名前のフリガナ_> <br>
【お子さまの学年】 <br>
<_お子さまの学年_> <br>
【郵便番号】 <br>
<_郵便番号_> <br>
【住所】 <br>
<_住所_> <br>
【ビル・マンション名】 <br>
<_ビル・マンション名_> <br>
【連絡先】 <br>
<_連絡先（携帯でもOK）_> <br>
【メールアドレス 】 <br>
<_email_> <br>
<br>
【その他のお子様の人数】 <br>
子ども <_人数_> 人 <br>
【参加するお子様のお名前】<br>
<_参加するお子様のお名前_><br>
<br>
【その他】 <br>
<_その他_> <br>
-----

__posted_body__;


## 自動返信メールのタイトル
$config["return_subject"] = 'バレッドキッズへのお問合わせについて';

## 自動返信メールの本文
## "<_"と"_>"で挟まれている項目名(変数)を挿入します。
$config['return_body'] = <<<__return_body__

<_保護者のお名前_>様<br>
<br>
こちらはパソコンスクールバレッド総合受付です。お問い合わせありがとうございます<br>
<br>
この度は バレッドキッズにへお問い合わせいただき誠にありがとうございます。<br>
以下の内容のお問い合わせを受け付けました。<br>
３営業日以内に教室または本部より折り返しご連絡させていただきます。<br>
<br>
※教室ごとに講座受付状況が異なりますので、ご希望に沿えない場合がございます。<br>
　あらかじめご了承ください。<br>
<br>
━━━　ご入力内容　━━━━━━━━━━━━━━━━━━━━━━━━<br>
【希望教室名】 <br>
<_教室名_> <br>
【希望コース】 <br>
<_希望コース_> <br>
【参加希望日】 <br>
<_参加希望日_> <br>
<br/>
【お子さまのお名前】 <br>
<_お子さまのお名前_> <br>
【お子さまのフリガナ】 <br>
<_お子さまのお名前のフリガナ_> <br>
【保護者のお名前】 <br>
<_保護者のお名前_> <br>
【フリガナ】 <br>
<_保護者のお名前のフリガナ_> <br>
【お子さまの学年】 <br>
<_お子さまの学年_> <br>
【郵便番号】 <br>
<_郵便番号_> <br>
【住所】 <br>
<_住所_> <br>
【ビル・マンション名】 <br>
<_ビル・マンション名_> <br>
【連絡先】 <br>
<_連絡先（携帯でもOK）_> <br>
【メールアドレス 】 <br>
<_email_> <br>
<br>
【その他のお子様の人数】 <br>
子ども <_人数_> 人 <br>
【参加するお子様のお名前】<br>
<_参加するお子様のお名前_><br>
<br>
【その他】 <br>
<_その他_> <br>
<br/>
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━<br>
このメールはバレッドキッズのホームページからお問い合わせいただいた方へ自動送信しております。<br>
お心当たりのない方は、恐れ入りますが下記へその旨をご連絡いただけますと幸いです。<br>
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━<br>
<br>
パソコンスクール　バレッドキッズ総合受付<br>
東京都千代田区内幸町1-2-1　日土地内幸町ビル７F<br>
営業時間：平日12:00-18:00<br>
TEL：0120-77-8088<br>
E-mail：kids@valed.jp<br>
公式Webサイト：https://kids.valed.jp<br>

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
__return_body__;



//SMTP config
$smtpConfig = array(
/*
 * Test settings
 *
 * The email will not be sent and will be stored to mailtrap account.
 * https://mailtrap.io/
 * Account: kinodev@oceanize.co.jp / Rn6wjh8iRn6wjh8i (Free plan)
 */
    'is_smtp' => 1,
    'SMTPDebug' => 0, //SMTPDebug
    'SMTPAuth' => true,
    'host' => 'sandbox.smtp.mailtrap.io',
    'port' => '2525',
    'username' => '9faf7e96f84248',
    'password' => 'e1e483b0bb5ca2',
    'secure' => 'tls',  //SMTPSecure

);

####################################################
## スパム対策関連
####################################################

## 送信者のメールアドレスのドメイン、IPアドレスからフォームの送信をブロックします
$config['black_list'] = array(
    "domain" => array(
           "@mail.ru","@list.ru","@bk.ru","@inbox.ru","@rambler.ru"
    ),
    "ip" => array(
            "5.188.84.115","5.188.84.16"
    )
);
