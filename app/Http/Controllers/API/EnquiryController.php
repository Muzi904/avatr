<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    static function get_next_refkey()
    {
        $lastRefNo = Enquiry::select('enq_no')->where('enq_no', 'like', 'AE-%')->orderBy('id', 'desc')->latest()->first();
        if (!empty($lastRefNo)) {
            $refNo = explode('-', $lastRefNo->enq_no);
            $lastElement = array_slice($refNo, -1);
            $id = array_pop($lastElement);

            if ($id) {
                $id = $id + 1;
                return 'AE-' . date('ym') . '-' . $id;
            } else {
                return 'AE-' . date('ym') . '-1';
            }
        } else {
            return 'AE-' . date('ym') . '-1';
        }
    }
    public function addEnquiry(Request $request)
    {
        $enquiry = new Enquiry();
        $enquiry->type = 'invitation';
        $enquiry->enq_no = $this->get_next_refkey();
        $enquiry->name = $request->name;
        $enquiry->phone_number = $request->phone_number;
        $enquiry->is_confirmed = $request->is_confirmed;
        $enquiry->save();

        return response()->json([
            'message' => 'Enquiry added successfully',
            'enquiry' => $enquiry
        ], 200);
    }
}
