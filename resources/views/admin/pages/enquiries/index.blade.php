@extends('admin.layouts.adminApp')
@section('content')
    <div class="page-body">
        {{-- <div class="container-xl"> --}}
        <div class="col-12 m-2">
            <div class="card">
                <h3 class="card-title">{{ $heading }}</h3>
                <div class="card-header d-flex">
                    <!--@can('enquiry-create')
        -->
                        <!--    <div class="ms-auto">-->
                        <!--        <a href="" class="btn btn-info">Add Enquiry</a>-->
                        <!--    </div>-->
                        <!--
    @endcan-->
                    {{-- <form action="{{ route('admin.enquiry.export') }}" method="get">
                        @csrf
                        <input type="hidden" name="section" id="section_export" value="{{ $section }}">
                        <input type="hidden" name="from_date" id="from_date_export">
                        <input type="hidden" name="to_date" id="to_date_export">
                        <input type="hidden" name="enq_type" id="enq_type_export">
                        <input type="hidden" name="enq_category" id="enq_category_export">
                        <input type="hidden" name="enq_support_type" id="enq_support_type_export">
                        <button type="submit" class="btn btn-warning  m-2">Export</button>
                    </form> --}}
                    <button type="button" class="btn btn-primary m-2" id="searchModal">Search</button>
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
                    <table class="table table-vcenter text-nowrap data-table w-100 enquiry-table">
                        <thead>
                            <tr>
                                <th class="w-1"></th>
                                <th class="w-1" style="text-align: center;">ID</th>
                                <th>Type</th>
                                <th>Ref.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                {{-- <th>Contact No.</th> --}}
                                {{-- <th>Country</th> --}}
                                {{-- <th>Subject</th> --}}
                                {{-- <th style="width: 50px;">Message</th> --}}
                                {{-- <th>Service</th> --}}
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        {{-- </div> --}}
    </div>

    {{-- Search Modal --}}
    <div id="filterModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search Enquiries</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" id="closeModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- <form action="{{ route('admin.enquiry.index') }}" method="get">
                 @csrf --}}
                <div class="col-md-12">
                    <div class="form-group row" style="padding-top: 10px;">

                        <div class="col-sm-6 mt-3">
                            <label>Enquiry Date From</label>
                            <input type="date" class="form-control " placeholder="Select a date" id="from_date"
                                name="from_date">
                        </div>
                        <div class="col-sm-6 mt-3">
                            <label>Enquiry Date To</label>
                            <input type="date" class="form-control " placeholder="Select a date" id="to_date"
                                name="to_date">
                        </div>
                        {{-- @if ($section == 'All')
                            <div class="col-sm-6 mt-3">
                                <label>Type</label>
                                <select name="enq_type" id="enq_type" class="form-control ">
                                    <option value="">All Enquiries</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @elseif($section == 'Sales Enquiry')
                            <div class="col-sm-6 mt-3">
                                <label>Received From</label>
                                <select name="enq_category" id="enq_category" class="form-control ">
                                    <option value="">All Enquiries</option>
                                    <option value="signup">Sign Up</option>
                                    <option value="contact-us">Contact US</option>
                                    <option value="master-card-bnpl">MasterCard BNPL</option>
                                    <option value="master-card"> MasterCard</option>
                                    <option value="master-card-b2b"> MasterCard B2B</option>
                                    <option value="beehive"> Beehive</option>
                                    <option value="enbd-bbg-uae"> Enbd BBG UAE</option>
                                    <option value="enbd-bbg"> Enbd BBG</option>
                                    <option value="floating">Floating Button</option>
                                </select>
                            </div>
                        @elseif($section == 'Customer Support')
                            <div class="col-sm-6 mt-3">
                                <label>Support Type</label>
                                <select name="enq_support_type" id="enq_support_type" class="form-control ">
                                    <option value="">All Enquiries</option>
                                    <option value="Issuer Service">Issuer Service</option>
                                    <option value="Merchant Service">Merchant Service</option>
                                </select>
                            </div>
                        @endif --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="clearFilter">Clear</button>
                        <button type="submit" class="btn btn-primary" id="applyFilter">Search</button>
                    </div>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @include('admin.scripts.enquiry_js')
@endpush
