<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    static function get_next_refkey()
    {
        $lastRefNo = Enquiry::select('enq_refno')->where('enq_refno', 'like', 'NW-%')->orderBy('id', 'desc')->latest()->first();
        if (!empty($lastRefNo)) {
            $refNo = explode('-', $lastRefNo->enq_refno);
            $lastElement = array_slice($refNo, -1);
            $id = array_pop($lastElement);

            if ($id) {
                $id = $id + 1;
                return 'NW-' . date('ym') . '-' . $id;
            } else {
                return 'NW-' . date('ym') . '-1';
            }
        } else {
            return 'NW-' . date('ym') . '-1';
        }
    }

    public function store(Request $request)
    {
        try {
            $refNo = $this->get_next_refkey();

            $enquiry = new Enquiry();
            // $enquiry->category = $request->enq_type;
            $enquiry->enq_type = $request->enq_type;
            $enquiry->enq_refno = $refNo;
            // $enquiry->page_slug = $slug;
            // $enquiry->custom_ref = $request-> ;
            $enquiry->request_type = $request->request_type ? $request->request_type : '';
            // $enquiry->enq_products = $menu->label;
            $enquiry->enq_name = $request->name;
            $enquiry->enq_mobile     = $request->phone;
            $enquiry->enq_email = $request->email;
            $enquiry->is_active = 'Y';

            $enquiry->added_on = Carbon::now()->format('Y-m-d H:i:s');
            $enquiry->save();

            return back()->with('success', 'Thanks for your interest. Our team will contact you soon.');
        } catch (\Throwable $th) {
            // dd($th);
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
