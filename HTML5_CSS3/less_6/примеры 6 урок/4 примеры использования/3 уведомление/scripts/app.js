$(document).ready(function() {
    let button = $('button');
    let notice = $('.notice');
    button.click(function() {
        if (notice.css('display') === 'none') {
            notice.css('display', 'block');
            notice.addClass('magictime tinLeftIn');
        } else {
            notice.removeClass('tinLeftIn');
            notice.css('display', 'none');
        }
    });
});