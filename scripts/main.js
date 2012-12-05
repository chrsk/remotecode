$(document).ready(function(){
	
	function saveNow() {		
		var code = $('#code').val();
		var data = Base64.encode(code);
		var url = "./save.php";
		$.post(url, { 
			data: data,
			source: code
			}, function(data, textStatus, jqXHR) {
			$('.save').popover('show');
		
			setTimeout(function() { 
				$('.save').popover('hide');
			},1500)
		});
	}
	
	$('.save').popover({
		html : true,
		title: "Saved",
		trigger: "manual",
		placement: "right",
		content : "Your snippet can now be served"
	});
	
	$(".save").click(function(event){
		saveNow();
	});
	
	$(".clear").click(function(event) {
	console.debug("clear");
		$('#code').val("");
		editor.setCode("");
	});
	
	var $window = $(window);
	var $textarea = $("#code");
	
	var editor = CodeMirror.fromTextArea($("#code").get(0), {
		lineNumbers: true,
		mode: "javascript",
		indentUnit: 4,
		extraKeys: {"Enter": "newlineAndIndentContinueComment"}
	});
	
	editor.focus();
});