@extends('admin.layouts.adminApp')
@section('content')
    <style>
        .page-body {
            padding: 20px;
            background-color: #f7f8fa;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f0f4f8;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }

        .details-container {
            padding: 20px;
        }

        .detail-row {
            display: flex;
            padding: 10px 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-row label {
            flex: 0 0 30%;
            font-weight: bold;
            color: #555;
        }

        .detail-row span {
            flex: 1;
            color: #333;
        }

        .detail-row span,
        .detail-row label {
            font-size: 1rem;
            padding: 5px;
        }
    </style>
    <div class="page-body">
        <div class="col-12 m-2">
            <div class="card">
                <div class="card-header">
                    <h3>Enquiry Details</h3>
                </div>
                <div class="card-body">
                    <div class="details-container">
                        <div class="detail-row">
                            <label>Reference No:</label>
                            <span>{{ @$enquiry->enq_refno }}{{ @$enquiry->custom_ref ? ' (Custom Ref. NO ' . @$enquiry->custom_ref . ')' : '' }}</span>
                        </div>
                        @if (@$enquiry->enq_type)
                            <div class="detail-row">
                                <label>
                                    Type:
                                </label>
                                <span>
                                    {{ @$enquiry->enq_type }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->enq_category)
                            <div class="detail-row">
                                <label>
                                    Category:
                                </label>
                                <span>
                                    {{ ucwords(str_replace(['-', '_'], ' ', @$enquiry->enq_category)) }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->request_type)
                            <div class="detail-row">
                                <label>
                                    From:
                                </label>
                                <span>
                                    {{ ucwords(@$enquiry->request_type) }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->service_type)
                            <div class="detail-row">
                                <label>
                                    Service Type :
                                </label>
                                <span>
                                    {{ @$enquiry->service_type }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->enq_name)
                            <div class="detail-row">
                                <label>
                                    Name :
                                </label>
                                <span>
                                    {{ @$enquiry->enq_name }} {{ @$enquiry->enq_lname }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->enq_email)
                            <div class="detail-row">
                                <label>
                                    Email :
                                </label>
                                <span>
                                    {{ @$enquiry->enq_email }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->req_email)
                            <div class="detail-row">
                                <label>
                                    Request Email :
                                </label>
                                <span>
                                    {{ @$enquiry->req_email }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->enq_mobile)
                            <div class="detail-row">
                                <label>
                                    Phone Number :
                                </label>
                                <span>
                                    {{ @$enquiry->enq_mobile }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->address)
                            <div class="detail-row">
                                <label>
                                    Address :
                                </label>
                                <span>
                                    {{ @$enquiry->address }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->enq_company)
                            <div class="detail-row">
                                <label>
                                    Company :
                                </label>
                                <span>
                                    {{ @$enquiry->enq_company }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->enq_country)
                            <div class="detail-row">
                                <label>
                                    Country :
                                </label>
                                <span>
                                    {{ @$enquiry->enq_country }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->merchant_name)
                            <div class="detail-row">
                                <label>
                                    Merchant Name :
                                </label>
                                <span>
                                    {{ @$enquiry->merchant_name }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->merchant_id)
                            <div class="detail-row">
                                <label>
                                    Merchant ID :
                                </label>
                                <span>
                                    {{ @$enquiry->merchant_id }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->emirate)
                            <div class="detail-row">
                                <label>
                                    Emirate :
                                </label>
                                <span>
                                    {{ @$enquiry->emirate }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->enq_subject)
                            <div class="detail-row">
                                <label>
                                    Subject :
                                </label>
                                <span>
                                    {{ @$enquiry->enq_subject }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->enq_message)
                            <div class="detail-row">
                                <label>
                                    Message :
                                </label>
                                <span>
                                    {{ @$enquiry->enq_message }}
                                </span>
                            </div>
                        @endif
                        @if (@$enquiry->statement_type)
                            <div class="detail-row">
                                <label>
                                    Statement Type :
                                </label>
                                <span>
                                    {{ @$enquiry->statement_type }}
                                </span>
                            </div>
                        @endif
                        @if ($enquiry->start_date)
                            <div class="detail-row">
                                <label>
                                    Start Date :
                                </label>
                                <span>
                                    {{ $enquiry->start_date ? \Carbon\Carbon::parse(@$enquiry->start_date)->format('d-m-Y') : '' }}
                                </span>
                            </div>
                        @endif
                        @if ($enquiry->end_date)
                            <div class="detail-row">
                                <label>
                                    End Date :
                                </label>
                                <span>
                                    {{ $enquiry->end_date ? \Carbon\Carbon::parse(@$enquiry->end_date)->format('d-m-Y') : '' }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @include('admin.scripts.enquiry_js')
@endpush
