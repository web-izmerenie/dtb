<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div id="contacts">
            <i>Телефоны:</i>
            <ul>
                <li>8 (928) 279-65-44</li>
                <li>8 (863) 247-10-54 — <i>бухгалтерия</i>
                </li>
                <li>8 (863-54) 6-27-11 — <i>торговый зал</i>
                </li>
            </ul>

            <p><i>Тел./Факс:</i>8 (86354) 5-93-33</p>

            <a href="mailto:dttri@aaanet.ru">dttri@aaanet.ru</a>

            
            <p><i>Фактический адрес:</i>г. Батайск, ул. Фермерская, 3 Б</p>
        </div>
        <div id="requisites">
            ИП Бордюгов Андрей Владимирович<br> ИНН — 616800281386<br> ОГРН — 305616813100021<br> ОАО КБ «Центр-Инвест» филиал № 2 г. Батайск<br> р/сч — 40802810700000000174<br> к/сч — 30101810700000000716<br> БИК — 046029716
            <p>
                <i>Юридический адрес:</i>
                г. Ростов-на-Дону, пр. Коммунистический 48 Б, кв. 72
            </p>
        </div>
<div id="map">
<?$APPLICATION->IncludeComponent("bitrix:map.yandex.view", ".default", array(
	"INIT_MAP_TYPE" => "MAP",
	"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:47.152004836898925;s:10:\"yandex_lon\";d:39.70803791532155;s:12:\"yandex_scale\";i:12;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:39.70481688227845;s:3:\"LAT\";d:47.14414614064418;s:4:\"TEXT\";s:0:\"\";}}}",
	"MAP_WIDTH" => "950",
	"MAP_HEIGHT" => "500",
	"CONTROLS" => array(
		0 => "ZOOM",
		1 => "TYPECONTROL",
		2 => "SCALELINE",
	),
	"OPTIONS" => array(
		0 => "ENABLE_SCROLL_ZOOM",
		1 => "ENABLE_DRAGGING",
	),
	"MAP_ID" => "map"
	),
	false
);?></div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>