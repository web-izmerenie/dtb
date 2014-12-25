<?if (!defined( "B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?if(!$_GET['SECTION_CODE']){?>

    <div id="catalog">
        <?foreach ($arResult['SECTIONS'] as $arItem1){?>
            <?foreach ($arItem1['CHILDREN'] as $arItem2){?>
                <?$catalog_photo = CFile::ResizeImageGet($arItem2['PICTURE'], array('width'=>165, 'height'=>110), BX_RESIZE_IMAGE_EXACT, true);?>
                <?$big_photo = CFile::ResizeImageGet($arItem2['PICTURE'], array('width'=>405, 'height'=>235), BX_RESIZE_IMAGE_EXACT, true);?>
                <div class="catalog-element <?if ($arItem2['BIG_ELEMENT'] == 1){?>big-element<?}?>">
                    <a href="<?=$arItem2['SECTION_PAGE_URL'];?>">
                        <span class="catalog-img-prev">
                            <?if (!empty($arItem2['PICTURE']['SRC'])){?>
                                <img src="<?=($arItem2['BIG_ELEMENT'] == 1) ? $big_photo['src'] : $catalog_photo['src']?>">
                            <?}?>
                        </span>
                        <span class="title"><span><?=$arItem2['NAME'];?></span>
                    </a>
                </div>
            <?}?>
        <?}?>
    </div>

<?}else{?>

        <div id="catalog-items">
            <?foreach ($arResult['SECTIONS'] as $arItem3){?>
            <?$catalog_inner_photo = CFile::ResizeImageGet($arItem3['PICTURE'], array('width'=>205, 'height'=>205), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                <div class="item">
                    <a href="<?=$arItem3['SECTION_PAGE_URL'];?>">
                        <span class="img">
                            <?if (!empty($arItem3['PICTURE']['SRC'])){?>
                                <img src="<?=$catalog_inner_photo['src']?>">
                            <?}?>
                        </span>
                        <span class="title"><span><?=$arItem3['NAME'];?></span>
                    </a>
                </div>
            <?}?>
        </div>
<?}?>

<?if ($arResult['SECTION']['ELEMENT_CNT'] > 0){
    $APPLICATION->IncludeComponent(
        "bitrix:catalog.section",
        "items",
        Array(
            "IBLOCK_TYPE" => "dtb",
            "IBLOCK_ID" => "3",
            "SECTION_ID" => "",
            "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
            "SECTION_USER_FIELDS" => array(0=>"",1=>"",),
            "ELEMENT_SORT_FIELD" => "sort",
            "ELEMENT_SORT_ORDER" => "asc",
            "ELEMENT_SORT_FIELD2" => "id",
            "ELEMENT_SORT_ORDER2" => "desc",
            "FILTER_NAME" => "arrFilter",
            "INCLUDE_SUBSECTIONS" => "N",
            "SHOW_ALL_WO_SECTION" => "N",
            "PAGE_ELEMENT_COUNT" => "30",
            "LINE_ELEMENT_COUNT" => "",
            "PROPERTY_CODE" => array(0=>"",1=>"",),
            "OFFERS_LIMIT" => "5",
            "TEMPLATE_THEME" => "",
            "ADD_PICT_PROP" => "-",
            "LABEL_PROP" => "-",
            "MESS_BTN_BUY" => "",
            "MESS_BTN_ADD_TO_BASKET" => "",
            "MESS_BTN_SUBSCRIBE" => "",
            "MESS_BTN_DETAIL" => "",
            "MESS_NOT_AVAILABLE" => "",
            "SECTION_URL" => "",
            "DETAIL_URL" => "",
            "SECTION_ID_VARIABLE" => "SECTION_CODE",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_GROUPS" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "META_KEYWORDS" => "-",
            "SET_META_DESCRIPTION" => "Y",
            "META_DESCRIPTION" => "-",
            "BROWSER_TITLE" => "-",
            "ADD_SECTIONS_CHAIN" => "N",
            "DISPLAY_COMPARE" => "N",
            "SET_TITLE" => "Y",
            "SET_STATUS_404" => "Y",
            "CACHE_FILTER" => "N",
            "PRICE_CODE" => array(),
            "USE_PRICE_COUNT" => "N",
            "SHOW_PRICE_COUNT" => "1",
            "PRICE_VAT_INCLUDE" => "N",
            "BASKET_URL" => "/personal/basket.php",
            "ACTION_VARIABLE" => "action",
            "PRODUCT_ID_VARIABLE" => "id",
            "USE_PRODUCT_QUANTITY" => "N",
            "ADD_PROPERTIES_TO_BASKET" => "Y",
            "PRODUCT_PROPS_VARIABLE" => "prop",
            "PARTIAL_PRODUCT_PROPERTIES" => "N",
            "PRODUCT_PROPERTIES" => array(),
            "PAGER_TEMPLATE" => ".default",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Товары",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "AJAX_OPTION_ADDITIONAL" => "",
            "PRODUCT_QUANTITY_VARIABLE" => "quantity"
        )
    );
}?>
