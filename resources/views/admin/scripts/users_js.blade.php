<script>
    $(document).ready(function() {
        $('.multiple').select2();
    });
</script>
<script type="text/javascript">
    $(function() {

        var table = $('.data-table').DataTable({
            ajax: "{{ route('admin.users.index') }}",
            columns: [{
                    data: 'checkbox',
                    name: 'checkbox'
                }, {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: null,
                    name: 'first_name',
                    render: function(data) {
                        return data.first_name +
                            ' ' + data.last_name;
                    },
                    searchable: true
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'roles',
                    name: 'roles'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: null,
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function(data) {
                        var editButton =
                            "@can('user-edit') <a href='{{ route('admin.users.edit', ['id' => ':cid']) }}' class='btn btn-primary'><i class='fa fa-edit'></i></a> @endcan ";
                        editButton = editButton.replace(':cid', data.id);

                        if (data.user_status == 'Y') {
                            var statusButton =
                                "@can('user-edit') <a href='{{ route('admin.users.deactivate', ['id' => ':cid']) }}' class='btn btn-warning'>Deactivate</a> @endcan ";
                            statusButton = statusButton.replace(':cid', data.id);
                        } else {
                            var statusButton =
                                "@can('user-edit') <a href='{{ route('admin.users.activate', ['id' => ':cid']) }}' class='btn btn-success'>Activate</a> @endcan ";
                            statusButton = statusButton.replace(':cid', data.id);
                        }

                        return editButton + statusButton;
                    }
                },
            ],
            "order": [],
            "columnDefs": [{
                // Hide the ID column from the user
                // "targets": [8],
                "visible": true,
                "searchable": true,

            }],
            // "createdRow": function(row, data, dataIndex) {
            //     // Add auto-numbering to the first column
            //     // $(row).find('td:first').html(dataIndex + 1);
            //     var currentPage = dataTable.page.info().page; // Get current page
            //     var recordsPerPage = dataTable.page.info().length; // Get number of records per page
            //     var slNo = 1 + dataIndex + currentPage * recordsPerPage;
            //     $(row).find('td:second').html(slNo);
            // },
            "responsive": true,
            // "scrollX": true,
            "serverSide": true, // Enable server-side processing
            "paging": true, // Enable pagination
            // "lengthChange": true, // Show number of entries per page dropdown
            // "pageLength": 10, // Initial number of records per page
            "searching": true,
            "language": {
                "paginate": {
                    "previous": "PREV",
                    "next": "NEXT",
                }
            }
        });

    });
</script>
