const speed = 1000;

if (document.querySelectorAll('#themas .JS-filter-item a') != null) {

    let url = window.location.href;
    let linksFilter = document.querySelectorAll('#themas .JS-filter-item a');
    let themasHrefArr = [];
    const reg = /themas=/gi;
    const countPostTag = (url.search("post/tag/") + 1);

    let newUrl = url.split(reg).pop();

    linksFilter.forEach(item => {
        themasHrefArr.push(item.getAttribute('href'));
    });

    let newThemasHrefArr = themasHrefArr.map(item => {
        return item.split(reg).pop();
    });

    let checkMatchedUrl = newThemasHrefArr.some(item => item == newUrl);

    if ((checkMatchedUrl && newUrl != url) || countPostTag != 0) {
        $('html, body').animate({scrollTop: $('.s-blog-posts').offset().top}, speed);
    }
}

var blogFilter = $('.JS-blog-filter');
if ($(blogFilter).length !== 0) {
    var blogFilterItem = $('.JS-filter-item');
    var scrollActive = localStorage.getItem('scroll');
    var scrollingTo = localStorage.getItem('top');

    if (scrollActive) {
        $('html, body').animate({scrollTop: $('.s-blog-posts').offset().top}, speed);
        localStorage.setItem('scroll', '');
    }

    $(blogFilterItem).each(function () {
        $(this).click(function () {
            if (!$(this).hasClass('JS-filter-item--job')) {
                var scrollTo = $(blogFilter).offset().top;
                localStorage.setItem('scroll', true);
                localStorage.setItem('top', scrollTo);
            }
        });
    });

    $(blogFilter).each(function () {
        var blogFilterContainer = $(this).find('.c-blog-filter__list-wrap');
        var blogFilterMain = $(this).find('.c-blog-filter__main');
        var blogFilterContainerWidth = $(blogFilterContainer).outerWidth();
        var blogFilterWidth = $(this).outerWidth();
        var blogTeamFilterItem = $('.JS-team-filter-item');

        if (blogFilterWidth <= blogFilterContainerWidth) {
            $(this).css('min-width', blogFilterContainerWidth);
            $(blogFilterContainer).css('width', '100%');
        } else {
            $(blogFilterContainer).css('width', '100%');
        }
        if (!$(this).hasClass('JS-blog-filter--teams') && !$(this).hasClass('JS-blog-filter--spaces')) {

            $(blogFilterMain).click(function () {
                $(this).parent().toggleClass('active');
                $(this).parents('.swiper-slide').siblings().find('.JS-blog-filter').removeClass('active');
                $(this).parents('.swiper-slide').siblings().find('.c-blog-filter__list-wrap').slideUp(300);

                if ($(this).parents('.swiper-slide').find('.JS-blog-filter').hasClass('active')) {
                    $(blogFilterContainer).slideDown(300);
                } else {
                    $(blogFilterContainer).slideUp(300);
                }
            });
        } else {
            if (!$(this).hasClass('JS-blog-filter--spaces')) {
                blogFilterMain.click(function () {
                    blogFilter.toggleClass('active');
                    blogFilterContainer.slideToggle(300);
                });

                blogTeamFilterItem.click(function () {
                    blogFilter.toggleClass('active');
                    blogFilterContainer.slideToggle(300);
                });
            }

        }

        $('.JS-filter-item--job').click(function () {

            $(blogFilter).removeClass('active');
            $(blogFilterContainer).slideUp(300);
        });

        $(document).on('click', function (e) {
            if (!$(e.target).closest(blogFilter).length) {
                $(blogFilter).removeClass('active');
                $(blogFilterContainer).slideUp(300);
            }
            e.stopPropagation();
        });
    });
}

$('.JS-blog-filter--spaces').on('click', function (e) {
    $(e.target).parents('.JS-blog-filter--spaces').toggleClass('active');
    $(e.target).parents('.JS-blog-filter--spaces').find('.c-blog-filter__list-wrap').slideToggle(300);
});