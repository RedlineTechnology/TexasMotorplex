jQuery(document).ready( function($){
    var $accordionTabs = $('.accordion-tabs');

    $accordionTabs.accordionTabs({
        // Plugin options
        mediaQuery: '(min-width: 768px)' // Set when tabs should be used instead of accordion
    }, {
        // jQuery UI Accordion options <http://api.jqueryui.com/accordion/>
        header: 'h1', // Specify the heading level you used (required)
        heightStyle: 'content'
    }, {
        // jQuery UI Tabs options <http://api.jqueryui.com/tabs/>
        show: {
            effect: 'fade'
        }
    });
});
