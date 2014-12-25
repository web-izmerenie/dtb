<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<nav class="left-menu">
    <ul>
        <?foreach($arResult['SECTIONS'] as $arItem){?>
            <li><a href="javascript:void(0);"><span><?=$arItem['NAME'];?></span></a>
                <ul class="inside-menu">
                    <?foreach($arItem['CHILDREN'] as $arItem2){?>
                    <li><a href="<?=$arItem2['SECTION_PAGE_URL'];?>"><span><?=$arItem2['NAME']?></span></a></li>
                    <?}?>
                </ul>
            </li>
        <?}?>
    </ul>
</nav>
