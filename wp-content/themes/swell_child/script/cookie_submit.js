$(function() {

    $("[type=submit]").on("click", function(){

        var setCookie = function(cookieName, value){
        var cookie = cookieName + "=" + value + ";";
        document.cookie = cookie;
        }

        var getCookie = function(cookieName){
        var l = cookieName.length + 1 ;
        var cookieAry = document.cookie.split("; ") ;
        var str = "" ;
        for(i=0; i < cookieAry.length; i++){
            if(cookieAry[i].substr(0, l) === cookieName + "="){
            str = cookieAry[i].substr(l, cookieAry[i].length) ;
            break ;
            }
        }
        return str;
        }

        setCookie('check_cookie', true);
        var val = getCookie('check_cookie');

        if(val) {
        //cookie 有効
        } else {
        //cookie 無効
        alert('cookieを有効にして下さい。\nこちらのフォームはcookieが有効でないと使用出来ません。');
        }

    });
});