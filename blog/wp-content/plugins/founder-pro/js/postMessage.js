( function( $ ) {

    var panel = $('html', window.parent.document);
    var body = $('body');
    var overflowContainer = $('#overflow-container');
    var headerImage = $('#header-image');

    // header image height
    wp.customize( 'header_image_height', function( value ) {
        value.bind( function( to ) {

            var headerType = panel.find('#customize-control-header_image_height_type').find('input:checked').val();

            if( headerType == 'fixed' ) {
                headerImage.css( {
                    'height'         : to * 5,
                    'padding-bottom' : 0
                });
            } else {
                headerImage.css( {
                    'padding-bottom' : to + '%',
                    'height'         : 0
                });
            }
            if ( body.hasClass('parallax') ) {
                var height = headerImage.outerHeight();
                overflowContainer.css('margin-top', height + 'px');
            }
        } );
    } );

    // Footer Text
    wp.customize( 'footer_text', function( value ) {
        value.bind( function( to ) {
            if ( to == '' ) {
                to = '<a target="_blank" href="https://www.competethemes.com/founder/">Founder WordPress Theme</a> by Compete Themes.';
            }
            $('.site-footer').children('span').html(to);
        });
    } );

} )( jQuery );