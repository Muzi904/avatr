@extends('admin.layouts.adminApp')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="col-12">
                <div class="card">
                    <h3 class="card-title">ROLES</h3>

                    <div class="card-header d-flex">
                        @can('role-create')
                            <div class="ms-auto">
                                <a href="{{ route('admin.roles.create') }}" class="btn btn-info">Add Role</a>
                            </div>
                        @endcan
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th class="w-1"></th>
                                    <th class="w-1" style="text-align: center;">ID

                                    </th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Permission</th>
                                    <th>Edit</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $key => $role)
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select invoice"></td>
                                        <td><span class="text-muted">{{ $key + 1 }}</span></td>
                                        <td>
                                            {{ $role->name }}
                                        </td>
                                        <td><span class="btn btn-success btn-xs">Active</span>
                                        </td>
                                        <td><a class="btn btn-primary btn-xs"
                                                href="{{ route('admin.roles.permissions', $role->id) }}"><i
                                                    class="fa fa-cog"></i>
                                                Access</a></td>
                                        <td>
                                            <span class="dropdown">
                                                @if (auth()->user()->can('role-edit') || auth()->user()->can('role-delete'))
                                                    <button class="btn dropdown-toggle align-text-top"
                                                        data-bs-boundary="viewport"
                                                        data-bs-toggle="dropdown">Actions</button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        @can('role-edit')
                                                            <a class="dropdown-item text-info"
                                                                href="{{ route('admin.roles.edit', $role->id) }}">
                                                                Edit
                                                            </a>
                                                        @endcan
                                                        @can('role-delete')
                                                            <a class="dropdown-item text-danger" href="#">
                                                                Delete
                                                            </a>
                                                        @endcan
                                                    </div>
                                                @endif
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex align-items-center">
                        {!! $roles->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @include('admin.scripts.roles_js')
@endpush
