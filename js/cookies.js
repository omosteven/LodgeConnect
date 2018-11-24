function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

function checkCookie(cname) {
    var user = getCookie(cname);
    if (user != "") {
        return 1;
    } else {
        return 0;
        }
    }

function deleteCookie(cname) {
    var user = checkCookie(cname)
    if(user == 1) {
        var val = getCookie(cname);
        backtime = -1;
        if(setCookie(cname,val,backtime)){
            return 1;
        } else {
            return 0;
        }
    }
}