<?if(!$_GET['SECTION_CODE']){
    header ('Location: /');
    exit();
}
define("SIDEBAR", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
<?$APPLICATION->IncludeFile("/katalog/component_call.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
