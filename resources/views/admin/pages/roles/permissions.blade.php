@extends('admin.layouts.adminApp')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="col-12">
                <form action="{{ route('admin.roles.permissions.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="role_id" value="{{ $role->id }}">
                    <div class="card">
                        <div class="card-header d-flex">
                            Role: &nbsp;<h3 class="card-title">{{ $role->name }}</h3>
                            <div class="ms-auto">
                                <h4>Permissions</h4>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <tr>
                                        <th class="w-1">Sl.No</th>
                                        <th>Section</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($permissionBySection as $section => $permission)
                                        @php
                                            $count = $permissionBySection[$section]
                                                ? count($permissionBySection[$section])
                                                : 0;
                                            $checkedCount = !empty($rolePermissionsBySection[$section])
                                                ? count($rolePermissionsBySection[$section])
                                                : 0;
                                        @endphp
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td><input type="checkbox" class="select-all" title="Check All"
                                                    {{ $count == $checkedCount ? ' checked' : '' }}>
                                                {{ strtoupper($section) }}</td>
                                            @foreach ($permission as $per)
                                                @php
                                                    if (Arr::has($rolePermissionsBySection, $section)) {
                                                        $allow = in_array(
                                                            $per['id'],
                                                            $rolePermissionsBySection[$section],
                                                        );
                                                    } else {
                                                        $allow = false;
                                                    }
                                                @endphp
                                                <td><input type="checkbox" class="checkbox" name="permission[]"
                                                        id="permission" value="{{ $per['id'] }}"
                                                        {{ $allow ? 'checked' : '' }}>
                                                    {{ $per['display_name'] }}</td>
                                            @endforeach
                                        </tr>
                                        @php
                                            $no++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-center gap-3">
                            <button type="submit" class="btn btn-warning">Save Permissions</button>
                            <button type="button" onclick="history.back()" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @include('admin.scripts.roles_js')
@endpush
