$("#upload").change(function(){
    var objUrl = getObjectURL(this.files[0]) ;
    if (objUrl) {
        $("#logo").attr("src", objUrl) ;
    }
}) ;
//建立一個可存取到該file的url
function getObjectURL(file) {
    var url = null ; 
    if (window.createObjectURL!=undefined) { // basic
        url = window.createObjectURL(file) ;
    } else if (window.URL!=undefined) { // mozilla(firefox)
        url = window.URL.createObjectURL(file) ;
    } else if (window.webkitURL!=undefined) { // webkit or chrome
        url = window.webkitURL.createObjectURL(file) ;
    }
    return url ;
}

$("#btn-add-shop").click(function(event) {
    event.preventDefault();
    $(".mask-layer").show(500);
    $("#add-shop").show("slow");
});

// $("#add-shop button[type=submit]").click(function(event) {
//     event.preventDefault();
//     var platform = $()
// });

$(".shop").mouseover(function(event) {
    $(this).find(".operate-box").show();
});

$(".shop").mouseout(function(event) {
    $(this).find(".operate-box").hide();
});

$(".edit-shop").click(function(event) {
    event.preventDefault();
    var $shop = $(this).closest(".shop"),
        id = $shop.attr("data-id"),
        platform = parseInt($shop.find(".detail-platform").attr("data-id")),
        name = $shop.find(".detail-name").text(),
        url = $shop.find("a").attr("href"),
        grade = $shop.find(".detail-grade").text(),
        commitment = $shop.find(".detail-commitment").text();
    $(".mask-layer").show(500);
    var $editShopBox = $("#edit-shop");
    $editShopBox.find("#edit-shop-id").val(id);
    $editShopBox.find("#edit-shop-platform").find("option").eq(platform + 1).prop("selected", true);
    $editShopBox.find("#edit-shop-name").val(name);
    $editShopBox.find("#edit-shop-link").val(url);
    $editShopBox.find("#edit-shop-grade").val(grade);
    $editShopBox.find("#edit-shop-commitment").text(commitment);
    $editShopBox.show("slow");
});

$(".complain-shop").click(function(event) {
    event.preventDefault();
    $(".mask-layer").show(500);
    $("#complain-shop").show("slow");
});