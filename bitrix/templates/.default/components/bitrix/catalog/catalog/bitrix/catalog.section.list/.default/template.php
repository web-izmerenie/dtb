<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?><?
if ('Y' == $arParams['SHOW_PARENT_NAME'] && 0 < $arResult['SECTION']['ID'])
{
	$this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
	$this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

	?><h1
		class="<? echo $arCurView['TITLE']; ?>"
		id="<? echo $this->GetEditAreaId($arResult['SECTION']['ID']); ?>"
	><a href="<? echo $arResult['SECTION']['SECTION_PAGE_URL']; ?>"><?
		echo (
			isset($arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]) && $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"] != ""
			? $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]
			: $arResult['SECTION']['NAME']
		);
	?></a></h1><?
}
if (0 < $arResult["SECTIONS_COUNT"])
{
	switch ($arParams['VIEW_MODE'])
	{
		case 'TILE':
            //верхний уровернь вложености
            if($arResult['SECTION']['DEPTH_LEVEL'] == 0){
                ?><div id="catalog"><?
                foreach ($arResult['SECTIONS'] as &$arSection)
                {
                    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                    
                        //resize-photo
                        $photo = CFile::ResizeImageGet($arSection['PICTURE'], array('width'=>165, 'height'=>107), BX_RESIZE_IMAGE_EXACT, false);
                        $big_photo = CFile::ResizeImageGet($arSection['PICTURE'], array('width'=>402, 'height'=>235), BX_RESIZE_IMAGE_EXACT, false);
                    
                        ?><div class="catalog-element <?if($arSection['UF_BIG_ELEMENT']){?>big-element<?}?>">
                        <a
                            href="<? echo $arSection['SECTION_PAGE_URL']; ?>"
                            class="catalog-img-prev"
                            title="<? echo $arSection['PICTURE']['TITLE']; ?>"
                            >
                            <?if(!empty($arSection['PICTURE'])){?>
                                <img src="<?if($arSection['UF_BIG_ELEMENT']){echo $big_photo['src'];}else{echo $photo['src'];}?>">
                            <?}?>
                        </a>
                        <?if ('Y' != $arParams['HIDE_SECTION_NAME'])
                        {
                            ?><a class="title" href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><span><? echo $arSection['NAME']; ?></span></a><?
                            if ($arParams["COUNT_ELEMENTS"])
                            {
                                ?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
                            }
                        ?><?
                        }
                    ?></div><?    
                }
                ?></div><?
                unset($arSection);
                } else {
                    ?><div id="catalog-items"><?
                        foreach ($arResult['SECTIONS'] as &$arSection)
                        {
                            //resize-photo
                            $innerSect = CFile::ResizeImageGet($arSection['PICTURE'], array('width'=>200, 'height'=>205), BX_RESIZE_IMAGE_EXACT, false);?>

                            <div class="item">
                                <a
                                    href="<? echo $arSection['SECTION_PAGE_URL']; ?>"
                                    class="img"
                                    title="<? echo $arSection['PICTURE']['TITLE']; ?>"
                                    ><?if(!empty($arSection['PICTURE'])){?>
                                        <img src="<?=$innerSect['src']?>"><?}?>
                                </a>
                                
                                <?if ('Y' != $arParams['HIDE_SECTION_NAME'])
                                {
                                    ?><a class="title" href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><span><? echo $arSection['NAME']; ?></span></a><?
                                    if ($arParams["COUNT_ELEMENTS"])
                                    {
                                        ?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
                                    }
                                ?><?
                                }
                            ?></div><?    
                        }
                    ?></div><?
                    unset($arSection);
                }
			break;
	}
}?>