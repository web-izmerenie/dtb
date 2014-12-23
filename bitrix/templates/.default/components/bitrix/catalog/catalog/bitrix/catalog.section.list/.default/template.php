<?if (!defined( "B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
    <div id="catalog">
        <?foreach ($arResult[ 'SECTIONS'] as $arItem1){?>
            <?foreach ($arItem1['CHILDREN'] as $arItem2){
            $catalog_photo = CFile::ResizeImageGet($arItem2['PICTURE'], array('width'=>165, 'height'=>110), BX_RESIZE_IMAGE_EXACT, true);
            $big_photo = CFile::ResizeImageGet($arItem2['PICTURE'], array('width'=>405, 'height'=>235), BX_RESIZE_IMAGE_EXACT, true);?>
            <div class="catalog-element <?if ($arItem2['BIG_ELEMENT'] == 1){?>big-element<?}?>">
                <a class="catalog-img-prev" href="<?=$arItem2['SECTION_PAGE_URL'];?>">
                    <?if (!empty($arItem2['PICTURE']['SRC'])){?>
                        <img src="<?
                        if ($arItem2['BIG_ELEMENT'] == 1){
                            echo $big_photo['src'];
                        }else{
                            echo $catalog_photo['src'];
                        }
                        ?>">
                    <?}?>
                </a>
                <a class="title" href="<?=$arItem2['SECTION_PAGE_URL'];?>"><span><?=$arItem2['NAME'];?></span></a>
            </div>
            <?}?>
        <?}?>
    </div>
