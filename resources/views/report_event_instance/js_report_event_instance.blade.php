<script>
    var table = $('#reportEventInstance').DataTable({
            paging: true,
            info: true,
            searching: true,
    });

    $(document).ready(function () {
        $("#selectEvent").on("change", function () {
            var country = $('#selectEvent').find("option:selected").val();
            SearchData(country)
        });
    });
    function SearchData(country) {
        if (country.toUpperCase() == 'ALL') {
            $('#reportEventInstance tbody tr').show();
        } else {
            $('#reportEventInstance tbody tr:has(td)').each(function () {
                var rowCountry = $.trim($(this).find('td:eq(1)').text());
                if (country.toUpperCase() != 'ALL') {
                    if (rowCountry.toUpperCase() == country.toUpperCase()) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                } else if ($(this).find('td:eq(1)').text() != '') {
                    if (country != 'all') {
                        if (rowCountry.toUpperCase() == country.toUpperCase()) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    }
                }
            });
        }
    }
</script>