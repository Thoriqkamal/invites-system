<script>
    var table = $('.whitelistTable').DataTable({
            paging: true,
            info: true,
            searching: true,
        });

    $('.editEvent').click(function() {
			var id = $(this).data('id');
			var token = $("input[name='_token']").val();

			$('#action_type').val('edit');

			// show loader
			$("#loader").show();
			// hide form
			$("#modalContent").hide();

			$.ajax({
				async: true,
				url: "{{ url('get-event') }}",
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

					var data_event = data.event;
					var username = data_event.username;
					// console.log(username);
					$('#id2').val(data_event.id);
					$('#instancename2').val(data_event.instance_name);
					document.getElementById("username2").value = username;
					$('#eventdate2').val(data_event.event_date);          
            }
        });
    });

	$('.deleteEvent').click(function() {
        if (confirm("Are you sure to delete this event instance?")) {

            var id = $(this).data('id');
            var token = $("input[name='_token']").val();

            $.ajax({
                async: true,
                url: "{{ url('event-delete') }}",
                method: "POST",
                data: {
                    _token: token,
                    id: id
                },
                dataType: "json",
                success: function(rt) {
                    window.location.reload();
                    alert('Success deleted event instance!!');

                }
            });

        } else {
            return;
        }
    });

</script>