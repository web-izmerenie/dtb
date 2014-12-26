<?php $tplPath="/bitrix/templates/main/" ;
$page = $APPLICATION->GetCurPage();?>
<!DOCTYPE html>
<html class="main">
<head>
    <meta charset="utf-8" />
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <title>
        <?$APPLICATION->ShowTitle()?></title>
    <link href="<?=$tplPath?>styles/build.css" rel="stylesheet">
    <script src="<?=$tplPath?>scripts/plugins/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="<?=$tplPath?>scripts/main.js" type="text/javascript"></script>
    <?if($USER->IsAuthorized()){?>
        <?$APPLICATION->ShowHead()?>
    <?}?>
</head>

<body>
    <?$APPLICATION->ShowPanel();?>
    <div class="wrapper">
        <header class="header">
            <section>
                <div id="header-line">Работаем с 8:00 до 19:00 (ВС — с 8:00 до 16:00)
                    <a id="quest"><span>Задать вопрос</span></a>
                    <b>8 (86354) 6-27-11</b>
                </div>
                <a href="/" id="logo"></a>
                <div id="name-company"></div>
                <h1>для строительства и ремонта</h1>
            </section>
            <?$APPLICATION->IncludeComponent( "bitrix:menu", "main-menu", Array(
                "ROOT_MENU_TYPE" => "top",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => "",
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "",
                "USE_EXT" => "N",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "N"
            ) );?>
        </header>
        <!-- .header-->
        <main class="content">
            <?if(defined("SIDEBAR")){?>
            <aside id="sidebar">
                <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "left_menu", array(
                    "IBLOCK_TYPE" => "dtb",
                    "IBLOCK_ID" => "3",
                    "SECTION_ID" => $_REQUEST["SECTION_ID"],
                    "SECTION_CODE" => "",
                    "COUNT_ELEMENTS" => "N",
                    "TOP_DEPTH" => "2",
                    "SECTION_FIELDS" => array(
                        0 => "",
                        1 => "",
                    ),
                    "SECTION_USER_FIELDS" => array(
                        0 => "",
                        1 => "",
                    ),
                    "SECTION_URL" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_GROUPS" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "VIEW_MODE" => "LIST",
                    "SHOW_PARENT_NAME" => "Y"
                    ),
                    false
                );?>
            </aside>
            <section class="content-in-sidebar">
<?}?>
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"catalog_breadcumb",
	Array(
		"START_FROM" => "2",
		"PATH" => "",
		"SITE_ID" => "s1"
	)
);?>
