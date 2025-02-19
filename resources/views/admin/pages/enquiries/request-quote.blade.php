@extends('admin.layouts.adminApp')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->

        <!-- Responsive Table -->
        <div class="card p-5">
            <h3 class="card-title">REQUEST A QUOTE</h3>
            <div class="card-header  d-flex">
                <div class="justify-content-end">
                    <button type="button" class="btn btn-primary m-2" id="searchModal">Search </button>
                    <button type="submit" class="btn btn-info m-2" form="export-form">Export</button>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table datatable request-quote-table w-100">
                    <thead>
                        <tr class="text-nowrap">
                            <th>#</th>
                            <th>Enq.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Model</th>
                            <th>Language</th>
                            <th>Nationality</th>
                            <th>Enq. Date</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Responsive Table -->
    </div>

    {{-- search --}}
    <div id="filterModal" class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Search Enquiries</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row" style="padding-top: 10px;">

                        <div class="col-sm-6 mt-3">
                            <label>Enquiry Date From</label>
                            <input type="date" class="form-control " placeholder="Select a date" id="from_date"
                                name="from_date" value="{{ session('from_date') }}">
                            {{--  --}}
                        </div>
                        <div class="col-sm-6 mt-3">
                            <label>Enquiry Date To</label>
                            <input type="date" class="form-control " placeholder="Select a date" id="to_date"
                                name="to_date" value="{{ session('to_date') }}">
                            {{--  --}}
                        </div>

                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-outline-secondary" id="clearFilter">
                        Clear
                    </button>
                    <button type="button" class="btn btn-primary" id="applyFilter">Search</button>
                </div>
            </div>
        </div>
    </div>

    {{-- export --}}

    <form action="{{ route('admin.enquiry.export') }}" method="post" id="export-form">
        @csrf

        <input type="hidden" name="from_date" id="from_date_export">
        <input type="hidden" name="to_date" id="to_date_export">
        <input type="hidden" name="type" id="type_export" value="request-quote">
    </form>
@endsection
@push('scripts')
    @include('admin.scripts.request_quote_js')
@endpush
