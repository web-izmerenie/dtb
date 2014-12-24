<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/katalog/(.+?)/(.+?).html(\\?|\$)#",
		"RULE" => "ELEMENT_CODE=\$2&",
		"ID" => "",
		"PATH" => "/katalog/detail.php",
	),
	array(
		"CONDITION" => "#^/katalog/(.+?)/(\\?|\$)#",
		"RULE" => "SECTION_CODE=\$1&",
		"ID" => "",
		"PATH" => "/katalog/index.php",
		"SORT" => "100",
	),
);

?>