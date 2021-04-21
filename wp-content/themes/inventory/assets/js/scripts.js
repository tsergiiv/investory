$(document).ready(function(){
    //tabs
    $('.nav-tabs a').click(function(e){
        let tabId = $(this).attr('href');
        $('.nav-tabs a').removeClass('active');
        $(this).addClass('active');
        $('.section-tab.fade').removeClass('fade').fadeOut(0);
        $(tabId).addClass('fade').fadeIn(300);
        e.preventDefault();
    });

    //text accordeons
    $('.plus').click(function(){
        let thisParent = $(this).parents('.leader-info__description');
        if(thisParent.hasClass('active')) {
            thisParent.removeClass('active');
            thisParent.find('.leader-description__text').fadeOut(0);
        } else {
            $('.leader-info__description').removeClass('active');
            $('.leader-description__text').fadeOut(0);
            thisParent.addClass('active');
            thisParent.find('.leader-description__text').animate({height: 'toggle'}, 300);
        }
    });

    //mobile menu
    $('header .menu').click(function(){
        $('header nav').toggleClass('active');
    });
    $('footer .menu').click(function(){
        $('.menu-nav').toggleClass('active');
    });

    //scroll mappings
    $('.scrollbar-map-light').scrollbar({
        "onInit": function(){
            this.container.find('.scroll-element_outer').appendTo(this.wrapper);
        },
        "onUpdate": function(container){
            var s = getInscribedArea(140, 140, this.scrollx.size, this.scrolly.size);
            this.scrolly.scroll.height(s.h);
            this.scrollx.scroll.width(s.w);
        },
        "scrollx": $('.scrollbar-map-light .scroll-element_outer'),
        "scrolly": $('.scrollbar-map-light .scroll-element_outer'),
        "stepScrolling": false
    });
    $('.scrollbar-map-dark').scrollbar({
        "onInit": function(){
            this.container.find('.scroll-element_outer').appendTo(this.wrapper);
        },
        "onUpdate": function(container){
            var s = getInscribedArea(140, 140, this.scrollx.size, this.scrolly.size);
            this.scrolly.scroll.height(s.h);
            this.scrollx.scroll.width(s.w);
        },
        "scrollx": $('.scrollbar-map-dark .scroll-element_outer'),
        "scrolly": $('.scrollbar-map-dark .scroll-element_outer'),
        "stepScrolling": false
    });
    $('.scrollbar-map-dark-alt').scrollbar({
        "onInit": function(){
            this.container.find('.scroll-element_outer').appendTo(this.wrapper);
        },
        "onUpdate": function(container){
            var s = getInscribedArea(140, 140, this.scrollx.size, this.scrolly.size);
            this.scrolly.scroll.height(s.h);
            this.scrollx.scroll.width(s.w);
        },
        "scrollx": $('.scrollbar-map-dark-alt .scroll-element_outer'),
        "scrolly": $('.scrollbar-map-dark-alt .scroll-element_outer'),
        "stepScrolling": false
    });
    $('.scrollbar-map-light-alt').scrollbar({
        "onInit": function(){
            this.container.find('.scroll-element_outer').appendTo(this.wrapper);
        },
        "onUpdate": function(container){
            var s = getInscribedArea(140, 140, this.scrollx.size, this.scrolly.size);
            this.scrolly.scroll.height(s.h);
            this.scrollx.scroll.width(s.w);
        },
        "scrollx": $('.scrollbar-map-light-alt .scroll-element_outer'),
        "scrolly": $('.scrollbar-map-light-alt .scroll-element_outer'),
        "stepScrolling": false
    });
    $('.scrollbar-map-market').scrollbar({
        "onInit": function(){
            this.container.find('.scroll-element_outer').appendTo(this.wrapper);
        },
        "onUpdate": function(container){
            var s = getInscribedArea(140, 140, this.scrollx.size, this.scrolly.size);
            this.scrolly.scroll.height(s.h);
            this.scrollx.scroll.width(s.w);
        },
        "scrollx": $('.scrollbar-map-market .scroll-element_outer'),
        "scrolly": $('.scrollbar-map-market .scroll-element_outer'),
        "stepScrolling": false
    });
    $('.scrollbar-map-global').scrollbar({
        "onInit": function(){
            this.container.find('.scroll-element_outer').appendTo(this.wrapper);
        },
        "onUpdate": function(container){
            var s = getInscribedArea(140, 140, this.scrollx.size, this.scrolly.size);
            this.scrolly.scroll.height(s.h);
            this.scrollx.scroll.width(s.w);
        },
        "scrollx": $('.scrollbar-map-global .scroll-element_outer'),
        "scrolly": $('.scrollbar-map-global .scroll-element_outer'),
        "stepScrolling": false
    });
    $('.architecture-items-overflow').scrollbar({
        "onInit": function(){
            this.container.find('.scroll-element_outer').appendTo(this.wrapper);
        },
        "onUpdate": function(container){
            var s = getInscribedArea(140, 140, this.scrollx.size, this.scrolly.size);
            this.scrolly.scroll.height(s.h);
            this.scrollx.scroll.width(s.w);
        },
        "scrollx": $('.architecture-items-overflow .scroll-element_outer'),
        "scrolly": $('.architecture-items-overflow .scroll-element_outer'),
        "stepScrolling": false
    });

    //modals
    $('body').on('click', '.modal-toggle', function(e){
        let modal = $(this).attr('data-toggle');
        $(document).find('#' + modal).fadeIn(300);
        $('body').addClass('modal-open');
        $('<div class="backdrop"></div>').hide().appendTo('body').fadeIn(300);
        e.preventDefault();
    });
    $('body').on('click', '.backdrop', function(){
        $('body').removeClass('modal-open');
        $(document).find('.modal').fadeOut(300);
        $(this).fadeOut(300, function(){$(this).remove();});
    });
    $('body').on('click', '.modal-close', function(e){
        $('body').removeClass('modal-open');
        $('.backdrop').fadeOut(300);
        $(this).parents('.modal').fadeOut(300);
        e.preventDefault();
    });

    //scheme hover
    $('.architecture-item').hover(function(){
        $(this).parent().toggleClass('active');
    });

    //favicon theme changer
    if (!window.matchMedia)
        return;

    let current = $('head > link[rel="icon"][media]');
    $.each(current, function(i, icon) {
        let match = window.matchMedia(icon.media);
        function swap() {
            if (match.matches) {
                current.remove();
                current = $(icon).appendTo('head');
            }
        }
        match.addEventListener('change', swap);
        swap();
    });

    //scroll to top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 900) {
            $('.scroll-top').fadeIn(300);
        } else {
            $('.scroll-top').fadeOut(300);
        }
    });
    $('.scroll-top').click(function() {
        $('html, body').animate({scrollTop: 0}, 500);
    });

    //section checkpoints
    setTimeout(function(){
        $('.section-title, header').addClass('active');
    }, 500);

    $(window).scroll(function() {
        $('section, footer, .table-file').each(function(){
            let hT = $(this).offset().top,
                hH = $(this).outerHeight(),
                wH = $(window).height(),
                wS = $(window).scrollTop();
            if (wS > (hT+hH-wH)){
                $(this).addClass('active');
                console.log(hT);
            }
        });
    });
});

//responsive carousel
$(window).on('load resize', function(){
    if($(window).width() < 1200) {
        $('.owl-carousel').trigger('destroy.owl.carousel');
        $('.projects-list').removeClass('owl-carousel');
    } else {
        $('.projects-list').addClass('owl-carousel');
        $('.owl-carousel').owlCarousel({
            items: 3,
            nav: true,
            margin: 16,
            dots: false,
            scrollBy: 1,
            navText: ['', ''],
            responsive: {
                1680: {
                    margin: 48
                }
            }
        });
    }
});

//scroll mappings
function getInscribedArea(oW, oH, iW, iH, R){
    if(!R && iW < oW && iH < oH){
        return {
            "h": iH,
            "w": iW
        };
    }
    if((oW / oH) > (iW / iH)){
        return {
            "h": oH,
            "w": Math.round(oH * iW / iH)
        }
    } else {
        return {
            "h": Math.round(oW * iH / iW),
            "w": oW
        };
    }
}
