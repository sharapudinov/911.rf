<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
if ($_REQUEST['ajax'] == 'Y'||isset($_REQUEST["success"])) {
    $APPLICATION->RestartBuffer();
}
var_dump( in_array("EMAIL", $arParams["REQUIRED_FIELDS"]));

?>
    <form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
        <?= bitrix_sessid_post() ?>

        <fieldset class="formFieldset">

            <ul class="formContainer">
                <li>
                    <p>Заявка</p>
                </li>
                <? if (!empty($arResult["ERROR_MESSAGE"])) {
                    foreach ($arResult["ERROR_MESSAGE"] as $v)
                        ShowError($v);
                }
                if (strlen($arResult["OK_MESSAGE"]) > 0) {
                    ?>
                    <div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div><?
                }
                ?>

                <li>
                    <? $required = empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"]) ?>
                    <input type="text" name="user_name" class="rsform-input-box"
                           value="<?= $arResult["AUTHOR_NAME"] ?>"
                           placeholder="<?= GetMessage('MFT_NAME') . ($required ? '' : ' (не обязательно)') ?>"/>

                </li>
                <li>
                    <? $required = empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"]) ?>
                    <input type="text" name="user_email" class="rsform-input-box"
                           value="<?= $arResult["AUTHOR_EMAIL"] ?>"
                           placeholder="<?= GetMessage('MFT_TEL') . ($required ? '' : ' (не обязательно)') ?>"/>

                </li>

                <? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
                    <li>
                        <div class="mf-text"><?= GetMessage("MFT_CAPTCHA") ?></div>
                        <input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
                        <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180"
                             height="40"
                             alt="CAPTCHA">
                        <div class="mf-text"><span class="mf-req">*</span></div>
                        <input type="text" name="captcha_word" size="30"
                               placeholder="<?= GetMessage("MFT_CAPTCHA_CODE") ?>"
                               maxlength="50" value="">
                        </div>
                    </li>
                <? endif; ?>
                <li>
                    <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
                    <input type="submit" name="submit" class="rsform-submit-button"
                           value="<?= GetMessage("MFT_SUBMIT") ?>">
                </li>
        </fieldset>
    </form>
    <script>
        var form = $('#zakaz-form form');
        $('.rsform-submit-button').on('click', function (e) {
            e.preventDefault();
            var data = $(form).serializeArray();
            data[data.length] = {
                name: 'ajax',
                value: 'Y'
            };
            data[data.length] = {
                name: 'submit',
                value: '<?= GetMessage("MFT_SUBMIT") ?>'
            };
            $.ajax({
                    type: 'POST',
                    url: '<?= POST_FORM_ACTION_URI ?>',
                    data: data,
                    success: function (result) {
                        $('#zakaz-form').html(result);
                    }
                }
            )
        })
    </script>
<? if ($_REQUEST['ajax'] == 'Y') die;

