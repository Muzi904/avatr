{{-- category section js --}}
<script type="text/javascript">
    $(document).ready(function() {
        getMenus();
    });

    function getMenus() {

        var table = $('.menu-table').DataTable({
            ajax: "{{ route('admin.menu.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'label',
                    name: 'label'
                },
                {
                    data: 'parent',
                    name: 'parent'
                },
                {
                    data: 'for_header',
                    name: 'for_header'
                },
                {
                    data: 'for_footer',
                    name: 'for_footer'
                },
                {
                    data: 'sort_order',
                    name: 'sort_order',
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'child',
                    name: 'child',
                    orderable: false,
                    searchable: false,

                },
                {
                    data: null,
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function(data) {

                        var editButton =
                            "@can('menu-edit') <a href='{{ route('admin.menu.edit', ['id' => ':cid']) }}' type='button' class='btn btn-primary'  ><i class='fa fa-edit'></i></a> @endcan ";
                        editButton = editButton.replace(':cid', data.id);

                        var deactivateButton =
                            "@can('menu-delete') <button type='button' onclick='deleteMenu(:cid)' class='btn btn-danger'><i class='fa fa-trash'></i></button> @endcan ";
                        deactivateButton = deactivateButton.replace(':cid', data.id);

                        return editButton + deactivateButton;
                    }
                },
            ],
            "order": [],
            "columnDefs": [{
                "visible": true,
                "searchable": true,
            }],
            "responsive": true,
            "serverSide": true,
            "paging": true,
            "searching": true,
            "language": {
                "paginate": {
                    "previous": "PREV",
                    "next": "NEXT",
                }
            }
        });

    }
</script>
<script>
    function deleteMenu(id) {
        $('#del_menu_id').val(id);
        $('#confirm-delete').modal('show');

    }
</script>
