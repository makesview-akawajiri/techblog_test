// ブラウザバックした時にリロードする処理(メニューが開いたままになっているのを解消するため)
window.onpageshow = function(event) {
	if (event.persisted) {
		window.location.reload();
	}
};

$(function() {

    const backBtn = '<p class="js-back-btn back_btn">戻る</p>';
    const spHgSubMenu = $('.js-sp_sub_menu');
    const spHgBtn = $('.hamburger p.ttl');
    const spHgMainMenu = $('.js-sp-main-menu');

    // SPメインメニュー開閉処理
    $('.js-hg-btn').on('click',function() {
        spHgMainMenu.fadeToggle(500);
        $(this).toggleClass('active');
        spHgSubMenu.fadeOut(500);
    });

    // SPサブメニュー開閉処理
    $('.js-sp_sub_menu_btn').on('click',function() {
        const subMenuName = $(this).data('sub-menu-name');
        $(`.js-sp_sub_menu.${subMenuName}`).fadeIn(500);
    });

    // 戻るボタン挿入
    $('.sp_sub_menu .inner').append(backBtn);
    $('.js-back-btn').on('click',function() {
        spHgSubMenu.fadeOut(500);
    });

});