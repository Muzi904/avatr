<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class EnquiryController extends Controller
{
    public function index(Request $request)
    {
        $heading = 'All Enquiries';
        $section = 'All';
        $types = ['Sales Enquiry', 'Customer Support', 'Request', 'Feedback'];

        if ($request->ajax()) {
            $data = Enquiry::query();
            if ($request->from_date) {
                $data = $data->whereRaw("STR_TO_DATE(added_on, '%Y-%m-%d') >= ?", [$request->from_date]);
            }
            if ($request->to_date) {
                $data = $data->whereRaw("STR_TO_DATE(added_on, '%Y-%m-%d') <= ?", [$request->to_date]);
            }
            if ($request->enq_type) {
                $data = $data->where("enq_type", $request->enq_type);
            }

            $data = $data->orderBy('added_on', 'desc');
            return DataTables::of($data)
                ->addColumn('checkbox', '<input class="form-check-input m-0 align-middle" type="checkbox" aria - label = "Select invoice" >')
                ->addIndexColumn()
                ->editColumn('enq_type', function ($data) {
                    if ($data->enq_type == 'Request') {
                        return $data->request_type;
                    } else {
                        return $data->enq_type;
                    }
                })
                ->editColumn('enq_email', function ($data) {
                    if ($data->enq_type == 'Request') {
                        return $data->req_email;
                    } else {
                        return $data->enq_email;
                    }
                })
                ->editColumn('enq_message', function ($data) {
                    return Str::limit($data->enq_message, 40);
                })
                ->editColumn('enq_products', function ($data) {
                    return str_replace(',', '<br />', $data->enq_products);
                })
                ->addColumn('added_on', function ($data) {
                    $date = Carbon::parse($data->added_on)->format('d-m-Y');
                    $time = Carbon::parse($data->added_on)->format('h:i A');

                    return $date . ' <br/>' . $time;
                })
                ->addColumn('action', null)
                ->rawColumns(['checkbox', 'enq_type', 'enq_message', 'enq_products', 'added_on', 'action'])
                ->make(true);
        }

        return view('admin.pages.enquiries.index', compact('types', 'heading', 'section'));
    }

    public function show($id)
    {
        $enquiry = Enquiry::find($id);

        return view('admin.pages.enquiries.show', compact('enquiry'));
    }
}
