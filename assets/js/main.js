jQuery(document).ready(function() {
	//ajax
    // jQuery('#two div a').click(function() {
     //    x('news');
    // });
    //
    // jQuery('#three div a').click(function() {
     //    x('cold');
    // });
    //
    // function x (s) {
     //    jQuery('#exampleModal .content').load('content.html #'+s);
     //    jQuery('#exampleModal').arcticmodal();
    // }

    // jQuery('.history .portfolio__link').click(function() {
    //     jQuery('#exampleModal .content').load('content.html #'+this.getAttribute("data-link"));
    //     // jQuery('#exampleModal .content').load('content.html #'+jQuery(this).attr("data-link")); //jquery
    //     // jQuery('#exampleModal .content').load('content.html #'+jQuery(this).data("link")); //jquery data-
    //     jQuery('#exampleModal').arcticmodal();
    // });

    // для WP. Подгрузка контента в существующую html разметку. C помощью атрибутов

    //МОДАЛЬНЫЕ ОКНА
    jQuery('.history .portfolio__link').click(function() {    //находим ссылку и определяем событие
        var s = jQuery(this).closest('li').find(".content-load").html(); //создаем переменную в которую прописываем путь от ссылки на которую нажали => до ближайшего тега li (.closest('li') функция для поиска ближайшего li => затем с помощью .find ищем div внутри которого наш текст
        var s2 = jQuery(this).attr("title"); // тоже самое что и выше только ищем аттрибут title у ссылки. В нем уже зарание прописан заголовок
        var s3 = jQuery(this).data("img"); // тоже самое только через трибут data(впринципе тоже самое что и attr только отлючается тем что может распознать число или строка, для работы надо добавить ссылке атрибут data-имя и потом вызвать. При вызове нужно писать .data(это значит data-).),
        jQuery('#exampleModal2 .content p').html(s); //вставляем значения по ссылке
        jQuery('#exampleModal2 .content h5').html(s2);
        // jQuery('#exampleModal2 .content img').attr('src',s3);
        // jQuery('#exampleModal .content').load('content.html #'+jQuery(this).attr("data-link")); //jquery
        // jQuery('#exampleModal .content').load('content.html #'+jQuery(this).data("link")); //jquery data-
        jQuery('#exampleModal2').arcticmodal(); // вызываем модалку
    });
    // Добавление иконок к ссылкам отзывов
    jQuery('.slider__footer > :nth-child(1)').append("<i class=\"fab fa-vk\" style=\"font-size: 26px; margin-right:10px; color: rgba(32,78,122,0.81);\"></i>");
    jQuery('.slider__footer > :nth-child(2)').append("<i class=\"fab fa-odnoklassniki-square\" style=\"font-size: 26px; margin-right:10px; color: rgba(255,124,80,0.84);\"></i>");
    // function form (x) {
    //     jQuery("#exampleModal .content").load("content.html ."+x);
    //     jQuery('#exampleModal').arcticmodal();
    // }

    // ФОРМЫ ОБРАТНОЙ СВЯЗИ
    jQuery('#answer').click(function() {
       jQuery('#exampleModal4').arcticmodal();
    });

    jQuery('#send, #sendprice').click(function() {
        jQuery('#exampleModal3').arcticmodal();
    });


    //Форма обратной связи
    jQuery("#form").submit(function () {
        jQuery.ajax({
            type: "POST",
            url: "mail.php",
            data: jQuery(this).serialize()
        }).done(function () {
           alert("Спасибо за заявку! Скоро мы с вами свяжемся");
        });
        return false;
    })

    //Слайдер (Slick)
    jQuery('#slider').slick({
        dots: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false
                }
            }]
    });

    //Аккордион
    (function(jQuery) {
        var o, n;
        jQuery(".title_block").on("click", function() {
            o = jQuery(this).parents(".accordion_item");
            n = o.find(".info");
            o.hasClass("active_block")
                ? (o.removeClass("active_block"), n.slideUp(200))
                : (o.addClass("active_block"), n.stop(!0, !0).slideDown(200),
            o.siblings(".active_block").removeClass("active_block").children(".info").stop(!0, !0).slideUp(200))
        })
    })(jQuery);

    //плавный опуск к секции
    jQuery('.nav .menu .menu-item a').addClass('go_to');
    jQuery('.go_to').click(function () {
        var scroll_el = jQuery(this).attr('href');
        if (jQuery(scroll_el).length != 0) {
            jQuery('html, body').animate({scrollTop: jQuery(scroll_el).offset().top}, 500);
        }
        return false;
    });

    //кнопка scroll-top
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 0) {
            jQuery('#scroller').fadeIn();
        } else {
            jQuery('#scroller').fadeOut();
        }
    });
    jQuery('#scroller').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });

    jQuery(".portfolio__link").click(function() {
        return false;
    });

    //адаптив
    jQuery(window).resize(function () {
        var widthWind = jQuery(this).width();
        if (widthWind <= 768) {
           jQuery('.background .nav').addClass('d-none');
           jQuery('.bg .container .wrap').addClass('d-none');
           jQuery('.burger-menu').removeClass('d-none');
        } else {
            jQuery('.burger-menu').addClass('d-none');
            jQuery('.background .nav').removeClass('d-none');
            jQuery('.bg .container .wrap').removeClass('d-none');
        }
    });
    jQuery(window).resize();

    //Гамбургер меню
    jQuery(function() {
        function init() {
            jQuery('[data-behaviour="toggle-menu-icon"]').on('click', toggleMenuIcon);
        };
        function toggleMenuIcon() {
            jQuery(this).toggleClass('menu-icon--open');
            jQuery('[data-element="toggle-nav"]').toggleClass('nav--active');
        };
        init()
    });

});

