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

        $this->mailToCustomer($enquiry);
        $this->mailToAdmin($enquiry);

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

        $this->mailToCustomer($enquiry);
        $this->mailToAdmin($enquiry);

        return back()->with('page', 'thank-you');
    }

    public function contact(Request $request)
    {
        $enquiry = new Enquiry();
        $enquiry->type = 'contact';
        $enquiry->enq_no = $this->get_next_refkey();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone_number = ($request->country_code ? $request->country_code : '') . $request->phone;
        $enquiry->subject = $request->subject;
        $enquiry->message = $request->message;
        $enquiry->save();

        $this->mailToCustomer($enquiry);
        $this->mailToAdmin($enquiry);

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

        $this->mailToCustomer($enquiry);
        $this->mailToAdmin($enquiry);

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

        $this->mailToCustomer($enquiry);
        $this->mailToAdmin($enquiry);

        return redirect()->route('experience.avatr', '#form-section')->with('page', 'thank-you');
    }

    public function mailToCustomer($enquiry)
    {
        try {
            $ch = curl_init();

            $data = [
                "From" => "no-reply@avatrqa.com",
                "To" => $enquiry->mail,
                "Subject" => "Enquiry has been recorded - " . $enquiry->enq_no,
                "HtmlBody" => "Thank you for reaching out to AVATR. Your request has been received, and a member of our team will be in touch with you shortly.",
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
                info("Customer Mail error " . now());
                info("error 1 " . $error_msg);
                return ['status' => 400, 'msg' => 'Failed to send email', 'errorMsg' => $error_msg];
            }

            $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            // You can decode and check the response if needed
            $responseData = json_decode($response, true);

            if ($http_status === 200) {
                // Success
                return ['status' => 200, 'msg' => 'Email send Successfully'];
            } else {
                // Failure
                info("Customer Mail error " . now());
                info("error 2 " . '-' . $http_status . "-" . $responseData);
                return ['status' => $http_status, 'msg' => 'Failed to send email', 'errorMsg' => $responseData];
                // dd("Failed to send email", $responseData);
            }
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function mailToAdmin($enquiry)
    {

        try {
            $html = `
            <!DOCTYPE html
                PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">

            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <title>Untitled Document</title>
            </head>

            <body>
                <table width="600" border="0" cellspacing="1" cellpadding="6"
                    style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
                    <tr>
                       <td colspan="2" style="padding-bottom:10px; padding-top:10px;"><img style="height: 30px;"
                    src="{{ asset('website/AVATR-Logo.svg') }}" alt=""></td>
                    </tr>
                    <tr>
                        <td colspan="2" bgcolor="#FFFFFF" style="padding-bottom: 20px;"><strong>New enquiry received : {{$enquiry->enq_no}}</strong>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#f1f4f7">
                            <table cellspacing="10" cellpadding="10"
                                style="font-family:Arial, Helvetica, sans-serif; font-size:12px;" width="100%">
                        
                                @if (isset({{ $enquiry->type }}))
                                    <tr>
                                        <td bgcolor="#ffffff"><strong>Type</strong></td>
                                        <td bgcolor="#FFFFFF">{{ ucfirst($enquiry->type] }}</td>
                                    </tr>
                                @endif

                                @if (isset({{ $enquiry->name }}))
                                    <tr>
                                        <td bgcolor="#ffffff"><strong>Name</strong></td>
                                        <td bgcolor="#FFFFFF">{{ $enquiry->name }}</td>
                                    </tr>
                                @endif
                                @if (isset({{ $enquiry->email }}))
                                    <tr>
                                        <td bgcolor="#ffffff"><strong>Email</strong></td>
                                        <td bgcolor="#FFFFFF">{{ $enquiry->email }}</td>
                                    </tr>
                                @endif
                                @if (isset({{  $enquiry->phone_number }}))
                                    <tr>
                                        <td bgcolor="#ffffff">Phone Number</strong></td>
                                        <td bgcolor="#FFFFFF">{{  $enquiry->phone_number }}</td>
                                    </tr>
                                @endif
                                @if (isset({{ $enquiry->model }}))
                                    <tr>
                                        <td bgcolor="#ffffff"><strong>Model</strong></td>
                                        <td bgcolor="#FFFFFF">{{$enquiry->model}}</td>
                                    </tr>
                                @endif
                                @if (isset({{ $enquiry->language }}))
                                    <tr>
                                        <td bgcolor="#ffffff"><strong>Language</strong></td>
                                        <td bgcolor="#FFFFFF">{{$enquiry->language}}</td>
                                    </tr>
                                @endif
                                @if (isset({{ $enquiry->message }}))
                                    <tr>
                                        <td bgcolor="#ffffff"><strong>Message</strong></td>
                                        <td bgcolor="#FFFFFF">{{$enquiry->message}}</td>
                                    </tr>
                                @endif
                                
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td height="50" colspan="2" align="center" bgcolor="#002D5C" style="color:#fff;">
                            <strong>&copy;Copyright
                                {{ \Carbon\Carbon::now()->format('Y') }} Avatr Qatar. All Rights Reserved.</strong>
                        </td>
                    </tr>
                </table>
            </body>

            </html>

            `;

            $ch = curl_init();

            $data = [
                "From" => "no-reply@avatrqa.com",
                "To" => $enquiry->mail,
                "Subject" => "New Enquiry - " . $enquiry->enq_no,
                "HtmlBody" => $html,
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
                info("Admin Mail error " . now());
                info("error 1 " . $error_msg);
                return ['status' => 400, 'msg' => 'Failed to send email', 'errorMsg' => $error_msg];
                // dd("Curl error: " . $error_msg);
            }

            $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            // You can decode and check the response if needed
            $responseData = json_decode($response, true);

            if ($http_status === 200) {
                // Success
                return ['status' => 200, 'msg' => 'Email send Successfully'];
            } else {
                // Failure
                info("Admin Mail error " . now());
                info("error 2 " . '-' . $http_status . "-" . $responseData);
                return ['status' => $http_status, 'msg' => 'Failed to send email', 'errorMsg' => $responseData];
                // dd("Failed to send email", $responseData);
            }
        } catch (\Throwable $th) {
            return false;
        }
    }
}
