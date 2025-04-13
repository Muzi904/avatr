<?php

namespace App\Http\Controllers\Admin;

use App\Exports\EnquiryExport;
use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

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
            if ($request->type) {
                $data = $data->where('type', 'LIKE', '%' . $request->type . '%');
                Session::put('type', $request->type);
            }
            $data = $data->orderBy('id', 'desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('type', function ($data) {
                    return  ucfirst($data->type);
                })
                ->addColumn('created_at', function ($data) {
                    return  Carbon::parse($data->created_at)->format('d-m-Y h:i A');
                })
                ->addColumn('action', null)
                ->rawColumns(['type', 'created_at', 'action'])
                ->make(true);
        }

        return view('admin.pages.enquiries.index', compact('filters'));
    }
    public function invitation(Request $request)
    {
        $filters = $request->all();
        if ($request->ajax()) {
            $data = Enquiry::where('type', 'invitation');
            if ($request->from_date) {
                $data = $data->whereDate('enquiries.created_at', '>=', $request->from_date);
                Session::put('from_date', $request->from_date);
            }
            if ($request->to_date) {
                $data = $data->whereDate('enquiries.created_at', '<=', $request->to_date);
                Session::put('to_date', $request->to_date);
            }
            // if ($request->is_confirmed) {
            //     $data = $data->where('is_confirmed', 'LIKE', '%' . $request->is_confirmed . '%');
            //     Session::put('is_confirmed', $request->is_confirmed);
            // }
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

        return view('admin.pages.enquiries.invitation', compact('filters'));
    }
    public function testDrive(Request $request)
    {
        $filters = $request->all();
        if ($request->ajax()) {
            $data = Enquiry::where('type', 'test-drive');
            if ($request->from_date) {
                $data = $data->whereDate('enquiries.created_at', '>=', $request->from_date);
                Session::put('from_date', $request->from_date);
            }
            if ($request->to_date) {
                $data = $data->whereDate('enquiries.created_at', '<=', $request->to_date);
                Session::put('to_date', $request->to_date);
            }
            // if ($request->is_confirmed) {
            //     $data = $data->where('is_confirmed', 'LIKE', '%' . $request->is_confirmed . '%');
            //     Session::put('is_confirmed', $request->is_confirmed);
            // }
            $data = $data->orderBy('id', 'desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('model', function ($data) {
                    return  ucfirst($data->model);
                })
                ->addColumn('date', function ($data) {
                    return  Carbon::parse($data->date)->format('d-m-Y');
                })
                ->addColumn('created_at', function ($data) {
                    return  Carbon::parse($data->created_at)->format('d-m-Y h:i A');
                })
                ->addColumn('action', null)
                ->rawColumns(['model', 'date', 'created_at', 'action'])
                ->make(true);
        }

        return view('admin.pages.enquiries.test-drive', compact('filters'));
    }
    public function requestQuote(Request $request)
    {
        $filters = $request->all();
        if ($request->ajax()) {
            $data = Enquiry::where('type', 'request-quote');
            if ($request->from_date) {
                $data = $data->whereDate('enquiries.created_at', '>=', $request->from_date);
                Session::put('from_date', $request->from_date);
            }
            if ($request->to_date) {
                $data = $data->whereDate('enquiries.created_at', '<=', $request->to_date);
                Session::put('to_date', $request->to_date);
            }
            // if ($request->is_confirmed) {
            //     $data = $data->where('is_confirmed', 'LIKE', '%' . $request->is_confirmed . '%');
            //     Session::put('is_confirmed', $request->is_confirmed);
            // }
            $data = $data->orderBy('id', 'desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('model', function ($data) {
                    return  ucfirst($data->model);
                })
                ->addColumn('language', function ($data) {
                    return  ucfirst($data->language);
                })


                ->addColumn('created_at', function ($data) {
                    return  Carbon::parse($data->created_at)->format('d-m-Y h:i A');
                })
                ->addColumn('action', null)
                ->rawColumns(['model', 'language',  'created_at', 'action'])
                ->make(true);
        }

        return view('admin.pages.enquiries.request-quote', compact('filters'));
    }

    public function contact(Request $request)
    {
        $filters = $request->all();
        if ($request->ajax()) {
            $data = Enquiry::where('type', 'contact');
            if ($request->from_date) {
                $data = $data->whereDate('enquiries.created_at', '>=', $request->from_date);
                Session::put('from_date', $request->from_date);
            }
            if ($request->to_date) {
                $data = $data->whereDate('enquiries.created_at', '<=', $request->to_date);
                Session::put('to_date', $request->to_date);
            }
            // if ($request->is_confirmed) {
            //     $data = $data->where('is_confirmed', 'LIKE', '%' . $request->is_confirmed . '%');
            //     Session::put('is_confirmed', $request->is_confirmed);
            // }
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

        return view('admin.pages.enquiries.contact', compact('filters'));
    }
    public function experience(Request $request)
    {
        $filters = $request->all();
        if ($request->ajax()) {
            $data = Enquiry::where('type', 'experience');
            if ($request->from_date) {
                $data = $data->whereDate('enquiries.created_at', '>=', $request->from_date);
                Session::put('from_date', $request->from_date);
            }
            if ($request->to_date) {
                $data = $data->whereDate('enquiries.created_at', '<=', $request->to_date);
                Session::put('to_date', $request->to_date);
            }
            // if ($request->is_confirmed) {
            //     $data = $data->where('is_confirmed', 'LIKE', '%' . $request->is_confirmed . '%');
            //     Session::put('is_confirmed', $request->is_confirmed);
            // }
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

        return view('admin.pages.enquiries.experience', compact('filters'));
    }

    public function clearSession()
    {
        Session::forget('from_date');
        Session::forget('to_date');
        Session::forget('type');
    }

    public function export(Request $request)
    {
        return Excel::download(new EnquiryExport($request),  $request->type ? date('Y_m_d_H_i_s') . '_' . $request->type . '_enquiries.xlsx' : date('Y_m_d_H_i_s') . '_enquiries.xlsx');
    }

    public function checkMail($mail)
    {
        $ch = curl_init();

        $data = [
            "From" => "no-reply@avatrqa.com",
            "To" => $mail,
            "Subject" => "Hello from Postmark",
            "HtmlBody" => "<strong>Hello</strong> dear Postmark user.",
            "MessageStream" => "outbound"
        ];

        curl_setopt($ch, CURLOPT_URL, "https://api.postmarkapp.com/email");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Accept: application/json",
            "Content-Type: application/json",
            "X-Postmark-Server-Token: 6c52ed31-742e-45f7-9dee-08feab0097ce"
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            // Handle error
            dd("Curl error: " . $error_msg);
        }

        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // You can decode and check the response if needed
        $responseData = json_decode($response, true);

        if ($http_status === 200) {
            // Success
            dd("Email sent successfully!", $responseData);
        } else {
            // Failure
            dd("Failed to send email", $responseData);
        }
    }
}
