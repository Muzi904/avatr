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
                            <table class="table card-table table-vcenter text-nowrap menu-table">
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
    @include('admin.scripts.menu_js')
@endpush
