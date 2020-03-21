! function(e, m, t) {
    "use strict";
    t("#summernote-code").summernote({
        height: 350,
        dialogsInBody: true,
        onInit: function(container) { $('body').on('keyup', '.note-editing-area textarea', $(container), function() { var html = $('.note-codable').data('cmEditor').getValue(); $('.wysiwyg').val(html); }); }
    })

}(window, document, jQuery);