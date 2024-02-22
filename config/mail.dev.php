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
$config['receptionist_email'] = 'markariel.maata@bpoc.co.jp';

## 自動返信メールの差出人名
$config['sender_name'] = 'Test';

## 自動返信メールの差出人メールアドレス
$config['sender_email'] = "markariel.maata@bpoc.co.jp";

## メールの差出人を固定 (0:無効 / 1:固定)
## 固定にした場合、Reply-Toにお客様のアドレスがセットされます。
$config['reply_to_fixed'] = 1;

## 設置者に届くメールの件名
## %sにはシリアル番号が入ります。
$config['receptionist_subject'] = "Test";

## 必須の項目
## メールアドレスはemailにしてください。
$config['required_param'] = ["お名前","携帯番号","都道府県", "email"];

$config['required_checkbox_param'] =  ["インターネットの利用状況"];


## 設置者に届くメールの本文整形
## "<_"と"_>"で挟まれている項目名(変数)を挿入します。
$config['receptionist_body'] = <<<__posted_body__

下記のお客様よりお問い合わせをいただきました。<br>
<br>
▼フォーム項目
【お名前】<br>
<_お名前_> <br>
【携帯番号】<br>
<_携帯番号_> <br>
【郵便番号】<br>
<_郵便番号_> <br>
【都道府県】<br>
<_都道府県_> <br>
【市区町村】<br>
<_市区町村_> <br>
【インターネットの利用状況】<br>
<_インターネットの利用状況_> <br>
【備考欄】<br>
<_備考欄_> <br>

-----

__posted_body__;


## 自動返信メールのタイトル
$config["return_subject"] = 'test';

## 自動返信メールの本文
## "<_"と"_>"で挟まれている項目名(変数)を挿入します。
$config['return_body'] = <<<__return_body__


【件名】ネット回線コンシェルジュ_お問い合わせありがとうございました<br>
<br>
このメールはシステムからの自動返信です。<br>
<_お名前_>　 様<br>
この度はお問い合わせ頂きありがとうございます。<br>
以下の内容でお問い合わせを受付いたしました。<br>
24時間以内に担当者よりご連絡差し上げますので今しばらくお待ちくださいませ。<br>
なお営業時間は10時〜21時（土日祝含む）となっております。<br>
以下の内容が送信されました。<br>
<br>
---------------------------------------------------<br>
【お名前】<br>
<_お名前_> <br>
【携帯番号】<br>
<_携帯番号_> <br>
【郵便番号】<br>
<_郵便番号_> <br>
【都道府県】<br>
<_都道府県_> <br>
【市区町村】<br>
<_市区町村_> <br>
【インターネットの利用状況】<br>
<_インターネットの利用状況_> <br>
【備考欄】<br>
<_備考欄_> <br>
---------------------------------------------------<br>
ネット回線コンシェルジュ<br>
メールアドレス：info@netkaisen-c.jp<br>
サービスサイト：https://netkaisen-c.jp/<br>
======================================<br>
<br>

======================================
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
    'host' => 'smtp.gmail.com',
    'port' => '587',
    'username' => 'markariel.maata@bpoc.co.jp',
    'password' => 'Getyourown1108',
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
