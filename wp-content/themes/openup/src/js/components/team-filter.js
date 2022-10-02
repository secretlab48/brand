var mediaSwitcher = $('.JS-filter-media');
if ($(mediaSwitcher).length !== 0) {
    var mediaSwitcherMedia = $(mediaSwitcher).find('.JS-filter--media');
    var mediaSwitcherBlog = $(mediaSwitcher).find('.JS-filter--blog');
    var mediaSwitcherContainerMedia = $('.JS-content-media');
    var mediaSwitcherContainerBlog = $('.JS-content-blog');


    $(mediaSwitcherMedia).on('click', function () {
        if (!$(this).hasClass('active')) {
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
            $(mediaSwitcherContainerBlog).removeClass('active');
            $(mediaSwitcherContainerMedia).addClass('active');
        }
    });

    $(mediaSwitcherBlog).on('click', function () {
        if (!$(this).hasClass('active')) {
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
            $(mediaSwitcherContainerMedia).removeClass('active');
            $(mediaSwitcherContainerBlog).addClass('active');
        }
    });
}

