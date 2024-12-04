<script type="text/javascript">
    $(function() {

        var url = "{{ route('admin.enquiry.index') }}";

        // var path = window.location.pathname;
        // var pathParts = path.split('/');
        // var lastPart = pathParts[pathParts.length - 1];

        // if (lastPart == "sales-enquiry") {
        //     url = "{{ route('admin.sales.enquiry.index') }}";
        // } else if (lastPart == "customer-support") {
        //     url = "{{ route('admin.customer.support.enquiry.index') }}";
        // } else if (lastPart == "feedback") {
        //     url = "{{ route('admin.feedback.enquiry.index') }}";
        // } else if (lastPart == "submit-a-request") {
        //     url = "{{ route('admin.submit.request.enquiry.index') }}";
        // }

        var table = $('.enquiry-table').DataTable({
            ajax: {
                url: url,
                data: function(d) {
                    d.from_date = $('#from_date').val();
                    $('#from_date_export').val($('#from_date').val());

                    d.to_date = $('#to_date').val();
                    $('#to_date_export').val($('#to_date').val());

                    d.enq_type = $('#enq_type').val();
                    $('#enq_type_export').val($('#enq_type').val());

                    d.enq_category = $('#enq_category').val();
                    $('#enq_category_export').val($('#enq_category').val());

                    d.enq_support_type = $('#enq_support_type').val();
                    $('#enq_support_type_export').val($('#enq_support_type').val());

                },
            },
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
                    data: 'enq_type',
                    name: 'enq_type'
                },
                {
                    data: 'enq_refno',
                    name: 'enq_refno'
                },
                {
                    data: 'enq_name',
                    name: 'enq_name'
                },
                {
                    data: 'enq_email',
                    name: 'enq_email'
                },
                // {
                //     data: 'enq_mobile',
                //     name: 'enq_mobile'
                // },
                // {
                //     data: 'enq_country',
                //     name: 'enq_country'
                // },
                // {
                //     data: 'enq_subject',
                //     name: 'enq_subject'
                // },
                // {
                //     data: 'enq_message',
                //     name: 'enq_message'
                // },
                // {
                //     data: 'enq_products',
                //     name: 'enq_products'
                // },
                {
                    data: 'added_on',
                    name: 'added_on'
                },

                {
                    data: null,
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function(data) {
                        // return "";
                        // return "@can('enquiry-edit')<button class='btn btn-primary btn-sm'><i class='fa fa-edit'></i></button>@endcan";
                        var showButton =
                            "<a href='{{ route('admin.webinar.enquiry.show', ['id' => ':cid']) }}' class='btn btn-primary'><i class='fa fa-eye'></i></a> ";
                        showButton = showButton.replace(':cid', data.id);

                        // if (data.user_status == 'Y') {
                        //     var statusButton =
                        //         "@can('user-edit') <a href='{{ route('admin.users.deactivate', ['id' => ':cid']) }}' class='btn btn-warning'>Deactivate</a> @endcan ";
                        //     statusButton = statusButton.replace(':cid', data.id);
                        // } else {
                        //     var statusButton =
                        //         "@can('user-edit') <a href='{{ route('admin.users.activate', ['id' => ':cid']) }}' class='btn btn-success'>Activate</a> @endcan ";
                        //     statusButton = statusButton.replace(':cid', data.id);
                        // }

                        return showButton;
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
            "processing": true,
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


        $('#searchModal').click(function() {
            $('#filterModal').modal('show');
        });

        $('#applyFilter').on('click', function() {
            $('.enquiry-table').DataTable().ajax.reload();
            $('#filterModal').modal('hide');
        });

        $('#clearFilter').click(function() {
            window.location.href = url;
        });
    });
</script>
