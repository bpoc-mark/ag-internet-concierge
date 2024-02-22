<?php if (!defined("DOCROOT")) header("location: /contact/");
require_once rtrim($_SERVER['DOCUMENT_ROOT'], "/") . '/config/mail.php';
if (!isset($step)) $step = "input";
?>
<section id="contactSect" class="<?= $step ?? 'input'; ?>">
    <div class="mar-style">
        <div class="contactSect_inner">
            <?php
            if (isset($step) && $step == 'confirm') : ?>
                <form class="p-form" method="POST" action="/contact/?step=send">
                <?php
            else : ?>
                    <form class="p-form" method="POST" action="/contact/?step=confirm">
                    <?php
                endif; ?>
                    <div class="contactSect_input_list">

                        <?php if (isset($step) && $step == 'input') : ?>
                            <h3 class="component--hdng-ttl">Webから相談する</h3>
                        <?php endif; ?>

                        <?php if (isset($step) && $step == 'confirm') : ?>
                            <h3 class="component--hdng-ttl">内容確認</h3>
                        <?php endif; ?>

                        <div class="formFlex">
                            <div class="contactSect_flex_box">
                                <label>お名前<span class="contactSect_astarisk">必須</span></label>
                                <input type="text" name="お名前" value="<?= h($_POST["お名前"] ?? ""); ?>" <?= ($step == "confirm") ? "hidden" : '';  ?> placeholder="例 : 山田太郎">
                                <?php if (isset($step) && $step == 'confirm') : ?>
                                    <p class="confirmPostText"><?php echo $_POST['お名前']; ?></p>
                                <?php endif; ?>
                                <?php if (isset($_SESSION['ERROR']['お名前'])) : ?>
                                    <div class="p-form__container">
                                        <div class="c-error">
                                            <?= (isset($_SESSION["ERROR"]["お名前"])) ? h($_SESSION["ERROR"]["お名前"]) : ""; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="contactSect_flex_box">
                                <label>携帯番号<span class="contactSect_astarisk">必須</span></label>
                                <input class="" type="text" name="携帯番号" value="<?= h($_POST["携帯番号"] ?? ""); ?>" <?= ($step == "confirm") ? "hidden" : '';  ?> placeholder="例 : 000-000-000">
                                <?php if (isset($step) && $step == 'confirm') : ?>
                                    <p class="confirmPostText"><?php echo $_POST['携帯番号']; ?></p>
                                <?php endif; ?>
                                <?php if (isset($_SESSION['ERROR']['携帯番号'])) : ?>
                                    <div class="p-form__container">
                                        <div class="c-error">
                                            <?= (isset($_SESSION["ERROR"]["携帯番号"])) ? h($_SESSION["ERROR"]["携帯番号"]) : ""; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="contactSect_flex_box">
                                <label>郵便番号</label>
                                <input class="" type="text" name="郵便番号" value="<?= h($_POST["郵便番号"] ?? ""); ?>" <?= ($step == "confirm") ? "hidden" : '';  ?> placeholder="例 : 000-0000">
                                <?php if (isset($step) && $step == 'confirm') : ?>
                                    <p class="confirmPostText"><?php echo $_POST['郵便番号']; ?></p>
                                <?php endif; ?>
                                <?php if (isset($_SESSION['ERROR']['郵便番号'])) : ?>
                                    <div class="p-form__container">
                                        <div class="c-error">
                                            <?= (isset($_SESSION["ERROR"]["郵便番号"])) ? h($_SESSION["ERROR"]["郵便番号"]) : ""; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="contactSect_flex_box">
                                <label>メールアドレス<span class="contactSect_astarisk">必須</span></label>
                                <input class="" type="text" name="email" value="<?= h($_POST["email"] ?? ""); ?>" <?= ($step == "confirm") ? "hidden" : '';  ?> placeholder="例 :xxx@net-concierge.jp">
                                <?php if (isset($step) && $step == 'confirm') : ?>
                                    <p class="confirmPostText"><?php echo $_POST['email']; ?></p>
                                <?php endif; ?>
                                <?php if (isset($_SESSION['ERROR']['email'])) : ?>
                                    <div class="p-form__container">
                                        <div class="c-error">
                                            <?= (isset($_SESSION["ERROR"]["email"])) ? h($_SESSION["ERROR"]["email"]) : ""; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="contactSect_flex_box">
                                <label>都道府県<span class="contactSect_astarisk">必須</span></label>
                                <div class="select_07_half selectBoxArrow" <?= ($step == "confirm") ? "style='width: 0px;height:0px;opacity:0;'" : '';  ?>>
                                    <select class="prefectureSelect" name="都道府県" id="">
                                        <option value="">選択してください</option>
                                        <option value="北海道" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "北海道") echo "selected"; ?>>北海道</option>
                                        <option value="青森県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "青森県") echo "selected"; ?>>青森県</option>
                                        <option value="岩手県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "岩手県") echo "selected"; ?>>岩手県</option>
                                        <option value="宮城県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "宮城県") echo "selected"; ?>>宮城県</option>
                                        <option value="秋田県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "秋田県") echo "selected"; ?>>秋田県</option>
                                        <option value="山形県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "山形県") echo "selected"; ?>>山形県</option>
                                        <option value="福島県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "福島県") echo "selected"; ?>>福島県</option>
                                        <option value="茨城県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "茨城県") echo "selected"; ?>>茨城県</option>
                                        <option value="栃木県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "栃木県") echo "selected"; ?>>栃木県</option>
                                        <option value="群馬県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "群馬県") echo "selected"; ?>>群馬県</option>
                                        <option value="埼玉県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "埼玉県") echo "selected"; ?>>埼玉県</option>
                                        <option value="千葉県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "千葉県") echo "selected"; ?>>千葉県</option>
                                        <option value="東京都" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "東京都") echo "selected"; ?>>東京都</option>
                                        <option value="神奈川県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "神奈川県") echo "selected"; ?>>神奈川県</option>
                                        <option value="新潟県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "新潟県") echo "selected"; ?>>新潟県</option>
                                        <option value="富山県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "富山県") echo "selected"; ?>>富山県</option>
                                        <option value="石川県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "石川県") echo "selected"; ?>>石川県</option>
                                        <option value="福井県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "福井県") echo "selected"; ?>>福井県</option>
                                        <option value="山梨県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "山梨県") echo "selected"; ?>>山梨県</option>
                                        <option value="長野県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "長野県") echo "selected"; ?>>長野県</option>
                                        <option value="岐阜県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "岐阜県") echo "selected"; ?>>岐阜県</option>
                                        <option value="静岡県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "静岡県") echo "selected"; ?>>静岡県</option>
                                        <option value="愛知県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "愛知県") echo "selected"; ?>>愛知県</option>
                                        <option value="三重県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "三重県") echo "selected"; ?>>三重県</option>
                                        <option value="滋賀県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "滋賀県") echo "selected"; ?>>滋賀県</option>
                                        <option value="京都府" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "京都府") echo "selected"; ?>>京都府</option>
                                        <option value="大阪府" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "大阪府") echo "selected"; ?>>大阪府</option>
                                        <option value="兵庫県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "兵庫県") echo "selected"; ?>>兵庫県</option>
                                        <option value="奈良県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "奈良県") echo "selected"; ?>>奈良県</option>
                                        <option value="和歌山県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "和歌山県") echo "selected"; ?>>和歌山県</option>
                                        <option value="鳥取県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "鳥取県") echo "selected"; ?>>鳥取県</option>
                                        <option value="島根県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "島根県") echo "selected"; ?>>島根県</option>
                                        <option value="岡山県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "岡山県") echo "selected"; ?>>岡山県</option>
                                        <option value="広島県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "広島県") echo "selected"; ?>>広島県</option>
                                        <option value="山口県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "山口県") echo "selected"; ?>>山口県</option>
                                        <option value="徳島県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "徳島県") echo "selected"; ?>>徳島県</option>
                                        <option value="香川県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "香川県") echo "selected"; ?>>香川県</option>
                                        <option value="愛媛県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "愛媛県") echo "selected"; ?>>愛媛県</option>
                                        <option value="高知県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "高知県") echo "selected"; ?>>高知県</option>
                                        <option value="福岡県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "福岡県") echo "selected"; ?>>福岡県</option>
                                        <option value="佐賀県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "佐賀県") echo "selected"; ?>>佐賀県</option>
                                        <option value="長崎県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "長崎県") echo "selected"; ?>>長崎県</option>
                                        <option value="熊本県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "熊本県") echo "selected"; ?>>熊本県</option>
                                        <option value="大分県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "大分県") echo "selected"; ?>>大分県</option>
                                        <option value="宮崎県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "宮崎県") echo "selected"; ?>>宮崎県</option>
                                        <option value="鹿児島県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "鹿児島県") echo "selected"; ?>>鹿児島県</option>
                                        <option value="沖縄県" <?php if (!empty($_POST["都道府県"]) && $_POST["都道府県"] === "沖縄県") echo "selected"; ?>>沖縄県</option>
                                    </select>
                                </div>
                                <?php if (isset($step) && $step == 'confirm') : ?>
                                    <p class="confirmPostText"><?php echo $_POST['都道府県']; ?></p>
                                <?php endif; ?>
                                <?php if (isset($_SESSION['ERROR']['都道府県'])) : ?>
                                    <div class="p-form__container">
                                        <div class="c-error">
                                            <?= (isset($_SESSION["ERROR"]["都道府県"])) ? h($_SESSION["ERROR"]["都道府県"]) : ""; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <?php
                            // ない場合の初期化
                            if (!isset($_POST["インターネットの利用状況"])) {
                                $_POST["インターネットの利用状況"] = array();
                            }
                            ?>
                            <div class="contactSect_flex_box">
                                <label>インターネットの利用状況<span class="contactSect_astarisk">必須</span></label>
                                <div class="contactSect_select_item course" <?= ($step == "confirm") ? "style='width: 0px;height:0px;opacity:0;'" : '';  ?>>
                                    <label class="inline" for="利用中">
                                        <input type="radio" id="利用中" name="インターネットの利用状況[]" value="利用中" <?php if (in_array("利用中", $_POST["インターネットの利用状況"])) echo "checked"; ?> <?= ($step == "confirm") ? "disabled=\"disabled\"" : '';  ?> />利用中
                                        <span class="lbl_checkbox"></span>
                                    </label>
                                    <label class="inline" for="利用していない">
                                        <input type="radio" id="利用していない" name="インターネットの利用状況[]" value="利用していない" <?php if (in_array("利用していない", $_POST["インターネットの利用状況"])) echo "checked"; ?> <?= ($step == "confirm") ? "disabled=\"disabled\"" : '';  ?> />利用していない
                                        <span class="lbl_checkbox"></span>
                                    </label>
                                </div>
                                <?php if (isset($step) && $step == 'confirm') : ?>
                                    <p class="confirmPostText">
                                        <?php
                                        if (isset($_POST["インターネットの利用状況"]) && is_array($_POST["インターネットの利用状況"])) {
                                            foreach ($_POST["インターネットの利用状況"] as $selectedClassroom) {
                                                echo htmlspecialchars($selectedClassroom) . "<br>";
                                            }
                                        }
                                        ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (isset($_SESSION['ERROR']['インターネットの利用状況'])) : ?>
                                    <div class="p-form__container">
                                        <div class="c-error">
                                            <?= (isset($_SESSION["ERROR"]["インターネットの利用状況"])) ? h($_SESSION["ERROR"]["インターネットの利用状況"]) : ""; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            
                            <div class="contactSect_flex_box">
                                <label>市区町村</label>
                                <input type="text" name="市区町村" value="<?= h($_POST["市区町村"] ?? ""); ?>" <?= ($step == "confirm") ? "hidden" : '';  ?> placeholder="例 : ◯◯市◯◯町◯◯番">
                                <?php if (isset($step) && $step == 'confirm') : ?>
                                    <p class="confirmPostText"><?php echo $_POST['市区町村']; ?></p>
                                <?php endif; ?>
                                <?php if (isset($_SESSION['ERROR']['市区町村'])) : ?>
                                    <div class="p-form__container">
                                        <div class="c-error">
                                            <?= (isset($_SESSION["ERROR"]["市区町村"])) ? h($_SESSION["ERROR"]["市区町村"]) : ""; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="contactSect_flex_box">
                                <label>備考欄</label>
                                <div class="contactSect_select_item textareaContent"  <?= ($step == "confirm") ? "style='width: 0px;height:0px;opacity:0;'" : '';  ?>>
                                    <textarea name="備考欄" rows="5" <?= ($step == "confirm") ? "hidden" : '';  ?> placeholder="ご自由にご記入ください"><?= h($_POST["備考欄"] ?? ""); ?></textarea>
                                </div>
                                <?php if (isset($step) && $step == 'confirm') : ?>
                                    <p class="confirmPostText"><?php echo $_POST['備考欄']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        
                        <?php if (isset($step) && $step == 'input') : ?>                  
                            <div class="privacyWrap">
                                <p><a href="https://global-cast.co.jp/privacy-policy/" target="_blank">※プライバシーポリシー</a>をご確認いただき、同意の上でお進みください。<br>※電話番号にSMSが届きます。予めご了承ください。</p>
                            </div>
                        <?php endif; ?>   

                    </div>
                    <?php
                    if (isset($step) && $step == 'confirm') : ?>
                        <p style="text-align:center;">
                            <input type="hidden" name="token" value="<?= $token; ?>" />
                        <div class="confirmBtnWrap">
                            <div style="position:relative;">
                                <input class="btn" type="reset" value="修正する" style="cursor: pointer;">
                                <img src="<?=BASEURL;?>/images/common/arrow_icon.svg" alt="">
                            </div>
                            <div style="position:relative;">
                                <input class="btn" type="submit" value="送信する" style="cursor: pointer;" />
                                <img src="<?=BASEURL;?>/images/common/arrow_icon.svg" alt="">
                            </div>
                        </div>
                        </p>
                    <?php
                    else : ?>   
                        <p id="btnArrowIcon" style="width:fit-content;margin:0 auto;">
                            <input class="btn" type="submit" value="内容を確認する" style="cursor: pointer;margin: 0 auto;" />
                            <img src="<?=BASEURL;?>/images/common/arrow_icon.svg" alt="">
                            <!-- <?php if (!empty($_SESSION['ERROR'])) : ?>
                    <div class="mar-t10 c-error" style="text-align:center;">
                    <?php
                                        foreach ($_SESSION['ERROR'] as $key => $val) {
                                            echo "$key の入力欄を確認してください<br/>";
                                        }
                    ?>
                    </div>
                <?php endif; ?> -->
                        </p>
                    <?php
                    endif; ?>
                </form>
        </div>
    </div>
</section>