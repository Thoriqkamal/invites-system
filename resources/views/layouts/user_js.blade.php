<script type="text/javascript">
    $('.input-user').click(function() {
			var id = $(this).data('id');
			var token = $("input[name='_token']").val();

			$('#action_type').val('edit');

			// show loader
			$("#loader").show();
			// hide form
			$("#modalContent").hide();

			$.ajax({
				async: true,
				url: "{{ url('getroles') }}",
				method: "POST",
				data: {
					_token: token,
					id: id
				},
				dataType: "json",
				success: function(data) {
					// console.log(data.roles[3]);
					// hide loader
					$("#loader").hide();
					// show form
					$("#modalContent").show();

					var roles = data.roles[3].id;
					// console.log(roles);
					$('.custom-control-input-add').prop('checked', false);
					$('.counter_' + roles).prop('checked', true);
            }
        });
    });

    $('.editUser').click(function() {
			var id = $(this).data('id');
			var token = $("input[name='_token']").val();

			$('#action_type').val('edit');

			// show loader
			$("#loader").show();
			// hide form
			$("#modalContent").hide();

			$.ajax({
				async: true,
				url: "{{ url('getusers') }}",
				method: "POST",
				data: {
					_token: token,
					id: id
				},
				dataType: "json",
				success: function(data) {
					// console.log(data);
					// hide loader
					$("#loader").hide();
					// show form
					$("#modalContent").show();

					// console.log(id);
					var user = data.user;
					// console.log(user);
					// $('#user_id2').val(user.user_id);
					$('#id2').val(user.id);
					$('#username2').val(user.username);
					$('#password2').val(user.password);
					$('#email2').val(user.email);
					$('#position2').val(user.position);
					$('#phone2').val(user.phone);
					$('#role2').val(user.role_id);
					$('.custom-control-input').prop('checked', false);
					for (j = 0; j < user.role_id.length; j++) {
						console.log(user.role_id[j]);
						$('.counter_' + user.role_id[j]).prop('checked', true);
					}

					// $('#dynamic_field').html('');
					// i=0;            
            }
        });
    });

    $('.save-edit').click(function() {
        var check = $('.checkEdit:checkbox');
        if (check.length > 0) {
            if ($('.checkEdit:checkbox:checked').length < 1) {
                alert('Please select at least one checkbox!');
                check[0].focus();
                return false;
            }
        }
        form.submit();
    });

    $('.deleteUser').click(function() {
            if (confirm("Are you sure to delete this user?")) {
                var id = $(this).data('id');
                // console.log(id);
                var token = $("input[name='_token']").val();
                $.ajax({
                    async: true,
                    url: "{{ url('users-delete') }}",
                    method: "POST",
                    data: {
                        _token: token,
                        id: id
                    },
                    dataType: "json",
                    success: function(rt) {
                        window.location.reload();
                        alert('Success deleted user!!');

                    }
                });
            } else {
                return;
        }
    });

</script>