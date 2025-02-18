<script type="text/javascript">
    $(function() {
        var url = "{{ route('admin.contact.index') }}";

        var filters = @json($filters);
        var table = $('.contact-table').DataTable({
            ajax: {
                url: url,
                data: function(d) {
                    if (filters['from_date']) {
                        d.from_date = filters['from_date'];
                        $('#from_date').val(filters['from_date']);
                        $('#from_date_export').val(filters['from_date']);
                    } else {
                        d.from_date = $('#from_date').val();
                        $('#from_date_export').val($('#from_date').val());
                    }

                    if (filters['to_date']) {
                        d.to_date = filters['to_date'];
                        $('#to_date').val(filters['to_date']);
                        $('#to_date_export').val(filters['to_date']);
                    } else {
                        d.to_date = $('#to_date').val();
                        $('#to_date_export').val($('#to_date').val());
                    }

                    // if (filters['is_confirmed']) {
                    //     d.is_confirmed = filters['is_confirmed'];
                    //     $('#is_confirmed').val(filters['is_confirmed']);
                    //     $('#is_confirmed_export').val(filters['is_confirmed']);
                    // } else {
                    //     d.is_confirmed = $('#is_confirmed').val();
                    //     $('#is_confirmed_export').val($('#is_confirmed').val());
                    // }
                },
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'enq_no',
                    name: 'enq_no'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'phone_number',
                    name: 'phone_number'
                },
                {
                    data: 'subject',
                    name: 'subject'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
            ],
            "order": [],
            "columnDefs": [{
                "visible": true,
                "searchable": true,
            }],
            "responsive": true,
            "processing": true,
            "serverSide": true, // Enable server-side processing
            "paging": true, // Enable pagination
            "searching": true,
            "language": {
                "paginate": {
                    "previous": "PREV",
                    "next": "NEXT",
                }
            }
        });

        $('#clearFilter').click(function() {
            $.ajax({
                url: "{{ route('admin.enquiry.clear.session') }}",
                method: "get",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {},
                success: function(data) {
                    window.location.href = url;
                }
            });
        });
    });

    $('#searchModal').click(function() {
        $('#filterModal').modal('show');
    });
    $('#closeModal').click(function() {
        $('#filterModal').modal('hide');
    });

    $('#applyFilter').on('click', function() {
        $('.enquiry-table').DataTable().ajax.reload();
        $('#filterModal').modal('hide');
    });
</script>
