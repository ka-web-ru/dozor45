$(document).ready(function(){
    //закрепить меню в шапке

    function fixed_menu(h_hght){
        //console.log(h_hght);
        var h_mrg = 0;    // отступ когда шапка уже не видна

        var top = $(this).scrollTop();
        if(top > h_hght){
            elem.css('top', h_mrg);
        }
        $(window).scroll(function(){
            top = $(this).scrollTop();

            if (top+h_mrg < h_hght) {
                elem.css('top', (h_hght-top));
                elem.css('background-color','rgba(0,0,0,0.64)');
            } else {
                elem.css('top', h_mrg);
                elem.css('background-color', 'rgba(0,0,0,0.8)');
            }
        });
    };
    var h_hght = $('.header-wrapper').height();
    var elem = $('#top-nav');
    fixed_menu(h_hght, elem);

    //мобильное меню
    $('.btn-mobile-menu').click(function(e){
        //console.log('закрыть');
        e.preventDefault();
        $('.nav-header').slideToggle();
    });

    $(window).resize(function(){
        h_hght = $('.header-wrapper').height();
        fixed_menu(h_hght, elem);
        if($(window).width()>768){
            $('.nav-header').removeAttr('style');
        }
    });

    //плавный скролл для переходов меню
    $('.page-scroll').click( function() {
        //console.log('+++');
        var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
            $('html, body').animate({ scrollTop: ($(scroll_el).offset().top)-82}, 1000); // анимируем скроолинг к элементу scroll_el
        }
        return false; // выключаем стандартное действие
    });

    //маска для поля ввода телефона
    $('.tel-input').mask("8(999) 999-99-99");

    //Отправка формы обратной связи
    $('.btn-form').click( function(e) {
        //отменить стандартное действие при отправке формы
        e.preventDefault();
        //валидатор
        //var phone = $(this).siblings('[name=phone-input]');
        var phone = $(this).parents('.contact-form, .contact-form-modal').find('[name=phone-input]');
        //console.log(phone.val());
        if (phone.val() == ''){
            phone.attr('placeholder','Укажите телефон');
            phone.css('border','2px solid red');
            phone.css('border-radius','12px');
            return false;
        } else {
            phone.removeAttr('style');
            phone.attr('placeholder','Телефон');
        }
        //var m_data=$(this).parent('.contact-form, .contact-form-modal').serialize();
        var m_data ={};
        if ($(this).hasClass("top-contact-btn")){m_data['zakaz-type'] = 'Заказ на установку';}
        if ($(this).hasClass("middle-contact-btn")){m_data['zakaz-type'] = 'Просьба перезвонить';}
        if ($(this).hasClass("bottom-contact-btn")){m_data['zakaz-type'] = 'Требуется консультация';}
        $(this).parents('.contact-form, .contact-form-modal').find('input, select, textarea').each(function() {
            if($(this).attr('type').toLowerCase() != 'checkbox') {
                m_data[$(this).attr('name')] = this.value;
            }
            else {
                m_data[$(this).attr('name')] = this.checked;
            }
        });
        console.log( m_data );
        $.ajax({
            type: 'POST',
            url: 'mail.php',
            data: m_data,
            success: function(result){ //Если всё хорошо
                console.log('письмо отправлено');
                $('form').each(function(){this.reset();}); //сброс полей формы
                //для ответа из формы встроенной в страницу
                //if ($('#openModal').css('display') == 'none'){
                $('.overlay').show();
                $('.overlay, .close-btn, .result-box-wrapper').click(function(){
                    $('.overlay').hide();
                });
                //    $('.popup').css('display','block');
                //    $('.close').css('display','block');
                //}
                //$('.contact-form-modal').css('display','none');
                //$('.result-box').html('Спасибо! Ваша заявка принята. ').show();
            },
            error: function(result) { //Если ошибка
                //$('.contact-form-modal').css('display','none');
                //$('.result-box').html('Ошибка: ' + result).show();
            }
        });
    });

    //галерея в портфолио
    $('.portfolio-card').mouseenter(function() {
        $(this).find('.portfolio-card-title').css('display','block');
    });
    $('.portfolio-card').mouseleave(function() {
        $('.portfolio-card-title').css('display','none');
    });

    //карта 2gis
    var map;
    //координаты из адресной строки браузера после поиска фирмы на сайте 2gis
    DG.then(function () {
        map = DG.map('map', {
            center: [55.438974,65.365999],
            zoom: 17,
            scrollWheelZoom: false,
            dragging : false,
            touchZoom: false,
            scrollWheelZoom: false,
            doubleClickZoom: false,
            boxZoom: false,
            geoclicker: true,
            zoomControl: false,
            fullscreenControl: false
        });
        var popup = DG.popup({sprawling: true, maxWidth: 800}).setContent('' +
            '<div class="my-map-popup">' +
            '<span class="map-popup-title">Частное охранное предприятие "Дозор"</span>' +
            '<p class="elevation">2 этаж</p>' +
            '<p class="time-on-map"><i class="fa fa-clock-o" aria-hidden="true"></i><span class="time-text">круглосуточно</span></p>' +
            '<p class="map-phone"><i class="fa fa-phone" aria-hidden="true"></i><span>+7 (3522) 22‒79‒02 дежурная служба</span></p>' +
            '</div>'
        );
        //http://api.2gis.ru/doc/maps/ru/manual/popup/
        //маркер
        DG.marker([55.438974,65.365999]).addTo(map).bindPopup(popup.getContent());
        var options = {vectors: [
            "LINESTRING(65.365790 55.439110,65.365910 55.439010)",
        ]}
        //вход
        DG.entrance(options).addTo(map).show(true);
        //http://api.2gis.ru/doc/maps/ru/manual/dg-entrance/#entrance-options
    });

    $('.owl-carousel').owlCarousel(
        {
            loop: true, //Зацикливаем слайдер
            items: 1, //количество элементов в слайдере
            margin: 50, //Отступ от элемента справа в 50px
            nav: false, //Отключение навигации
            navText: ["<", ">"], //надписи на кнопках навигации
            autoplay: true, //Автозапуск слайдера
            smartSpeed: 1000, //Время движения слайда
            autoplayTimeout: 15000, //Время смены слайда
            autoplayHoverPause: true, //остановить при наведении мыши
            touchDrag: true, //перелистывание касанием на телефоне/планшете
            dotsContainer: '.owl-dots' //контейнер для навигационных точек
        }
    );
    $('.slider-prev').click( function() {
        console.log('+++');
        $('.owl-carousel').trigger('prev.owl.carousel',[300]);
    });
    $('.slider-next').click( function() {
        console.log('---');
        $('.owl-carousel').trigger('next.owl.carousel',[300]);
    });
});