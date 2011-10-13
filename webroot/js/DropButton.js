$(function() {
    var button = $('#DropButton');
    var box = $('#DropBox');
    var form = $('#DropForm');
    button.removeAttr('href');
    button.mouseup(function(Drop) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(Drop) {
        if(!($(Drop.target).parent('#DropButton').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
});
