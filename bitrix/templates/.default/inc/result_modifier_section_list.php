<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach($arResult["SECTIONS"] as $key => $arSection){
    $arUF = $GLOBALS["USER_FIELD_MANAGER"]->GetUserFields("IBLOCK_3_SECTION",$arSection['ID'],"UF_BIG_ELEMENT");
    if($arUF["UF_BIG_ELEMENT"]["VALUE"] != ""){
        $arResult["SECTIONS"][$key]["BIG_ELEMENT"] = $arUF["UF_BIG_ELEMENT"]["VALUE"];
    }
}

$newList = array();

if(!$_GET['SECTION_CODE']){

    foreach ($arResult['SECTIONS'] as $arItem1) {
        if ($arItem1['DEPTH_LEVEL'] != 1) continue;

        $arItem1['CHILDREN'] = array();

            foreach ($arResult['SECTIONS'] as $arItem2) {
                if (
                    $arItem2['DEPTH_LEVEL'] != 2 ||
                    $arItem2['IBLOCK_SECTION_ID'] != $arItem1['ID']
                ) continue;

                /*
                if (stripos($arItem2['SECTION_PAGE_URL'], %URL_PATHNAME%) === 0) {
                    $arItem1['ACTIVE'] = true;
                    $arItem2['ACTIVE'] = true;
                }
                if ($arItem2['SECTION_PAGE_URL'] === %URL_PATHNAME%) {
                    $arItem2['CURRENT'] = true;
                }
                */

                $arItem2['CHILDREN'] = array();

                foreach ($arResult['SECTIONS'] as $arItem3) {
                    if (
                        $arItem3['DEPTH_LEVEL'] != 3 ||
                        $arItem3['IBLOCK_SECTION_ID'] != $arItem2['ID']
                    ) continue;

                    $arItem2['CHILDREN'][] = $arItem3;
                }

                /*
                if ($arItem2['ACTIVE']) {
                    $arResult['LEVEL_3_ACTIVE_CHILDREN'] = $arItem2['CHILDREN'];
                }
                */

                $arItem1['CHILDREN'][] = $arItem2;
            }


        $newList[] = $arItem1;
    }
}else{
        foreach ($arResult['SECTIONS'] as $arItem1) {
        if ($arItem1['DEPTH_LEVEL'] != 3) continue;
        $newList[] = $arItem1;
    }
}
$arResult['SECTIONS'] = $newList;
