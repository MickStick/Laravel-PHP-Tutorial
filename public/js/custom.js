$(function() {
    $('.pagination').children('li').eq(0).children('span').html("");
    $('.pagination').children('li').eq(0).children('span').append("<i class=\"material-icons grey-text\">chevron_left</i>");
    $('.pagination').children('li').eq(0).children('a').html("");
    $('.pagination').children('li').eq(0).children('a').append("<i class=\"material-icons\">chevron_left</i>");
    $('.pagination').children('li').eq($('.pagination').children('li').length - 1).children('span').html("");
    $('.pagination').children('li').eq($('.pagination').children('li').length - 1).children('span').append("<i class=\"material-icons grey-text\">chevron_right</i>");
    $('.pagination').children('li').eq($('.pagination').children('li').length - 1).children('a').html("");
    $('.pagination').children('li').eq($('.pagination').children('li').length - 1).children('a').append("<i class=\"material-icons\">chevron_right</i>");
    $('.pagination').children('li');
    for (var x = 1; x < $('.pagination').children('li').length - 1; x++) {
        $('.pagination').children('li').eq(x).addClass("waves-effect").addClass("btn-flat").addClass("grey").addClass("lighten-2");
    }
});
$(document).ready(() => {
    $(".button-collapse").sideNav();

    $('.post-item div p').addClass("truncate");

    $('a').click(function() {
        if (!$(this).hasClass("dropdown-button")) {
            $('.progress').css({ "display": "block" });
        }

    });

    $('form').submit(function() {
        $('.progress').css({ "display": "block" });
    });

});