<script type="text/javascript">
    $(function() {
        var url = "{{ route('admin.enquiry.index') }}";

        var filters = @json($filters);
        var table = $('.enquiry-table').DataTable({
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

                    if (filters['type']) {
                        d.type = filters['type'];
                        $('#type').val(filters['type']);
                        $('#type_export').val(filters['type']);
                    } else {
                        d.type = $('#type').val();
                        $('#type_export').val($('#type').val());
                    }
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
                    data: 'type',
                    name: 'type'
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
                    data: 'is_confirmed',
                    name: 'is_confirmed'
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
