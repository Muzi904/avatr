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
        $lastRefNo = Enquiry::select('enq_no')->orderBy('id', 'desc')->latest()->first();
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

    // public function store(Request $request)
    // {
    //     try {
    //         $refNo = $this->get_next_refkey();

    //         $enquiry = new Enquiry();
    //         // $enquiry->category = $request->enq_type;
    //         $enquiry->enq_type = $request->enq_type;
    //         $enquiry->enq_refno = $refNo;
    //         // $enquiry->page_slug = $slug;
    //         // $enquiry->custom_ref = $request-> ;
    //         $enquiry->request_type = $request->request_type ? $request->request_type : '';
    //         // $enquiry->enq_products = $menu->label;
    //         $enquiry->enq_name = $request->name;
    //         $enquiry->enq_mobile     = $request->phone;
    //         $enquiry->enq_email = $request->email;
    //         $enquiry->is_active = 'Y';

    //         $enquiry->added_on = Carbon::now()->format('Y-m-d H:i:s');
    //         $enquiry->save();

    //         return back()->with('success', 'Thanks for your interest. Our team will contact you soon.');
    //     } catch (\Throwable $th) {
    //         // dd($th);
    //         return back()->with('error', 'Something went wrong. Please try again later.');
    //     }
    // }

    public function submitInvitations(Request $request)
    {
        $enquiry = new Enquiry();
        $enquiry->type = 'invitation';
        $enquiry->enq_no = $this->get_next_refkey();
        $enquiry->name = $request->name;
        $enquiry->phone_number = ($request->country_code ? $request->country_code : '') . $request->phone;
        $enquiry->is_confirmed = 'Confirmed';
        $enquiry->save();

        return back()->with('page', 'thank-you-confirm');
    }

    public function testDrive(Request $request)
    {

        $enquiry = new Enquiry();
        $enquiry->type = 'test-drive';
        $enquiry->enq_no = $this->get_next_refkey();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->model = $request->engine;
        $enquiry->phone_number = ($request->country_code ? $request->country_code : '') . $request->phone;
        $enquiry->date = $request->date ? Carbon::parse($request->date)->format('Y-m-d') : '';
        // $enquiry->time = $request->time ? Carbon::parse($request->time)->format('H:i:s') : '';
        $enquiry->message = $request->message;
        $enquiry->save();

        return back()->with('page', 'thank-you');
    }

    public function contact(Request $request)
    {
        $enquiry = new Enquiry();
        $enquiry->type = 'contact';
        // $enquiry->enq_no = $this->get_next_refkey();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone_number = ($request->country_code ? $request->country_code : '') . $request->phone;
        $enquiry->subject = $request->subject;
        $enquiry->message = $request->message;
        $enquiry->save();

        return redirect()->route('contact', '#form-section')->with('page', 'thank-you');
    }

    public function requestQuoteDrive(Request $request)
    {

        $enquiry = new Enquiry();
        $enquiry->type = 'request-quote';
        $enquiry->enq_no = $this->get_next_refkey();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->model = $request->engine;
        $enquiry->phone_number = ($request->country_code ? $request->country_code : '') . $request->phone;
        $enquiry->language = $request->language;
        // $enquiry->nationality = $request->nationality;
        // $enquiry->date = $request->date ? Carbon::parse($request->date)->format('Y-m-d') : '';
        $enquiry->message = $request->message;
        $enquiry->save();

        return back()->with('page', 'thank-you');
    }

    public function experience(Request $request)
    {
        $enquiry = new Enquiry();
        $enquiry->type = 'experience';
        $enquiry->enq_no = $this->get_next_refkey();
        $enquiry->name = $request->f_name . ' ' . $request->l_name;
        $enquiry->email = $request->email;
        $enquiry->phone_number = ($request->country_code ? $request->country_code : '') . $request->phone;
        $enquiry->model = $request->model;
        $enquiry->save();

        return redirect()->route('experience.avatr', '#form-section')->with('page', 'thank-you');
    }
}
