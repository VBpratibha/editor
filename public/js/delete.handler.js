(function() {
    
    "use strict";

    var laravel = {
        initialize: function() {
            this.registerEvents();
        },

        registerEvents: function() {
            jQuery('body').on('click', 'a[data-method]', this.handleMethod);
        },

        handleMethod: function(e) {
            var link = jQuery(this);
            var httpMethod = link.data('method').toUpperCase();
            var form;

            // If the data-method attribute is not PUT or DELETE,
            // then we don't know what to do. Just ignore.
            if ( jQuery.inArray(httpMethod, ['PUT', 'DELETE']) === - 1 ) {
                return;
            }

            // Allow user to optionally provide data-confirm="Are you sure?"
            if ( link.data('confirm-text') ) {
                laravel.verifyConfirm(link, function (t) {
                    if (! t) {return false;}

                    form = laravel.createForm(link);
                    form.submit();
                });
            }

            e.preventDefault();
        },

        verifyConfirm: function(link, callback) {
            swal({
                title: link.data('confirm-title'),
                text: link.data('confirm-text'),
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: link.data('confirm-delete') ? link.data('confirm-delete') : "Yes, delete it!",
            }, function (t) {
                callback(t)
            });
        },

        getCsrfToken: function () {
            return jQuery('meta[name="csrf-token"]').attr('content');
        },

        createForm: function(link) {
            var form =
                jQuery('<form>', {
                    'method': 'POST',
                    'action': link.attr('href')
                });

            var token =
                jQuery('<input>', {
                    'name': '_token',
                    'type': 'hidden',
                    'value': laravel.getCsrfToken()
                });

            var hiddenInput =
                jQuery('<input>', {
                    'name': '_method',
                    'type': 'hidden',
                    'value': link.data('method')
                });

            return form.append(token, hiddenInput)
                .appendTo('body');
        }
    };

    laravel.initialize();

})();