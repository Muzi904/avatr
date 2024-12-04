@extends('admin.layouts.adminApp')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="col-12">
                <div class="card">
                    <h3 class="card-title">USERS</h3>
                    <div class="card-header d-flex">
                        @can('user-create')
                            <div class="ms-auto">
                                <a href="{{ route('admin.users.create') }}" class="btn btn-info">Add User</a>
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            {{-- <div class="ms-auto ">
                                <a href="{{ route('admin.users.reassign') }}" class="btn btn-primary">Reassign User</a>
                            </div> --}}
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reassign">
                                Reassign User
                            </button>
                        @endcan
                    </div>
                    {{-- <div class="card-body border-bottom py-3">
                        <div class="d-flex">
                            <div class="text-muted">
                                Show
                                <div class="mx-2 d-inline-block">
                                    <input type="text" class="form-control form-control-sm" value="8" size="3"
                                        aria-label="Invoices count">
                                </div>
                                entries
                            </div>
                            <div class="ms-auto text-muted">
                                Search:
                                <div class="ms-2 d-inline-block">
                                    <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap data-table w-100">
                            <thead>
                                <tr>
                                    <th class="w-1"></th>
                                    <th class="w-1" style="text-align: center;">ID
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                                                                                    class="icon icon-sm icon-thick" width="24" height="24"
                                                                                                                                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                                                                                                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                                                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                                                                                                                    <path d="M6 15l6 -6l6 6" />
                                                                                                                                                                </svg> -->
                                    </th>
                                    <th>Name</th>
                                    <th>Email Id/Username</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Date of creation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                            aria-label="Select invoice"></td>
                                    <td><span class="text-muted">1</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Webchannel Admin</a>
                                    </td>
                                    <td>
                                        aghosh@webchannel.ae
                                    </td>
                                    <td>
                                        Mktg. & Sales Manager,Sales Staff
                                    </td>
                                    <td><span class="btn btn-success btn-xs">Active</span>
                                    </td>
                                    <td>
                                        28/02/2020
                                    </td>

                                    <td>
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    Action
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Another action
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                            aria-label="Select invoice"></td>
                                    <td><span class="text-muted">2</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Sathish Nair</a>
                                    </td>
                                    <td>
                                        nair@ncc-qatar.com
                                    </td>
                                    <td>
                                        Mktg. & Sales Manager,After Sales Manager
                                    </td>
                                    <td><span class="btn btn-success btn-xs">Active</span>
                                    </td>
                                    <td>
                                        18/03/2020
                                    </td>

                                    <td>
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    Action
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Another action
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                            aria-label="Select invoice"></td>
                                    <td><span class="text-muted">3</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales manager</a>
                                    </td>
                                    <td>
                                        parts@ncc-qatar.com
                                    </td>
                                    <td>
                                        After Sales Manager
                                    </td>
                                    <td><span class="btn btn-success btn-xs">Active</span>
                                    </td>
                                    <td>
                                        08/04/2020
                                    </td>

                                    <td>
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    Action
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Another action
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                            aria-label="Select invoice"></td>
                                    <td><span class="text-muted">4</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Booking Service</a>
                                    </td>
                                    <td>
                                        customerservice@ncc-qatar.com
                                    </td>
                                    <td>
                                        Sales Manager
                                    </td>
                                    <td><span class="btn btn-success btn-xs">Active</span>
                                    </td>
                                    <td>
                                        08/04/2020
                                    </td>

                                    <td>
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    Action
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Another action
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                            aria-label="Select invoice"></td>
                                    <td><span class="text-muted">5</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Manisa Lungbus</a>
                                    </td>
                                    <td>
                                        manisa@ncc-qatar.com
                                    </td>
                                    <td>
                                        Admin
                                    </td>
                                    <td><span class="btn btn-warning btn-xs">Deactive</span>
                                    </td>
                                    <td>
                                        20/04/2020
                                    </td>

                                    <td>
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    Action
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Another action
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr> --}}


                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="card-footer d-flex align-items-center">
                        <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of
                            <span>16</span> entries
                        </p>
                        <ul class="pagination m-0 ms-auto">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 6l-6 6l6 6" />
                                    </svg>
                                    prev
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    next
                                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 6l6 6l-6 6" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- reassign modal --}}
    <div class="modal fade" id="reassign" tabindex="-1" aria-labelledby="reassignLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reassignLabel">Reassign User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.users.reassign') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row form-group col-md-12">
                            <div class="col-md-6">
                                <label class="form-label">Assign From</label>
                                <select class="form-select" name="assign_from" id="assign_from" required>
                                    <option value="">Select employee</option>
                                    @foreach ($employees as $key => $employee)
                                        <option value="{{ $key }}">{{ $employee }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Assign To</label>
                                <select class="form-select" name="assign_to" id="assign_to" required>
                                    <option value="">Select employee</option>
                                    @foreach ($employees as $key => $employee)
                                        <option value="{{ $key }}">{{ $employee }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="records" value="all">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Reassign</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- reassign modal end --}}
@endsection
@push('scripts')
    @include('admin.scripts.users_js')
@endpush
