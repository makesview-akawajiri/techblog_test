// ブラウザバックした時にリロードする処理(メニューが開いたままになっているのを解消するため)
window.onpageshow = function(event) {
	if (event.persisted) {
		window.location.reload();
	}
};

$(function() {
    $('.hamburger').click(function() {
        $(this).toggleClass('active');
 
        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }
    });
});