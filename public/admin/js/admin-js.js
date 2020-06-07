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
	var author = $(ele).data('author');
	var action = $(ele).data('action');
	var department_id = $(ele).data('department_id');
	$(formName).find("option:selected").val(department_id);
	$(formName).find('.image-show').attr('src', '../images/' + image);
	$(formName).find('form').attr('action', action);
	$(formName).find('input[name=headline]').val(headline);
	$(formName).find('input[name=author]').val(author);
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

function events(ele, formName){
	var name = $(ele).data('name');
    var startDate = $(ele).data('startdate');
    var endDate = $(ele).data('enddate');
	var detail = $(ele).data('detail');
    var action = $(ele).data('action');
    $(".editdatetime").daterangepicker({
    	timePicker: true,
    	startDate: startDate,
    	endDate: endDate,
    	locale: {
	      format: 'MM-DD-YYYY hh:mm:ss A'
	    }
    });
    $(formName).find('form').attr('action', action);
    $(formName).find('input[name=name]').val(name);
    $('#summernote-code-edit').summernote('reset');
	$('#summernote-code-edit').summernote('editor.pasteHTML', detail);
	$(formName).modal('show');
}

function gallery(ele, formName){
	var title = $(ele).data('title');
	var gallery = $(ele).data('gallery');
	var caption = $(ele).data('caption');
	var action = $(ele).data('action');
	$(formName).find('form').attr('action', action);
	$(formName).find("option:selected").val(title);
	$(formName).find('input[name=caption]').val(caption);
	$(formName).find('.image-show').attr('src', '../images/' + gallery);
	$(formName).modal('show');
}

$(document).ready(function(){
	$('.btn-basic-delete').click(function(){
		var route = $(this).data('route');
		$('#default').find('form').attr('action', route);
		$('#default').modal('show');
	});
});