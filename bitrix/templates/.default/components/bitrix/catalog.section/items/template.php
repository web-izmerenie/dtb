<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arResult['ITEMS']))
{?>
    <div id="filter">
        <ul>
            <li><a href="<?$_SERVER['REQUEST_URI']?>?clear_cache=Y">Все</a></li>
            <?foreach ($arResult['ITEMS'] as $arFilter)
            {?>
                <?if (!empty($arFilter['PROPERTIES']['ATT_WEIGHT']['VALUE'])){?>
                    <li><a href="<?$_SERVER['REQUEST_URI']?>?WEIGHT=<?=$arFilter['PROPERTIES']['ATT_WEIGHT']['VALUE']?>&clear_cache=Y"><?=$arFilter['PROPERTIES']['ATT_WEIGHT']['VALUE']?> кг</a></li>
                <?}?>
            <?}?>
        </ul>
    </div>
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
