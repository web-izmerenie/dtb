<? include_once($_SERVER[ 'DOCUMENT_ROOT']. '/bitrix/modules/main/include/urlrewrite.php'); CHTTP::SetStatus( "404 Not Found"); @define( "ERROR_404", "Y"); require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/header.php"); $APPLICATION->SetTitle("404 Not Found"); ?>
<main class="content">
    <section id="notfound">
        <h1>Ошибка 404</h1>
        <p>Введён неверный адрес, или такой страницы больше нет.</p>
        <p>Вернитесь на <a href="/"><span>главную</span></a>
        </p>
    </section>
</main>
<!-- .content -->
<?require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/footer.php");?>