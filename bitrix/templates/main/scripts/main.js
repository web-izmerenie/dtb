/**
 * @author Andrey Chechkin
 * @author Viacheslav Lotsmanov
 */

$(document).ready(function () {
    function topMenuSize() {
        var full_weight = 0;
        $(".header nav li").each(function () {
            full_weight += $(this).width() + 38;
        });
        $(".header nav").width(full_weight);
    }

    function leftMenu() {
        var $leftMenu = $(".left-menu");
        var $ul = $leftMenu.find('>ul');
        var $liList = $ul.find('>li');
        var $a = $liList.find('>a');
        var $insideMenu = $liList.find('>ul.inside-menu');

        $liList.filter('.open').find('>ul.inside-menu').show();

        $a.click(function () {
            var $a = $(this);
            var $li = $a.closest('li');
            var $subUl = $li.find('ul');
            
            var currentOpen = false;

            $insideMenu.each(function () {
                var $subUl = $(this);
                var $parLi = $subUl.closest('li');
                
                if (!$parLi.hasClass('open')) return;
                if ($parLi.index() === $li.index()) currentOpen = true;
                $parLi.removeClass('open');
                $subUl.slideUp(500);
            });

            if (!$li.hasClass("open") && !currentOpen) {
                $li.addClass("open");
                $subUl.slideDown(500);
            }

            return false;
        });
    }

    function tabs() {
        $('ul.tabs-control').on('click', 'li:not(.current)', function() {
            $(this).addClass('active').siblings().removeClass('active')
                .parents('div.tabs').find('div.box').eq($(this).index()).fadeIn(500).siblings('div.box').hide();
        })
    }
	
	function quest_form(){
		function closeForm(){
			$('.overload').hide();
			$('#form_call').hide();
			$('.ts-alert').hide();
		}
		$('#quest').click(function(){
			$('.overload').show();
			$('#form_call').show();
		});
		$('.overload').click(function(){closeForm();});
		$('.close').click(function(){closeForm();});
	}

    tabs();
    leftMenu();
    topMenuSize();
	quest_form();
});
