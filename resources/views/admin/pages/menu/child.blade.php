@extends('admin.layouts.adminApp')
@section('content')
    <div class="page-body">
        <div class="container-xl" style="padding-top: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card">
                        <h3 class="card-title">MENUS</h3>
                        <div class="card-header d-flex">
                            @can('menu-create')
                                <div class="ms-auto">
                                    <a href="{{ route('admin.menu.create') }}" class="btn btn-info">Add Menu</a>
                                </div>
                            @endcan

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap child-menu-table">
                                <thead>
                                    <tr>
                                        <th class="w-1" style="text-align: center;">ID
                                        </th>
                                        <th>Label</th>
                                        <th>Parent</th>
                                        <th>For Header</th>
                                        <th>For Footer</th>
                                        <th>Sort</th>
                                        <th>Status</th>
                                        <th>Sub Menus</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="confirm-delete" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <form action="{{ route('admin.menu.delete') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="del_menu_id" value="">
                    <div class="modal-header flex-column">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title w-100">Are you sure?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                            onclick="$('#confirm-delete').modal('hide');">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            onclick="$('#confirm-delete').modal('hide');">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{-- @include('admin.scripts.menu_js') --}}
    <script type="text/javascript">
        $(document).ready(function() {
            getChildMenus();
        });

        function getChildMenus() {
            $parentId = {!! json_decode($id) !!};

            var url = "{{ route('admin.menu.child', ['id' => ':cid']) }}";
            url = url.replace(':cid', $parentId);
            var table = $('.child-menu-table').DataTable({
                ajax: url,
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
@endpush
