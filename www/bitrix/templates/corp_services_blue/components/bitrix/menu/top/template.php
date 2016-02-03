<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div id="sidebar">
    <? if (!empty($arResult)): ?>
        <ul\>
        <? foreach ($arResult as $arItem): ?>
            <? if ($arItem["SELECTED"]): ?>
                <li class="selected">
                    <a href="<?= $arItem["LINK"] ?>">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <? else: ?>
                <li>
                    <a href="<?= $arItem["LINK"] ?>">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <? endif ?>
        <? endforeach ?>
        </ul>
    <? endif ?>
</div>
