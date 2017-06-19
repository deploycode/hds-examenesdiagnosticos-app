$("#registro").click(function(){
	var dato = $("#menu").val();
	var route = "/menu";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{menu: dato},

		success:function(){
			window.location.href = "/menu/create";
		},
		error:function(){
			window.location.href = "/menu/create";
		}
	});
});
