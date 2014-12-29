<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arResult['ITEMS']))
{

$FilterElement = CIBlockElement::GetList(array('PROPERTY_ATT_WEIGHT.VALUE'=>'ASC'), array('IBLOCK_ID'=>3, 'ACTIVE'=>'Y', 'SECTION_CODE'=> $_REQUEST["SECTION_CODE"]), false, false, array('ID', 'PROPERTY_ATT_WEIGHT'));

 while($filter = $FilterElement->Fetch()){
     $filter_value[] = $filter['PROPERTY_ATT_WEIGHT_VALUE'];
}
?>

 <div id="filter">
        <ul>
           <?if(empty($_GET['WEIGHT'])):?>
                <li class="active"><span>Все</span></li>
            <?else:?>
                <li><a href="<?=$_SERVER['REDIRECT_URL']?>">Все</a></li>
            <?endif?>
            <?foreach ($filter_value as $arFilter):?>
                <?if (empty($arFilter)) continue;?>
                    <?if($_GET['WEIGHT'] == $arFilter):?>
                        <li class="active"><span><?=$arFilter?> кг</span></li>
                    <?else:?>
                        <li><a href="?WEIGHT=<?=$arFilter?>"><?=$arFilter?> кг</a></li>
                    <?endif?>
            <?endforeach?>
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
