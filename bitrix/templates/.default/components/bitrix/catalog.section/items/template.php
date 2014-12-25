<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arResult['ITEMS']))
{?>
    <div id="items">
    <?foreach ($arResult['ITEMS'] as $key => $arItem)
        {
        $photo = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array("width" => 145, "height" => 146), BX_RESIZE_IMAGE_PROPORTIONAL);?>
        <div class="item">
            <a href="<?=$arItem['DETAIL_PAGE_URL'];?>">
                <span class="img">
                    <?if(!empty($arItem['DETAIL_PICTURE']['SRC'])){?>
                        <img src="<?=$photo['src'];?>">
                    <?}?>
                </span>
                <span class="title"><span><?=$arItem['NAME'];?></span></span>
            </a>
        </div>
        <?}?>
    </div>
<?}?>
