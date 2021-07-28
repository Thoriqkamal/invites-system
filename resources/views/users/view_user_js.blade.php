<script>
    // $(document).ready(function() {
        //- Intialize datatables

        var table = $('#userTable').DataTable({
            paging: true,
            info: true,
            searching: true,
        });

        //- Extra data config datatatables

        //-- Formatting function for row details - modify as you need 
        // function extraMonitoringInformation(d) {
        //     // `d` is the original data object for the row
        //     return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
        //         '<tr>' +
        //         '<td>Survey Name :</td>' +
        //         '<td>' + d.hidden_survey_name + '</td>' +
        //         '</tr>' +

        //         '<tr>' +
        //         '<td>Channel :</td>' +
        //         '<td>' + d.hidden_channel + '</td>' +
        //         '</tr>' +

        //         '<tr>' +
        //         '<td>Updated At :</td>' +
        //         '<td>' + d.hidden_created_at + '</td>' +
        //         '</tr>' +

        //         '<tr>' +
        //         '<td>Survey Before :</td>' +
        //         '<td>' + d.hidden_survey_before + '</td>' +
        //         '</tr>' +

        //         '<tr>' +
        //         '<td>Survey Change :</td>' +
        //         '<td>' + d.hidden_survey_change + '</td>' +
        //         '</tr>' +

        //         '<tr>' +
        //         '<td>Updated By :</td>' +
        //         '<td>' + d.hidden_username + '</td>' +
        //         '</tr>' +
        //         '</table>';
        // }

        //-- Add event listener for opening and closing details
        $('#monitoringTable tbody').on('click', 'td.details-control', function() {
            var tr = $(this).closest('tr');
            var row = table.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                row.child(extraMonitoringInformation(row.data())).show();
                tr.addClass('shown');
            }
        });
    
</script>