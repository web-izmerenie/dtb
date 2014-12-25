<?if (!defined( "B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "catalog", array(
	"IBLOCK_TYPE" => "dtb",
	"IBLOCK_ID" => "3",
	"SECTION_ID" => "",
	"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
	"COUNT_ELEMENTS" => "Y",
	"TOP_DEPTH" => "3",
	"SECTION_FIELDS" => array(
		0 => "PICTURE",
		1 => "",
	),
	"SECTION_USER_FIELDS" => array(
		0 => "UF_BIG_ELEMENT",
		1 => "",
	),
	"SECTION_URL" => "",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"ADD_SECTIONS_CHAIN" => "N"
	),
	false
);?>
