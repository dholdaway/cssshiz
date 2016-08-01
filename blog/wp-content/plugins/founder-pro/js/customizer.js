jQuery(document).ready(function($) {

    var panel = $('html', window.parent.document);

    addProlabel();

    // label Founder Pro customizer sections
    function addProlabel() {

        // to prevent running more than once per session
        if (!panel.hasClass('pro-labels')) {

            // sections/panels
            var sections = ['header_image', 'colors', 'fonts', 'featured_image_size', 'display', 'footer_text'];

            // default beginning of selector for a section
            var sectionStart = '#accordion-section-ct_founder_pro_';

            // default beginning of selector for a section
            var panelStart = '#accordion-panel-ct_founder_pro_';

            // label HTML
            var proLabel = '<span class="pro-label">PRO</span>';

            // for each section, add the PRO label
            $.each(sections, function (key, value) {
                if (value == 'colors') {
                    panel.find( panelStart + value + '_panel').children('h3').append(proLabel);
                }
                else {
                    panel.find( sectionStart + value).children('h3').append(proLabel);
                }
            });
            panel.addClass('pro-labels');
        }
    }
});
