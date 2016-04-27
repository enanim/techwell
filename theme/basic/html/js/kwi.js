/**
 * Created by kyo on 14. 6. 28.
 */

// href
function goUrl(url) {
    document.location.href = url;
}
function goBack() {
    history.back();
}
function altGo(msg, url) {
    alert(msg);
    goUrl(url);
}
function responseHandler(resp, success, fail) {
    var r = false;
    var type = resp.success ? 'success' : 'error';
    if (resp.message) {
        alert(resp.message);
    }
    if (resp.success) {
        if (success != undefined) success(resp);
        if (resp.url == 'redirect') location.reload();
        else if (resp.url) goUrl(resp.url);
        r = true;
    } else {
        if (resp.url) goUrl(resp.url);
        if (fail != undefined) fail(resp);
    }
    return r;
}

function popup(url, popupName, width, height, scrollbars, xPosition, yPosition) {
    var xP = 0, yP = 0, xC = 0, yC = 0, scr = 0, zero = 0, one = 1;
    var target = url == null || url == '' ? '' : url;
    var w = width == null || width == '' ? 400 : width;
    var h = height == null || height == '' ? 400 : height;

    if (parseInt(navigator.appVersion) >= 4) {
        xC = (screen.width - w) / 2;
        yC = (screen.height - h) / 2;
    }

    xP = xPosition == null || xPosition == 'c' ? xC : xPosition;
    yP = yPosition == null || yPosition == 'c' ? yC : yPosition;
    scr = scrollbars == null || scrollbars == 'n' ? 0 : scrollbars;

    var parameters = 'location=' + zero +
        ',menubar=' + zero +
        ',height=' + h +
        ',width=' + w +
        ',toolbar=' + zero +
        ',scrollbars=' + scr +
        ',status=' + zero +
        ',resizable=' + one +
        ',left=' + xP +
        ',screenX=' + xP +
        ',top=' + yP +
        ',screenY=' + yP;

    newWin = window.open(target, popupName, parameters);
    newWin.focus();
};

$(function() {
    //slides the element with class "menu_body" when paragraph with class "menu_head" is clicked
    $("#firstpane h4.menu_head").click(function(e)
    {
        e.preventDefault();
        $(this).css({backgroundImage:"url(../images/common/left_menu_bullet02.gif) no-repeat"}).next("div.menu_body").slideDown(300).siblings("div.menu_body").slideUp("slow");
        $(this).siblings().css({backgroundImage:"url(../images/common/left_menu_bullet01.gif) no-repeat"});
    });
    $('#firstpane').mouseleave(function(e) {
        e.preventDefault();
        $("div.menu_body").slideUp("slow");
    });

    //slides the element with class "menu_body" when mouse is over the paragraph
    $("#secondpane h4.menu_head").click(function(e)
    {
        e.preventDefault();
        $(this).css({backgroundImage:"url(../images/common/left_menu_bullet02.gif) no-repeat"}).next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
        $(this).siblings().css({backgroundImage:"url(../images/common/left_menu_bullet01.gif) no-repeat"});
    });
});