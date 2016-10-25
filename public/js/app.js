/*
    Message Notification Success =>
    jQuery('#msg-text').text("Here's an example of message");
    jQuery('#msg-success').show();

    Error Message Notification =>
    jQuery('#error-text').text("Here's an example of error message");
    jQuery('#msg-error').show();
*/

var as = {};

as.toggleSidebar = function () {

     "use strict";

    if (window.innerWidth > 768) {
        jQuery("body").toggleClass('sidebar-collapse');
    } else {
        jQuery("body").toggleClass('sidebar-open');
    }

    return false;
};

as.hideNotifications = function () {
    
     "use strict";

    jQuery(".alert-notification").slideUp(600, function () {
        jQuery(this).remove();
    });
};

as.adjustPage = function () {
    /**
     * Page top offset, used for setting appropriate top offset
     * for page content when we are resizing the page (or open it on small screen).
     * @type {number}
     */
    "use strict";
 
    var topOffset = 0;

    // Current width of our viewport.
    var width = window.innerWidth > 0 ? window.innerWidth : screen.width;

    // If width is smaller than 768px, we will adjust page top offset.
    if (width < 768) {
        topOffset = 100;
    }

    // Current viewport height
    var height = window.innerHeight > 0 ? window.innerHeight : screen.height;

    height = height - topOffset;

    if (height < 1) {
        height = 1;
    }

    jQuery("#page-wrapper").css("margin-top", (topOffset) + "px");

    if (height > topOffset) {
        jQuery("#page-wrapper").css("min-height", (height) + "px");
    }
};

as.init = function () {

     "use strict";

    jQuery(window).bind("load resize", as.adjustPage);

    if (jQuery("#side-menu").length) {
        jQuery("#side-menu").metisMenu({
            toggle: false,
            activeClass: 'active'
        });
    }

    jQuery("#sidebar-toggle").click(as.toggleSidebar);

    jQuery('[data-toggle="tooltip"]').tooltip();
    jQuery('[data-toggle="popover"]').popover();

    jQuery(".alert-notification .close").click(as.hideNotifications);

    setTimeout(as.hideNotifications, 5000);

    jQuery("a[data-toggle=loader], button[data-toggle=loader]").click(function () {
        if (jQuery(this).parents('form').valid()) {
            as.btn.loading(jQuery(this), jQuery(this).data('loading-text'));
            jQuery(this).parents('form').submit();
        }
    });
};

jQuery(document).ready(as.init);

function hideNotifications() {
	jQuery('#msg-success').slideUp(600);
	jQuery('#msg-info').slideUp(600);
	jQuery('#msg-warning').slideUp(600);
	jQuery('#msg-error').slideUp(600);
}

function messageSuccess(message) {
	"use strict";
	jQuery('#msg-text').text(message);
	jQuery('#msg-success').show();
}

function messageInfo(message) {
	"use strict";
	jQuery('#info-text').text(message);
	jQuery('#msg-info').show();
}

function messageWarning(message) {
	"use strict";
	jQuery('#warning-text').text(message);
	jQuery('#msg-warning').show();
}

function messageError(error) {
	"use strict";
	jQuery('#error-text').text(error);
	jQuery('#msg-error').show();
}

function notificationSuccess(message) {
	"use strict";
	jQuery('#msg-text').text(message);
	jQuery('#msg-success').show();
	
	setTimeout(hideNotifications, 5000);
}

function notificationInfo(message) {
	"use strict";
	jQuery('#info-text').text(message);
	jQuery('#msg-info').show();
	
	setTimeout(hideNotifications, 5000);
}
function notificationWarning(message) {
	"use strict";
	jQuery('#warning-text').text(message);
	jQuery('#msg-warning').show();
	
	setTimeout(hideNotifications, 5000);
}

function notificationError(error) {
	"use strict";
	jQuery('#error-text').text(error);
	jQuery('#msg-error').show();
	
	setTimeout(hideNotifications, 5000);
}