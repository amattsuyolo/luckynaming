function cookieBarDisappear() {
    $('.cookies').css({
        display: 'none'
    });
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function showCookie() {
    $('.cookies').css({
        display: 'block'
    });
}

function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
}
const allow_cookie = getCookie('allow_cookie');
window.onload = function() {
    if (allow_cookie) {
        cookieBarDisappear();
    } else {
        showCookie();
    }
};

$(document).on('click', '.cookies-close a', function() {
    cookieBarDisappear();
    setCookie('allow_cookie', true, 365)
});