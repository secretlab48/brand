const subItem = document.querySelectorAll('.sub-menu .menu-item');
const subMenu = document.querySelectorAll('.sub-menu');

subItem.forEach(item => {
    if (item.classList.contains('menu-item__label')) {
        item.parentElement.classList.add("JS-sub-menu--label");
    }
});

function setStickyMobileMenu() {
    if (window.pageYOffset >= document.querySelector('.o-header').offsetHeight) {
        document.querySelector('.o-header').classList.add("sticky");
    } else {
        document.querySelector('.o-header').classList.remove("sticky");
    }
}

if (document.getElementById("header-main") != null) {
    let windowWidth = window.innerWidth;

    window.addEventListener("resize", () => {
        windowWidth = window.innerWidth;

        if (windowWidth < 1199.98) {
            window.onscroll = function () {
                setStickyMobileMenu();
            };
        }
    });

    if (windowWidth < 1199.98) {
        window.onscroll = function () {
            setStickyMobileMenu();
        };
    }

    window.onload = function () {
        setStickyMobileMenu();
    };

}

$('.js-wpml-ls-item-toggle').on('click', function (e) {
    e.preventDefault();
    $('li.wpml-ls-current-language').toggleClass('is-open');
});

let linkOpen = $('.JS-link-menu--open');
let linkClose = $('.JS-link-menu--close');
let itemHasChildren = $('.menu-item-has-children');
let mainMenu = $('.c-main-menu-mobile');
let header = $('.o-header');

linkOpen.click(function () {
    mainMenu.addClass('is-open');
    $('body').css('overflow', 'hidden');
    header.removeClass('sticky');
});

linkClose.click(function () {
    mainMenu.removeClass('is-open');
    $('body').css('overflow', 'initial');
});

itemHasChildren.click(function (e) {
    $(this).toggleClass('is-active');
    if ($(e.target).parent().hasClass('menu-item-has-children')) {
        return false;
    }
});
