<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="barba-wrapper">
    <div class="article-list">

    <?foreach($arResult["ITEMS"] as $arItem):?>

	    <a class="article-item article-list__item" href="<?= $arItem["DETAIL_PAGE_URL"]?>" data-anim="anim-3">
            <div class="article-item__background">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" data-src="xxxHTMLLINKxxx0.153709056148504830.8920151245249737xxx" alt="<?=$arItem["NAME"]?>"/></div>
            <div class="article-item__wrapper">
                <div class="article-item__title"><?= $arItem["NAME"] ?></div>
                <div class="article-item__content"><?= $arItem["PREVIEW_TEXT"]?>
                </div>
            </div>
        </a>

    <?endforeach;?>

    </div>
</div>

