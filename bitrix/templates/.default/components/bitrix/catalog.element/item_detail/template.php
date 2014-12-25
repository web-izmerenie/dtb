<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$photo = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width'=>250, 'height'=>250), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>

<div id="item">
    <div id="preview">
        <div id="detail-pic">
            <img src="<?=$photo['src'];?>">
        </div>
        <div id="text">
            <h1><?=$arResult['NAME'];?></h1>
            <?=$arResult['PREVIEW_TEXT'];?>
        </div>
    </div>
    <div class="tabs">
        <ul class="tabs-control">
            <li class="active">Описание</li>
            <li><?=$arResult['PROPERTIES']['ATT_APPLICATION']['NAME']?></li>
            <li><?=$arResult['PROPERTIES']['ATT_ADVENTAGE']['NAME']?></li>
            <li><?=$arResult['PROPERTIES']['ATT_SPECIFICATIONS']['NAME']?></li>
            <li><?=$arResult['PROPERTIES']['ATT_DOCUMENTATION']['NAME']?></li>
        </ul>
        <div class="box visible"><?=$arResult['DETAIL_TEXT'];?></div>
        <div class="box"><?=$arResult['PROPERTIES']['ATT_APPLICATION']['~VALUE']['TEXT']?></div>
        <div class="box"><?=$arResult['PROPERTIES']['ATT_ADVENTAGE']['~VALUE']['TEXT']?></div>
        <div class="box"><?=$arResult['PROPERTIES']['ATT_SPECIFICATIONS']['~VALUE']['TEXT']?></div>
        <div class="box"><?=$arResult['PROPERTIES']['ATT_DOCUMENTATION']['~VALUE']['TEXT']?></div>
    </div>
</div>
