var faqCategory = $('.JS-faq-category');

if ($(faqCategory).length !== 0) {
    var scrollActive = localStorage.getItem('scroll');
    var scrollingTo = localStorage.getItem('top');

    if (scrollActive) {
        if ($(this).hasClass('JS-faq-category--section')) {
            console.log('true');
            $('body,html').stop().animate({scrollTop: scrollingTo - 80}, 0);
        } else {
            $('body,html').stop().animate({scrollTop: scrollingTo - 80}, 0);
        }
        localStorage.setItem('scroll', '');
    }

    $(faqCategory).each(function () {
        $(this).click(function () {
            var scrollTo = $(this).offset().top;
            localStorage.setItem('scroll', true);
            localStorage.setItem('top', scrollTo);
        })
    })
}