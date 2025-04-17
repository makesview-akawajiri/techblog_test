// タブレットビューポート
if ((navigator.userAgent.indexOf('iPhone') > 0) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
    document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">');
} else {
    document.write('<meta name="viewport" content="width=1250">');
}

$(function(){

    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    });
    wow.init();

	// スムーズスクロール
    const headerClassName = $(window).width() > 750 ? 'header#pc_header': 'header#sp_header';
    let headerHeight = $(`${headerClassName}`).outerHeight() + 50;

    $('[href^="#"]').click(function() {
        const speed = 400;
        const href= $(this).attr("href");
        const target = $(href == "#" || href == "" ? 'html' : href);
        const position = target.offset().top-headerHeight;
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });

    // 別ページ間でのアンカーリンク処理
    $(window).on('load', function() {
        const url = $(location).attr('href');
        if(url.indexOf("#") != -1){
            const anchor = url.split("#"),
            target = $('#' + anchor[anchor.length - 1]),
            position = Math.floor(target.offset().top) - headerHeight;
            $("html, body").animate({scrollTop:position}, 10);
        };
    });

});