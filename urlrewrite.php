<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/optovikam/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/optovikam/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
	array(
		"CONDITION" => "#^/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/index.php",
	),
);

?>