jQuery(document).ready(function($){

    var videoPreview = $('#ct_founder_pro_video_preview_container');
    var videoPreviewAndInput = videoPreview.add( $('.ct_founder_pro_video_input_container') );
    var youtubeControls = $('.ct_founder_pro_video_youtube_controls_container');

    // add fitvid to Post Video preview
    if( typeof $.fn.fitVids === 'function' ) {
        videoPreview.fitVids({
            customSelector: 'iframe[src*="dailymotion.com"], iframe[src*="slideshare.net"], iframe[src*="animoto.com"], iframe[src*="blip.tv"], iframe[src*="funnyordie.com"], iframe[src*="hulu.com"], iframe[src*="ted.com"], iframe[src*="vine.co"], iframe[src*="wordpress.tv"], iframe[src*="soundcloud.com"]'
        });
    }

    // if there is a video already, add "has-vid" class
    if( videoPreview.children('div').length > 0 ) {
        videoPreviewAndInput.addClass('has-vid');
    }

    // watch for a video selection
    $('#ct_founder_pro_video_url').on( 'input propertychange', oEmbedAjax );

    // ajax to load in video
    function oEmbedAjax() {

        // trigger loading icon when ajax starts
        $(document).bind("ajaxStart.mine", function() {
            videoPreview.addClass('ajax-loading');
        });
        // turn off loading icon when ajax stops
        $(document).bind("ajaxStop.mine", function() {
            videoPreview.removeClass('ajax-loading');

            // unind ajax to prevent other ajax on page from triggering loading indicator
            $(document).unbind(".mine");
        });

        // get the URL in the input
        var videoURL = $(this).val();

        // set up data object
        var data = {
            action: 'add_oembed',
            videoURL: videoURL,
            security: '<?php echo $ajax_nonce; ?>'
        };

        // post data received from PHP responde
        jQuery.post(ajaxurl, data, function(response) {

            // remove any videos already included
            videoPreview.children('div').remove();

            // if valid response
            if( response ){

                // add has-vid class for styling
                videoPreviewAndInput.addClass('has-vid');

                // add the video embed content
                videoPreview.append(response);

                // reapply fitvids to Post Video preview div
                videoPreview.fitVids({
                    customSelector: 'iframe[src*="dailymotion.com"], iframe[src*="slideshare.net"], iframe[src*="animoto.com"], iframe[src*="blip.tv"], iframe[src*="funnyordie.com"], iframe[src*="hulu.com"], iframe[src*="ted.com"], iframe[src*="vine.co"], iframe[src*="wordpress.tv"], iframe[src*="soundcloud.com"]'
                });

                // show youtube options if youtube video
                if( response.includes('youtube.com') || response.includes('youtu.be') ) {
                    youtubeControls.removeClass('hide');
                }
            }
            // else remove the has-vid class in case already had video
            else {
                videoPreviewAndInput.removeClass('has-vid');

                // hide youtube options
                youtubeControls.addClass('hide');
            }
        });
    }
});