$("#home-edit").on("click", ".home-item", function() {
    var index = $(this).index();
    $("#home-edit-forms form").hide().eq(index).show();
})

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