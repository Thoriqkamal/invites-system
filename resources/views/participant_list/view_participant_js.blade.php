<script>

var table = $('#participantTable').DataTable({
    paging: true,
    info: true,
    searching: true,
});

$('.EditParticipant').click(function() {
        var id = $(this).data('id');
        var token = $("input[name='_token']").val();

        $('#action_type').val('edit');

        // show loader
        $("#loader").show();
        // hide form
        $("#modalContent").hide();

        $.ajax({
            async: true,
            url: "{{ url('get-participant') }}",
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

                var data_participant = data.participant;
                var username = data_participant.username;
                var event_instance = data_participant.instance_name;

                $('#id2').val(data_participant.id);
                document.getElementById("username2").value = username; 
                document.getElementById("event_instance2").value = event_instance; 
        }
    });
});

$('.deleteParticipant').click(function() {
        if (confirm("Are you sure to delete this participant list?")) {

            var id = $(this).data('id');
            var token = $("input[name='_token']").val();

            $.ajax({
                async: true,
                url: "{{ url('participant-delete') }}",
                method: "POST",
                data: {
                    _token: token,
                    id: id
                },
                dataType: "json",
                success: function(rt) {
                    window.location.reload();
                    alert('Success deleted participant list!!');

                }
            });

        } else {
            return;
        }
    });

</script>