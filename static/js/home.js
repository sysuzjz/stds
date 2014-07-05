/* 点击登陆按钮时弹出登陆框
 * 登陆框下是遮罩层
 * 遮罩层与登陆框同时出现与消失
*/
$("#login").click(function(event) {
    event.preventDefault();
    $(".mask-layer").show(500);
    $("#login-box").show("slow");
});

$(".hidebox form button[type=reset], .mask-layer").click(function(event) {
    $(".mask-layer").hide(500);
    $('.hidebox').hide("slow");
});

/* 点击注册按钮时弹出注册框
 * 注册框下遮罩层
 * 根据注册类别选择，弹出不同框
*/

$("#register").click(function(event) {
    event.preventDefault();
    $(".mask-layer").show(500);
    $("#register-box-0").show("slow");
});

$(".hidebox input[type=radio]").click(function(event) {
    event.preventDefault();
    var val = $(this).val();
    if(val === "1") {
        $("#register-box-1").show();
        $("#register-box-0").hide();
    } else {
        $("#register-box-0").show();
        $("#register-box-1").hide();
    }
});

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
