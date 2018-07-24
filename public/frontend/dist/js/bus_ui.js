$(document).ready(() => {
    let $navBar = $('.navigation-bar'); // nav bar

// Sticky navbar
function stickyNavbar() {
    // Header height
    let sticky = $('.header').height();

    // Offset y
    let y = $(window).scrollTop();

    if (y >= sticky) {
        $navBar.removeClass('relative');
        $navBar.addClass('sticky');
    } else {
        $navBar.removeClass('sticky');
        $navBar.addClass('relative');
    }
}

$(window).bind('scroll', stickyNavbar);

// Anchor offset
window.onhashchange = function() {
    window.scrollBy(0, - $('.navigation-bar').height());
};

// Anchor offset
$('.contents .highlights .grid .col#col3 .how-it-work .item.browse .link')
    .click(function () {
        let y = $('.contents .tickets').offset().top;

        $(window).scrollTop(y - $('.navigation-bar').height());
    });

// Toggle navbar
$('.navigation-bar .icon').click(function () {
    // Nav item
    let $item = $('.navigation-bar a.item');

    // Toggle
    if ($item.css('display') === 'none') {
        $item.css('display', 'block')
    } else {
        $item.css('display', 'none')
    }
});

// Mouse in navigation bar
$('.navigation-bar a').mouseover(function() {
    if (!$(this).hasClass('hover')) {
        $(this).addClass('hover');
    }
    if (!$(this).hasClass('active')) {
        $('.navigation-bar a.active').addClass('inactive');
    }
});

// Mouse out from navigation bar
$('.navigation-bar a').mouseout(function() {
    if ($(this).hasClass('hover')) {
        $(this).removeClass('hover');
    }

    let $inactive = $('.navigation-bar a.inactive');
    if ($inactive) {
        $inactive.removeClass('inactive');
    }
});

// Click on ticket arrow
function showDownTicket($panel, content, arrow) {
    $panel.addClass('full')
    $(content).collapse('show')

    let icon = $(arrow).children()[0]

    $(icon).addClass('fa-angle-up')
    $(icon).removeClass('fa-angle-down')
    $(arrow).addClass('up')
    $(arrow).removeClass('down')
    $panel.css('z-index', 2)
}

function hideUpTicket($panel, content, arrow) {
    $(content).collapse('hide')

    let icon = $(arrow).children()[0]

    $(icon).addClass('fa-angle-down')
    $(icon).removeClass('fa-angle-up')
    $(arrow).addClass('down')
    $(arrow).removeClass('up')
    $panel.css('z-index', 1)
}

$('.contents .highlights .grid .col .panel .arrow').click(function() {
    let $panel = $(this).parent();
    let content = $panel.children()[2];

    if ($(this).hasClass('down')) {
        // Narrow other panels
        let arrowsUp = $('.contents .highlights .grid .col .panel .arrow.up');
        for (let i = 0; i < arrowsUp.length; i++) {
            let $panel = $(arrowsUp[i]).parent();
            let content = $panel.children()[2];

            hideUpTicket($panel, content, arrowsUp[i])
        }

        // Show down
        showDownTicket($panel, content, this)
    } else {
        hideUpTicket($panel, content, this)
    }
});

$('.contents .highlights .grid .col .panel .content').on('hidden.bs.collapse', function() {
    // Height limit
    $(this).parent().removeClass('full');

    // Remove margin bottom
    $('.contents .highlights').css('margin-bottom', `0px`)
});

$('.contents .highlights .grid .col .panel.row3 .content').on('shown.bs.collapse', function() {
    if (window.innerWidth > 768) {
        let h = $(this).height(); // additional height

        // Add margin bottom
        $('.contents .highlights').css('margin-bottom', `${h}px`)
    }
});

// Show popup background
function showPopupBackground() {
    $('.popup-background').show();
}

// Hide popup background
function hidePopupBackground() {
    $('.popup-background').hide();
}

// Show attraction popup
$('.contents .attractions .list .list-item .see-more button').click(function() {
    let y = $('.contents .attractions').offset().top;

    // Show popup background
    showPopupBackground();

    // Show popup
    showAttractionPopup();

    // Disable scroll on background
    disableScrollOnBackground(y);
});

// Close attraction popup
$('.attraction-popup .close').click(function () {
    // Hide background
    hidePopupBackground();

    // Hide popup
    hideAttractionPopup();

    // Enable scroll on background
    enableScrollOnBackground()
});

// Show attraction popup
function showAttractionPopup(y) {
    $('.attraction-popup').show();
}

// Hide attraction popup
function hideAttractionPopup() {
    $('.attraction-popup').hide();
}

// Disable scroll on background
function disableScrollOnBackground(y) {
    $('.main').addClass('no-scroll');
    $('.main').css('top', `${-y}px`);
    $('.navigation-bar').removeClass('sticky');
    $('.navigation-bar').addClass('relative');
    $(window).unbind('scroll', stickyNavbar);
}

// Enable scroll on background
function enableScrollOnBackground() {
    $('.main').removeClass('no-scroll');

    let y = parseInt($('.main').css('top'));

    $('.main').css('top', `0`);
    $(window).scrollTop(-y);
    $('.navigation-bar').addClass('sticky');
    $('.navigation-bar').removeClass('relative');
    $(window).bind('scroll', stickyNavbar);
}

// Click see more on ticket
$('.contents .tickets .list .list-item .more-info').click(function() {
    let y = $('.contents .tickets').offset().top;

    // Show popup background
    showPopupBackground();

    // Show popup
    showTicketPopup();

    // Disable scroll on background
    disableScrollOnBackground(y);
});

// Close ticket popup
$('.ticket-popup .close').click(function () {
    // Hide background
    hidePopupBackground();

    // Hide popup
    hideTicketPopup();

    // Enable scroll on background
    enableScrollOnBackground()
});

// Show ticket popup
function showTicketPopup() {
    $('.ticket-popup').show();
}

// Hide ticket popup
function hideTicketPopup() {
    $('.ticket-popup').hide();
}
});
