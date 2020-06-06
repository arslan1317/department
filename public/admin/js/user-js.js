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
	var author = $(ele).data('author');
	var body = $(ele).data('body');
	var action = $(ele).data('action');
	$(formName).find('.image-show').attr('src', '../images/' + image);
	$(formName).find('form').attr('action', action);
	$(formName).find('input[name=headline]').val(headline);
	$(formName).find('input[name=author]').val(author);
	$('#summernote-code-edit').summernote('reset');
	$('#summernote-code-edit').summernote('editor.pasteHTML', body);
	$(formName).modal('show');
}

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

$(document).ready(function(){
	$('.btn-delete').click(function(){
		var action = $(this).data('action');
		$('#default').find('form').attr('action', action);
		$('#default').modal('show');
	})
	$(".datetime").daterangepicker({timePicker:!0,timePickerIncrement:30,locale:{format:"MM/DD/YYYY h:mm A"}})
	$(".editdatetime").daterangepicker({timePicker:!0,timePickerIncrement:30,locale:{format:"MM/DD/YYYY h:mm A"}})

	$('.btn-view-graph').click(function(e){
		var name = $(this).data('name');
		var datasource = $(this).data('source-log');
		var area = []
		var date = [];
		var price = [];
		for(var i = 0; i < datasource.length; i++){
			area[i] = datasource[i]['area'];
			date[i] = datasource[i]['date'];
			price[i] = datasource[i]['price'];
		}
		console.log(area);
		console.log(datasource);
		$('#line-chart').html();
		var o = $("#line-chart");
		new Chart(o, {
			type: "line",
			options: {
				responsive: !0,
				maintainAspectRatio: !1,
				legend: {
					position: "bottom"
				},
				hover: {
					mode: "label"
				},
				scales: {
					xAxes: [{
						display: !0,
						gridLines: {
							color: "#f3f3f3",
							drawTicks: !1
						},
						scaleLabel: {
							display: !0,
							labelString: "Date"
						}
					}],
					yAxes: [{
						display: !0,
						gridLines: {
							color: "#f3f3f3",
							drawTicks: !1
						},
						scaleLabel: {
							display: !0,
							labelString: "Price"
						}
					}]
				},
				title: {
					display: !0,
					text: name
				}
			},
			data: {
				labels: date,
				datasets: [{
					label: area,
					data: price,
					fill: !1,
					borderDash: [5, 5],
					borderColor: "#9C27B0",
					pointBorderColor: "#9C27B0",
					pointBackgroundColor: "#FFF",
					pointBorderWidth: 2,
					pointHoverBorderWidth: 2,
					pointRadius: 4
				}]
			}
		})
		e.preventDefault();
		$('#graph').modal('show');
	});
});
