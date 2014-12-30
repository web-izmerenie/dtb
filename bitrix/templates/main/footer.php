<?if(defined("SIDEBAR")){?>
    </section>
<?}?>
 </main>
</div>
<!-- .wrapper -->
<footer class="footer">
    <section>
        <div class="footer-block">
            <p>г. Батайск</br>
                ул. Фермерская, 3 Б</p>
            <a href="mailto:dttri@aaanet.ru">dttri@aaanet.ru</a>
        </div>
        <div class="footer-block">
            <p><i><span>Телефоны:</span></i>
                8 (928) 279-65-44
                <br>8 (863) 247-10-54 <i>— бухгалтерия</i>
                <br>8 (863-54) 6-27-11 <i>— торговый зал</i>
            </p>
        </div>
        <div class="footer-block">
            <p><i><span>Тел./Факс:</span></i>
                8 (86354) 5-93-33
            </p>
        </div>
        <div class="wi">Разработка — <a href="http://www.web-izmerenie.ru/">Web izmerenie</a>
        </div>
    </section>
</footer>
<!-- .footer -->
<?$APPLICATION->IncludeComponent(
	"api:main.feedback",
	"form",
	Array(
		"IBLOCK_TYPE" => "dtb",
		"IBLOCK_ID" => "5",
		"INSTALL_IBLOCK" => "N",
		"DISABLE_SEND_MAIL" => "N",
		"REPLACE_FIELD_FROM" => "Y",
		"UNIQUE_FORM_ID" => "54a26671b98e2",
		"OK_TEXT" => "Спасибо, ваш вопрос принят.",
		"EMAIL_TO" => "web@web.ru",
		"DISPLAY_FIELDS" => "",
		"REQUIRED_FIELDS" => "",
		"CUSTOM_FIELDS" => array(0=>"Имя@input@text@required",1=>"E-mail@input@email@required",2=>"Вопрос@textarea@required",3=>"",4=>"",5=>"",6=>"",7=>"",8=>"",9=>"",10=>"",11=>"",12=>"",13=>"",14=>"",15=>"",),
		"ADMIN_EVENT_MESSAGE_ID" => array(0=>"8",),
		"USER_EVENT_MESSAGE_ID" => "",
		"HIDE_FIELD_NAME" => "N",
		"TITLE_DISPLAY" => "N",
		"FORM_TITLE" => "",
		"FORM_TITLE_LEVEL" => "1",
		"FORM_STYLE_TITLE" => "",
		"FORM_STYLE" => "",
		"FORM_STYLE_DIV" => "",
		"FORM_STYLE_LABEL" => "",
		"FORM_STYLE_TEXTAREA" => "",
		"FORM_STYLE_INPUT" => "",
		"FORM_STYLE_SELECT" => "min-width:232px;padding:3px 5px;",
		"FORM_STYLE_SUBMIT" => "",
		"FORM_SUBMIT_CLASS" => "",
		"FORM_SUBMIT_ID" => "",
		"FORM_SUBMIT_VALUE" => "Отправить",
		"USE_CAPTCHA" => "N",
		"USE_HIDDEN_PROTECTION" => "Y",
		"USE_PHP_ANTISPAM" => "N",
		"PHP_ANTISPAM_LEVEL" => "1",
		"INCLUDE_JQUERY" => "Y",
		"VALIDTE_REQUIRED_FIELDS" => "Y",
		"INCLUDE_PLACEHOLDER" => "N",
		"INCLUDE_PRETTY_COMMENTS" => "N",
		"INCLUDE_FORM_STYLER" => "N",
		"HIDE_FORM_AFTER_SEND" => "N",
		"SCROLL_TO_FORM_IF_MESSAGES" => "N",
		"SCROLL_TO_FORM_SPEED" => "1000",
		"BRANCH_ACTIVE" => "N",
		"SHOW_FILES" => "N",
		"UUID_LENGTH" => "10",
		"UUID_PREFIX" => "",
		"USER_AUTHOR_FIO" => "",
		"USER_AUTHOR_NAME" => "",
		"USER_AUTHOR_LAST_NAME" => "",
		"USER_AUTHOR_SECOND_NAME" => "",
		"USER_AUTHOR_EMAIL" => "",
		"USER_AUTHOR_PERSONAL_MOBILE" => "",
		"USER_AUTHOR_WORK_COMPANY" => "",
		"USER_AUTHOR_POSITION" => "",
		"USER_AUTHOR_PROFESSION" => "",
		"USER_AUTHOR_STATE" => "",
		"USER_AUTHOR_CITY" => "",
		"USER_AUTHOR_WORK_CITY" => "",
		"USER_AUTHOR_STREET" => "",
		"USER_AUTHOR_ADRESS" => "",
		"USER_AUTHOR_PERSONAL_PHONE" => "",
		"USER_AUTHOR_WORK_PHONE" => "",
		"USER_AUTHOR_FAX" => "",
		"USER_AUTHOR_MAILBOX" => "",
		"USER_AUTHOR_WORK_MAILBOX" => "",
		"USER_AUTHOR_SKYPE" => "",
		"USER_AUTHOR_ICQ" => "",
		"USER_AUTHOR_WWW" => "",
		"USER_AUTHOR_WORK_WWW" => "",
		"USER_AUTHOR_MESSAGE_THEME" => "",
		"USER_AUTHOR_MESSAGE" => "",
		"USER_AUTHOR_NOTES" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"SHOW_CSS_MODAL_AFTER_SEND" => "N",
		"CSS_MODAL_HEADER" => "Информация",
		"CSS_MODAL_FOOTER" => "",
		"CSS_MODAL_CONTENT" => "<p>Модуль <b>расширенная форма обратной связи битрикс с вложением</b> предназначен для отправки сообщений с сайта, включая код CAPTCHA и скрытую защиту от спама, и отличается от стандартной формы Битрикс:
<br> - <b>отправкой файлов вложениями или ссылками на файл</b>,
<br> - <b>встроенным конструктором форм,</b>
<br> - скрытой защитой от спама,
<br> - работой нескольких форм на одной странице,
<br> - встроенным фирменным валидатором форм,
<br> - 4 встроенными WEB 2.0 шаблонами,
<br> - дополнительными полями со своим именованием,
<br> - и многими другими функциями...
<br>подробнее читайте на странице модуля <a href=\"http://tuning-soft.ru/1c-bitrix/modules/main-feedback/\" target=\"_blank\">Расширенная форма обратной связи</a>
</p>"
	)
);?>
<div class="overload"></div>
</body>
</html>
