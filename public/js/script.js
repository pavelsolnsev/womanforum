$(function () {
    /* Inits */
    initFormScroll();
    initFormVersionScroll();
    initScroll();
    initLazy();
    initTriggersBox();
    openMenu();
    initMore();
    initPrice();
    initSliderPl();
    // initSliderPr();
    initSliderSr();
    initSliderBr();
    initPopupSpeaker();
    initScrollHeader();

    window.addEventListener('resize', () => {

    });
    function initFormScroll() {
        $(".button-link").click(function () {
            $('html, body').animate({
                scrollTop: $("#price").offset().top
            }, 1000);
            $.fancybox.close();
        });
    }
    function initFormVersionScroll() {
        $(".button-link-version2").click(function () {
            setTimeout(function () { let gets = window.location.search; location.href = 'price/' + gets; }, 0);
        });
        $(".button-link-version3").click(function () {
            setTimeout(function () { let gets = window.location.search; location.href = 'pricesale/' + gets; }, 0);
        });
        $(".button-link-version4").click(function () {
            setTimeout(function () { let gets = window.location.search; location.href = 'thanks/' + gets; }, 0);
        });
    }
    /* Scroll */
    function initScroll() {
        if (!$('.scroll').length) return;

        $(document).on('click scroll.init', '.scroll', function (event) {
            event.preventDefault();
            $.fancybox.close();

            var
                hrefId = $(this).attr('href') || $(this).data('href'),
                posTop = $(hrefId).offset().top - $('.header').height() + 0.5
                ;
            $('html, body').animate({ scrollTop: posTop }, 1000);
        });
    }

    /* Lazy */
    function initLazy() {

        let
            lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
            active = false,
            threshold = 200
            ;

        const lazyLoad = function (e) {
            if (active === false) {
                active = true;

                setTimeout(function () {
                    lazyArr.forEach(function (lazyObj) {
                        if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

                            if (lazyObj.dataset.src) {
                                let
                                    img = new Image(),
                                    src = lazyObj.dataset.src
                                    ;
                                img.src = src;
                                img.onload = function () {
                                    if (!!lazyObj.parent) {
                                        lazyObj.parent.replaceChild(img, lazyObj);
                                    } else {
                                        lazyObj.src = src;
                                    }
                                }
                                lazyObj.removeAttribute('data-src');
                            }

                            if (lazyObj.dataset.srcset) {
                                lazyObj.srcset = lazyObj.dataset.srcset;
                                lazyObj.removeAttribute('data-srcset');
                            }

                            lazyObj.classList.remove('lazy');
                            lazyObj.classList.add('lazy-loaded');

                            lazyArr = lazyArr.filter(function (obj) {
                                return obj !== lazyObj;
                            });

                            if (lazyArr.length === 0) {
                                document.removeEventListener('scroll', lazyLoad);
                                window.removeEventListener('resize', lazyLoad);
                                window.removeEventListener('orientationchange', lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        lazyLoad();

        document.addEventListener('scroll', lazyLoad);
        window.addEventListener('resize', lazyLoad);
        window.addEventListener('orientationchange', lazyLoad);
    }


    function initTriggersBox() {
        let root = $('.triggers-box__inner');
        if (!root.length) return;

        let elements = root.html();
        root.append(elements);

        root.marquee({
            duration: 33000,
            duplicated: true,
            direction: 'left'
        });
    }

    function openMenu() {
        let menuBtn = $('.ham')
        let menu = $('#header-links')

        menuBtn.on('click', function () {
            if (menuBtn.hasClass('active')) {
                menuBtn.removeClass('active')
                $.fancybox.close();
            } else {
                menuBtn.addClass('active')
                // $('body').addClass('overflow')
                $.fancybox.open({
                    src: '#mobile-menu',
                    baseClass: 'popup-mobile-menu',
                    // smallBtn : false,
                    beforeClose: function () {
                        menuBtn.removeClass('active');
                    }
                });
            }
        })
    }


    /* Показать еще */
    function initMore() {
        $('[data-more-btn]').on('init.more click', function (event) {
            var
                $container = $('[data-more-options]', $(this).parent()),
                options = {},
                visible = 0,
                window_width = $(window).width(),
                $items
                ;
            options = $container.data('more-options') || {}

            if (event.type == 'init' && window_width > 991) {
                visible = options.init;
            } else if (event.type == 'init' && window_width > 767 && window_width <= 991) {
                visible = options.inittablet;
            } else if (event.type == 'init' && window_width <= 767) {
                visible = options.initmobile;
            } else if (window_width > 991) {
                visible = options.desktop;
            } else if (window_width > 767 && window_width <= 991) {
                visible = options.tablet;
            } else if (window_width <= 767) {
                visible = options.mobile;
            }
            $items = $(options.target + '[data-more-hidden]', $container);
            $items.slice(0, visible).removeAttr('data-more-hidden');
            $('html, body')
                .animate({ scrollTop: '+=1' }, 0)
                .animate({ scrollTop: '-=1' }, 0)
                ;
            if ($items.length - visible <= 0) {
                $(this).addClass('d-none');
            }
        })
            .trigger('init.more');
    }


    function initPrice() {
        let
            $popup = $('.popup-price'),
            $popup_form_html = $('form', $popup).parent().html();

        $(document).on('click', '[js-payment]', function (e) {
            let
                $card = $(this),
                productName = $('.price-card__name', $card).text() || '',
                productCost = $('.price-card__price', $card).html(),
                productDataId = $card.data('productid') || '',
                is_recurrent = $card.data('is-recurrent') || '',
                quote_id = $card.data('quote_id') || '',
                unit = $card.data('unit') || '',
                type = $card.data('type') || '',
                land = $card.data('land') || '',
                event_id = $card.data('event-id') || '',
                form_type = $card.data('form-type') || ''
                ;

            $('.popup-price__inner', $popup).html($popup_form_html);
            $('[js-package]', $popup).text(productName);
            /* $('[js-cost]', $popup).html(productCost); */
            $('[name="product_id"]', $popup).val(productDataId);
            $('[name="quote_id"]', $popup).val(quote_id);
            if (unit) { $('[name="unit"]', $popup).val(unit); }
            if (type) { $('[name="type"]', $popup).val(type); }
            if (land) { $('[name="land"]', $popup).val(land); }
            if (event_id) { $('[name="event_id"]', $popup).val(event_id); }
            if (form_type) { $('[name="form"]', $popup).val(form_type); }

            if (localStorage.name) { $('.popup-price input[name="name"]').val('name'); }
            if (localStorage.phone) { $('.popup-price input[name="phone"]').val('+71000000000'); }
            if (localStorage.email) { $('.popup-price input[name="email"]').val('email@email.ru'); }

            if (sessionStorage.getItem('mergelead') != '' && sessionStorage.getItem('mergelead') != undefined) {
                $('.popup-price .form .form__wrapper').append('<input type="hidden" name="mergelead" value="' + sessionStorage.getItem('mergelead') + '">');
            }

            LanderJS.init(); // Реинициализация лендера после каждого сброса формы

            $.fancybox.open({
                src: $(this).attr('href'),
                "smallBtn": false,
                "toolbar": false,
                afterClose: function () {
                    //console.log($popup_clone.html());
                },
                beforeShow: function () {
                    if (!localStorage.name && !localStorage.phone && !localStorage.email) { return }

                    $('.popup-price').css('opacity', '0');

                },
                afterShow: function (instance, current) {

                    if (!localStorage.name && !localStorage.phone && !localStorage.email) { return }

                    $('.popup-price form').submit();

                    setTimeout(() => {
                        $('.popup-price').css('opacity', '1');
                    }, 1500);
                }
            })
        })
    };

    function initSliderPl() {

        $platform_slider = $('.platform__list');
        settingsPl = {
            mobileFirst: true,
            responsive: [
                {
                    breakpoint: 1199,
                    settings: "unslick"
                }
            ]
        }


        $platform_slider.slick(settingsPl);

        $(window).on('resize', function () {
            if (!$platform_slider.hasClass('slick-initialized')) {
                return $platform_slider.slick(settingsPl);
            }
        });
    }

    function initSliderBr() {

        $broadcast_slider = $('.broadcast__info');
        settingsBr = {
            mobileFirst: true,
            responsive: [
                {
                    breakpoint: 1199,
                    settings: "unslick"
                }
            ]
        }


        $broadcast_slider.slick(settingsBr);

        $(window).on('resize', function () {
            if (!$broadcast_slider.hasClass('slick-initialized')) {
                return $broadcast_slider.slick(settingsBr);
            }
        });
    }

    // function initSliderPr() {
    //     /* Slick needs no get Reinitialized on window Resize after it was destroyed */
    //     $(window).on('load resize orientationchange', function () {
    //         $('.price__box').each(function () {
    //             var $carousel = $(this);
    //             /* Initializes a slick carousel only on mobile screens */
    //             // slick on mobile
    //             if ($(window).width() < 767) {
    //                 if ($carousel.hasClass('slick-initialized')) {
    //                     $carousel.slick('unslick');
    //                 }
    //             }
    //             else if ($(window).width() > 1199) {
    //                 if ($carousel.hasClass('slick-initialized')) {
    //                     $carousel.slick('unslick');
    //                 }
    //             }
    //             else {
    //                 if (!$carousel.hasClass('slick-initialized')) {
    //                     $carousel.slick({
    //                         appendArrows: $('.price__arrows'),
    //                         adaptiveHeight: true
    //                     });
    //                 }
    //             }
    //         });
    //     });
    // }

    function initSliderSr() {
        $('.services__slider').slick({
            appendArrows: $('.services__arrows'),
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    }

    function initPopupSpeaker() {

        $('[href="#popup-speaker"]').on('click', function () {
            var
                $popup = $('#popup-speaker'),
                $card = $(this),
                image = $('[data-image]', $card).html() || '',
                name = $('[data-name]', $card).html() || '',
                post = $('[data-post]', $card).html() || '',
                descr = $('[data-descr]', $card).html() || ''
                ;
            $('[data-image]', $popup).html(image);
            $('[data-name]', $popup).html(name);
            $('[data-post]', $popup).html(post);
            $('[data-descr]', $popup).html(descr);
        });
    }

    function initScrollHeader() {
        const header = $('.header');
        const scroll = $(window).scrollTop();
        if (scroll >= 100) {
            header.addClass('active');

        } else {
            header.removeClass('active');
        }
    }
    /* Execution of functions */

    $(window).scroll(() => initScrollHeader())




});



