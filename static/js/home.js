

$(".block").mouseover(function(event) {
    $(this).find(".read-more").show();
});

$(".block").mouseout(function(event) {
    $(this).find(".read-more").hide();
});

function isValidMobile(mobile) {
    var ex = /\d{11,13}/;
    return ex.test(mobile);
}

function isValidName(name) {
    return name.length < 15;
}

function isRealName(realname) {
    var length = realname.length;
    for(var i = 0; i < length; i++) {
        if(escape(realname[i]).indexOf("%u") < 0) {
            return false;
        }
    }
    return true;
}

function isValidPassword(password) {
    return password.length > 6 && password.length < 40;
}
