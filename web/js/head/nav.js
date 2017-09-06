$(document).ready(function() {
    init();
});

/**
 * Set up necessary listeners and stuff for the page
 */
function init() {
    navbar_mouseover_setup();
}

/**
 * Set up the mouse-over for the navbar that allows it to function.
 */
function navbar_mouseover_setup() {
    $("#navbar > #nav > li").mouseover(function() {
        var type = $( this ).find("a").attr("data-subtype");
        $("#navbar  > #nav > li").each(function() {
            var content = $( this ).find("a").attr("data-subtype");
            if(content.toLowerCase() != type.toLowerCase()) {
                $( this ).removeClass("active");
            }
        });
        $( this ).addClass("active");
        $('[id$="-navbar"]').each(function() {
            var first = $( this ).attr("id").toString().split("-")[0];
            if(first == type) {
                $( this ).removeClass('navbar-hidden');
            } else {
                $( this ).addClass('navbar-hidden');
            }
        });
    });
}
