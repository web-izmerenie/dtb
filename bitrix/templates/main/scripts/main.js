$(document).ready(function () {
    function topMenuSize() {
        var full_weight = 0;
        $(".header nav li").each(function () {
            full_weight += $(this).width() + 38;
        });
        $(".header nav").width(full_weight);
    }

    function activeMenu() {
        var UrlBrow = location.pathname;
        var topMenuLink = $(".header nav li a");
        topMenuLink.each(function () {
            if ($(this).attr("href") == UrlBrow) {
                $(".header nav li a:first").removeClass("active");
                $(this).addClass("active");
            }
        });
    }

    function leftMenu() {
        $(".left-menu > .open > .inside-menu").show();
        $(".left-menu > li").click(function () {
            if (!$(this).hasClass("open")) {
                $(".left-menu .inside-menu").slideUp(500);
                $(".left-menu > li").removeClass("open");
                $(this).find('ul').slideDown(500);
                $(this).addClass("open");
            }
        });
    }

    function tabs() {
        $('ul.tabs-control').on('click', 'li:not(.current)', function() {
            $(this).addClass('active').siblings().removeClass('active')
                .parents('div.tabs').find('div.box').eq($(this).index()).fadeIn(500).siblings('div.box').hide();
        })
    }
    tabs();
    leftMenu();
    topMenuSize();
    activeMenu();
});