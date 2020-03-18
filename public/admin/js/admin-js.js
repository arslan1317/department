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

$(document).ready(function(){
	$('.btn-delete').click(function(){
		var action = $(this).data('action');
		$('#default').find('form').attr('action', action);
		$('#default').modal('show');
	})
});