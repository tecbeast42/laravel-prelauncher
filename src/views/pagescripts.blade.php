(function() {
	$('.fade_me_out').delay(8000).slideUp();
	// $('.prelaunch-form').submit(function (e) {
	// 	e.preventDefault();
	// 	$.ajax({
	// 		url: "{{ route('prelaunch') }}",
	// 		method : "POST",
	// 		dataType: "JSON",
	// 		data: {
	// 			'_method' :"PUT",
	// 			'_token': $('meta[name=csrf_token]').attr('content'),
	// 			'reserved_username' : $('#reserved_username').val(),
	// 			'email' : $('#email').val(),
	// 		},
	// 		success : function (response,data) {
	// 			$('.msg-box').html('<div class="fade_me_out alert alert-success">'+response.msg+'</div>');
	// 			$('.fade_me_out').delay(8000).slideUp();
	// 			$('.prelaunch-form input[type=submit]').attr('disabled',true);	
	// 		},
	// 		error : function (response,data) {
	// 			$('.msg-box').html('<div class="fade_me_out alert alert-danger">Es hat nicht geklappt und wir wissen leider auch nicht warum :(, bitte versuche es später erneut.</div>');
	// 			$('.fade_me_out').delay(8000).slideUp();	
	// 		}
	// 	});
	// });
	$('input.form-control').change(function (input) {
		var name = $(this).attr('name');
		var val = $(this).val();
		var fullName;
		if(name == "email") {
			fullName = "Email";
		} else {
			fullName = "Username";
		}

		$.ajax({
			url: "{{ route('prelaunch-available')}}",
			method: "GET",
			dataType: "JSON",
			data: {
				'name' : name,
				'value' : val
			},
			success : function (response,data) {
				if(response[0]) {
					$('.'+name+'-remove').slideUp();
				} else {
					var msg = '<div class="'+name+'-remove alert alert-danger">'+fullName+' bereits vergeben</div>';
					$('.msg-box').append(msg);
				}	
			},
			error : function (response,data) {
				var msg = '<div class="alert alert-danger">Server gerade nicht erreichbar :( probiere es später</div>';
			}
		});
	});
})();