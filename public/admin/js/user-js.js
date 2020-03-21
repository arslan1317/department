! function(e, m, t) {
    "use strict";
    t("#summernote-code").summernote({
        height: 350,
        dialogsInBody: true,
        onInit: function(container) { $('body').on('keyup', '.note-editing-area textarea', $(container), function() { var html = $('.note-codable').data('cmEditor').getValue(); $('.wysiwyg').val(html); }); }
    })
    t("#summernote-code-edit").summernote({
        height: 350,
        dialogsInBody: true,
        onInit: function(container) { $('body').on('keyup', '.note-editing-area textarea', $(container), function() { var html = $('.note-codable').data('cmEditor').getValue(); $('.wysiwyg').val(html); }); }
    })

}(window, document, jQuery);


function news(ele, formName){
	var image = $(ele).data('image');
	var headline = $(ele).data('headline');
	var body = $(ele).data('body');
	var action = $(ele).data('action');
	$(formName).find('.image-show').attr('src', '../images/' + image);
	$(formName).find('form').attr('action', action);
	$(formName).find('input[name=headline]').val(headline);
	$('#summernote-code-edit').summernote('editor.pasteHTML', body);
	$(formName).modal('show');
}

$(document).ready(function(){
	$('.btn-delete').click(function(){
		var action = $(this).data('action');
		$('#default').find('form').attr('action', action);
		$('#default').modal('show');
	})
});