function subdepartment(ele, formName){
	var department_id = $(ele).data('department_id');
	var name = $(ele).data('name');
	var website = $(ele).data('website');
	var address = $(ele).data('address');
	var telephone = $(ele).data('telephone');
	var fax = $(ele).data('fax');
	var action = $(ele).data('action');
	$(formName).find('form').attr('action', action);
	$(formName).find("option:selected").val(department_id);
	$(formName).find('input[name=name]').val(name);
	$(formName).find('input[name=website]').val(website);
	$(formName).find('input[name=address]').val(address);
	$(formName).find('input[name=telephone]').val(telephone);
	$(formName).find('input[name=fax]').val(fax);
	$(formName).modal('show');
}

function news(ele, formName){
	var image = $(ele).data('image');
	var headline = $(ele).data('headline');
	var body = $(ele).data('body');
	var action = $(ele).data('action');
	var department_id = $(ele).data('department_id');
	$(formName).find("option:selected").val(department_id);
	$(formName).find('.image-show').attr('src', '../images/' + image);
	$(formName).find('form').attr('action', action);
	$(formName).find('input[name=headline]').val(headline);
	$('#summernote-code-edit').summernote('editor.pasteHTML', body);
	$(formName).modal('show');
}


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

$(document).ready(function(){
	$('.btn-delete').click(function(){
		var action = $(this).data('action');
		$('#default').find('form').attr('action', action);
		$('#default').modal('show');
	})
	$(".datetime").daterangepicker({timePicker:!0,timePickerIncrement:30,locale:{format:"MM/DD/YYYY h:mm A"}})
});