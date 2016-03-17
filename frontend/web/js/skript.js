$(document).ready(function(){
    var h = $(window).height();

    $("#content_photo, #content__photo--tower, #offices__banner, #apartment__banner, #retail__banner").addClass('animated zoomIn');/*добовляем элементу класс из библиотеки анимации*/

    $(window).scroll(function(){
        if($("#content__about-left").length > 0 ){/*проверка наличия элементов на странице*/
            if ( ($(this).scrollTop()+h) >= $("#content__about-left").offset().top) {
                $("#content__about-left").css({visibility:"visible"});
                $("#content__about-left").eq(0).addClass('animated bounceInLeft');
                //$("#content__about-left").eq(1).addClass('animated bounceInRight');
            }
            if ( ($(this).scrollTop()+h) >= $("#content__about-right").offset().top) {
                $("#content__about-right").css({visibility:"visible"});
                $("#content__about-right").eq(0).addClass('animated bounceInRight');
                //$("#content__about-right").eq(1).addClass('animated bounceInLeft');
            }
        }


        if ( ($(this).scrollTop()+h) >= $("#footer").offset().top) {
            $("#footer").css({visibility:"visible"});
            $("#footer").addClass('animated zoomIn');
        }

        //if ( $(this).scrollTop() == 0 ) {
        //    $("#content_photo, .header__container-left, .header__logo, .header__container-right, #content__about-left, #content__about-right").each(function(){
        //        if ( $(this).hasClass('last') ) {
        //            $(this).removeClass().addClass('post last');
        //        } else {
        //            $(this).removeClass().addClass('post');
        //        }
        //        $(this).css({visibility:"hidden"});
        //    });
        //}

        //$(this).hide().removeAttr("href");
        if ($(window).scrollTop() >= "250") $(this).fadeIn("slow")/*функция стрелки вверх*/
        var scrollDiv = $('#Go_Top');

        if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow")
        else $(scrollDiv).fadeIn("slow")

    });
    $('#Go_Top').click(function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });
});

