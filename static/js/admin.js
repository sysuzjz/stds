/* 切换选项卡 */
$("#home-edit").on("click", ".home-item", function() {
    var index = $(this).index();
    $("#home-edit-forms form").hide().eq(index).show();
})

/* 点击候选名单某项使其从候选名单中删除并进入已选名单 
 * 点击已选名单某项使其从已选名单中删除并回到候选名单
 *
*/
$("#home-edit").on("click", ".candidate button", function(event) {
    event.preventDefault();
    var $selected = $(this).closest('form').find(".selected");
    if($selected.children('button').length >= 9) {
        return;
    }
    $(this).remove().clone(true).appendTo($selected);
})

$("#home-edit").on("click", ".selected button", function(event) {
    event.preventDefault();
    var $candidate = $(this).closest('form').find(".candidate");
    $(this).remove().clone(true).appendTo($candidate);
})


/* 使得sidebar 和 article高度相同 */
setHeightSame();

function setHeightSame () {
    var sidebarHeight = $("aside").height();
    var articleHeight = $("article").height();
    if(sidebarHeight < articleHeight) {
        $("aside").height(articleHeight);
    }
}