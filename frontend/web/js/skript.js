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

    $('#more-events').on('click', function(){
        var count = parseInt($(this).attr('data-count'),10);
        $(this).attr('data-count', count + 1);
        var csrf = $(this).attr('data-csrf');
        $.ajax({
            type: 'POST',
            url: "/ms/default/ajax_get_events/",
            data: 'count=' + count + '&_csrf=' + csrf,
            success: function (data) {
                $("#more-events-box").append(data);
            }
        });
        return false;
    });

    $(document).on('click', '#more-news', function(){
        var page = parseInt($(this).attr('data-count'),10);
        var csrf = $(this).attr('data-csrf');
        $(this).parent().remove();
        $.ajax({
            type: 'POST',
            url: "/news/default/ajax_get_news/",
            data: 'page=' + page + '&_csrf=' + csrf,
            success: function (data) {
                $( data ).insertBefore( $( ".ajaxNews" ) );
            }
        });
        return false;
    });

    var floor;
    for(var i=0;i<75;i++){
        floor = 75 - i;
        $('.tower-scheme').append('<div class="floor" data-floor="' + floor + '"><span class="floor-left-span">'+floor+'</span><span class="floor-right-span">'+floor+'</span></div>');
    }

    $(document).on('click', '.floor', function(){
        var level = $(this).attr('data-floor');
        var csrf = $('.renters__floor').attr('data-csrf');
        $('.floor').each(function(){
            $(this).removeClass('floor-active');
        });
        $(this).addClass('floor-active');
        $('.floor-number').text(level);
        $.ajax({
            type: 'POST',
            url: "/site/get_tenants",
            data: 'level=' + level + '&_csrf=' + csrf,
            success: function (data) {
                $('.renters__companies').html(data);
            }
        });
    });

});

