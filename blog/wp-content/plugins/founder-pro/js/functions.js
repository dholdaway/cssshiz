jQuery(document).ready(function($) {

    var body = $('body');
    var overflowContainer = $('#overflow-container');
    var main = $('#main');
    var maxWidth = $('#max-width');
    var toggleSecondaryNavigation = $('#toggle-secondary-navigation');
    var menuSecondary = $('#menu-secondary');
    var menuFooter = $('#menu-footer');
    var menuFooterItems = $('#menu-footer-items');
    var headerImage = $('#header-image');

    centerFooterDropdownMenus();
    headerImageParallax();
    templateImageResize();

    $(window).resize(function(){
        headerImageParallax();
        templateImageResize();
    });

    // add fitVids to featured videos
    $('.featured-video').fitVids({
        customSelector: 'iframe[src*="dailymotion.com"], iframe[src*="slideshare.net"], iframe[src*="animoto.com"], iframe[src*="blip.tv"], iframe[src*="funnyordie.com"], iframe[src*="hulu.com"], iframe[src*="ted.com"], iframe[src*="vine.co"], iframe[src*="wordpress.tv"], iframe[src*="soundcloud.com"]'
    });

    // Jetpack infinite scroll event that reloads posts. Reapply fitvids to new featured videos
    $( document.body ).on( 'post-load', function () {

        $('.featured-video').fitVids({
            customSelector: 'iframe[src*="dailymotion.com"], iframe[src*="slideshare.net"], iframe[src*="animoto.com"], iframe[src*="blip.tv"], iframe[src*="funnyordie.com"], iframe[src*="hulu.com"], iframe[src*="ted.com"], iframe[src*="vine.co"], iframe[src*="wordpress.tv"], iframe[src*="soundcloud.com"]'
        });
    } );

    toggleSecondaryNavigation.on('click', openSecondaryMenu);

    function openSecondaryMenu() {

        if( menuSecondary.hasClass('open') ) {
            menuSecondary.removeClass('open');
            $(this).removeClass('open');

            // change screen reader text
            $(this).children('span').text(objectL10n.openMenu);

            // change aria text
            $(this).attr('aria-expanded', 'false');

        } else {
            menuSecondary.addClass('open');
            $(this).addClass('open');

            // change screen reader text
            $(this).children('span').text(objectL10n.closeMenu);

            // change aria text
            $(this).attr('aria-expanded', 'true');
        }
    }
    // centers footer 2nd tier menus with their parent menu items
    function centerFooterDropdownMenus() {

        if( window.innerWidth > 699 && menuFooter.length > 0 ) {

            var parentMenuItemsTier2 = menuFooterItems.children('.menu-item-has-children');

            parentMenuItemsTier2.each(function(){
                var parentWidth = $(this).width();
                var childWidth = $(this).children('ul').outerWidth();
                if( childWidth > parentWidth ) {
                    var difference = childWidth - parentWidth;
                    difference = difference / 2;
                    if( body.hasClass('rtl') ) {
                        $(this).children('ul').css('right', -difference);
                    } else {
                        $(this).children('ul').css('left', -difference);
                    }
                }
            });
        } else {
            if( body.hasClass('rtl') ) {
                menuFooterItems.find('ul').css({
                    'right': '',
                    'top' : ''
                });
            } else {
                menuFooterItems.find('ul').css({
                    'left': '',
                    'top' : ''
                });
            }
        }
    }

    function headerImageParallax() {

        if ( body.hasClass('parallax') ) {
            var height = headerImage.outerHeight();
            overflowContainer.css('margin-top', height + 'px');
        }
    }

    function templateImageResize() {

        if ( body.hasClass('full-width-image-post') || body.hasClass('full-width-image-page') || body.hasClass('title-overlay-post') || body.hasClass('title-overlay-page') ) {

            if ( window.innerWidth > 1400 ) {

                var left = parseInt( main.css('padding-left') ) + parseInt( maxWidth.offset().left );

                var multiplier = 2;

                // get classes on post/page element
                var classList = $('.entry').attr('class').split(/\s+/);

                // loop
                for (var i = 0; i < classList.length; i++) {

                    // find ratio class
                    if (classList[i].indexOf('ratio') > -1 ) {

                        // extract the aspect ratio
                        var firstNumber = classList[i].substring(classList[i].lastIndexOf("-")-1, classList[i].lastIndexOf("-"));
                        var secondNumber = classList[i].substring(classList[i].lastIndexOf("-")+1, classList[i].lastIndexOf(""));

                        multiplier = firstNumber/secondNumber;
                    }
                }

                var height = window.innerWidth / multiplier;

                $('.featured-image').css({
                    'width': window.innerWidth + 'px',
                    'left':  -left + 'px',
                    'height': height + 'px',
                    'padding-bottom': 0
                });
            } else {

                // remove CSS in case resized under 1400px
                $('.featured-image').attr('style', '');
            }
        }
    }
});