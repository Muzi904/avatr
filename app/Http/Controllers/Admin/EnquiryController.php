<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class EnquiryController extends Controller
{
    public function index(Request $request)
    {
        $filters = $request->all();
        if ($request->ajax()) {
            $data = Enquiry::query();
            if ($request->from_date) {
                $data = $data->whereDate('enquiries.created_at', '>=', $request->from_date);
                Session::put('from_date', $request->from_date);
            }
            if ($request->to_date) {
                $data = $data->whereDate('enquiries.created_at', '<=', $request->to_date);
                Session::put('to_date', $request->to_date);
            }
            if ($request->is_confirmed) {
                $data = $data->where('is_confirmed', 'LIKE', '%' . $request->is_confirmed . '%');
                Session::put('is_confirmed', $request->is_confirmed);
            }
            $data = $data->orderBy('id', 'desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function ($data) {
                    return  Carbon::parse($data->created_at)->format('d-m-Y h:i A');
                })
                ->addColumn('action', null)
                ->rawColumns(['created_at', 'action'])
                ->make(true);
        }

        return view('admin.pages.enquiries.index', compact('filters'));
    }

    public function clearSession()
    {
        Session::forget('from_date');
        Session::forget('to_date');
        Session::forget('is_confirmed');
    }

    // public function export(Request $request)
    // {
    //     return Excel::download(new EnquiryExport($request), date('Y_m_d_H_i_s') . '_enquiries.xlsx');
    // }
}
