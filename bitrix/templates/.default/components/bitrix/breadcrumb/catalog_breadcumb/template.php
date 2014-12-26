<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
    return "";

$strReturn = '<div id="pagination">';

$num_items = count($arResult);

for($index = 0, $itemSize = $num_items; $index < $itemSize; $index++)
{
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

    if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1){
        if($index == 0){
            $strReturn .= '<h1><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a></h1><span></span>';
        }else{
            $strReturn .= '<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a><span></span>';
        }
    }else{
        if($index == 0){
            $strReturn .= '<h1>'.$title.'</h1>';
        }else{
            $strReturn .= $title;
        }
    }
}

$strReturn .= '</div>';

return $strReturn;
?>
