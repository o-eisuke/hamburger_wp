$(function () {
	
	$('.p-header__menu').click(function () {
		$(this).toggleClass('active');
		$('.zdo_drawer_bg').fadeToggle();
		$('.p-aside').toggleClass('open');
    $('body').toggleClass('open');
	})
	
	$('.p-aside__button').click(function () {
    $('.zdo_drawer_bg').fadeOut();
		$('.p-header__menu').removeClass('active');
		$('.p-aside').removeClass('open');
    $('body').removeClass('open');
	});
})