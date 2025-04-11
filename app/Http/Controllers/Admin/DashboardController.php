<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Common;
use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(Request $request)
    {
        $startDate = Carbon::now()->subMonth()->format('Y-m-d');
        $endDate = Carbon::now()->format('Y-m-d');

        return view('admin.pages.dashboard', compact('startDate', 'endDate'));
    }


    public function dashboardCounts(Request $request)
    {
        $response = [];

        if ($request->interval) {
            if ($request->interval == 'last_7_days') {
                $endDate = Carbon::today()->format('Y-m-d');
                $startDate = Carbon::today()->subDays(6)->format('Y-m-d');
            } else if ($request->interval == 'this_month') {
                $startDate = Carbon::now()->startOfMonth()->format('Y-m-d');
                $endDate = Carbon::today()->format('Y-m-d');
            } else if ($request->interval == 'last_month') {
                $startDate = Carbon::today()->subDays(29)->format('Y-m-d');
                $endDate = Carbon::today()->format('Y-m-d');
            } else if ($request->interval == 'last_3_month') {
                $startDate = Carbon::today()->subMonths(2)->startOfMonth()->format('Y-m-d');
                $endDate = Carbon::today()->format('Y-m-d');
            } else if ($request->interval == 'all') {
                $enquiry = Enquiry::oldest()->first();
                $startDate = Carbon::parse($enquiry->created_at)->format('Y-m-d');
                $endDate = Carbon::today()->format('Y-m-d');
            }
        } else {
            $startDate = $request->from_date ? Carbon::parse($request->from_date)->format('Y-m-d') : Carbon::now()->subMonth()->format('Y-m-d');
            $endDate = $request->to_date ? Carbon::parse($request->to_date)->format('Y-m-d') : Carbon::now()->format('Y-m-d');
        }

        $response['startDate'] = $startDate;
        $response['endDate'] = $endDate;

        $commonEnquiry = Common::getEnquiryCountCommon($startDate, $endDate);

        $response['totalEnquiryCount'] = $commonEnquiry->count();
        $response['contactEnquiryCount'] = Common::getEnquiryCountCommon($startDate, $endDate)->where('type', 'contact')->count();
        $response['experienceEnquiryCount'] = Common::getEnquiryCountCommon($startDate, $endDate)->where('type', 'experience')->count();

        $response['dayWiseTotalEnquiryCounts'] = ['date' => [], 'count' => []];
        $response['dayWiseContactEnquiryCount'] = ['date' => [], 'count' => []];
        $response['dayWiseExperienceEnquiryCount'] = ['date' => [], 'count' => []];

        if ($request->interval == null || $request->interval == 'last_7_days' || $request->interval == 'this_month' || $request->interval == 'last_month' || $request->interval == 'last_3_month') {
            for ($date = Carbon::parse($startDate); $date->lte(Carbon::parse($endDate)); $date->addDay()) {
                array_push($response['dayWiseTotalEnquiryCounts']['date'], $date->format('Y-m-d'));
                array_push($response['dayWiseContactEnquiryCount']['date'], $date->format('Y-m-d'));
                array_push($response['dayWiseExperienceEnquiryCount']['date'], $date->format('Y-m-d'));

                $totalCount = Common::getEnquiryDateCount($date->format('Y-m-d'), null);
                array_push($response['dayWiseTotalEnquiryCounts']['count'], $totalCount);

                $contactCount = Common::getEnquiryDateCount($date->format('Y-m-d'), 'contact');
                array_push($response['dayWiseContactEnquiryCount']['count'], $contactCount);

                $experienceCount = Common::getEnquiryDateCount($date->format('Y-m-d'), 'experience');
                array_push($response['dayWiseExperienceEnquiryCount']['count'], $experienceCount);
            }
        }

        return response()->json($response);
    }
    // public function dashboardCountsTotal(Request $request)
    // {
    //     $response = [];
    //     if ($request->interval) {
    //         if ($request->interval == 'last_7_days') {
    //             $endDate = Carbon::today()->format('Y-m-d');
    //             $startDate = Carbon::today()->subDays(6)->format('Y-m-d');
    //         } else if ($request->interval == 'this_month') {
    //             $startDate = Carbon::now()->startOfMonth()->format('Y-m-d');
    //             $endDate = Carbon::today()->format('Y-m-d');
    //         } else if ($request->interval == 'last_month') {
    //             $startDate = Carbon::today()->subDays(29)->format('Y-m-d');
    //             $endDate = Carbon::today()->format('Y-m-d');
    //         } else if ($request->interval == 'last_3_month') {
    //             $startDate = Carbon::today()->subMonths(2)->startOfMonth()->format('Y-m-d');
    //             $endDate = Carbon::today()->format('Y-m-d');
    //         } else if ($request->interval == 'all') {
    //             $enquiry = Enquiry::oldest()->first();
    //             $startDate = Carbon::parse($enquiry->created_at)->format('Y-m-d');
    //             $endDate = Carbon::today()->format('Y-m-d');
    //         }
    //     } else {
    //         $startDate = $request->from_date ? Carbon::parse($request->from_date)->format('Y-m-d') : Carbon::now()->subMonth()->format('Y-m-d');
    //         $endDate = $request->to_date ? Carbon::parse($request->to_date)->format('Y-m-d') : Carbon::now()->format('Y-m-d');
    //     }

    //     $response['startDate'] = $startDate;
    //     $response['endDate'] = $endDate;

    //     $response['totalEnquiryCount'] = Common::getEnquiryCount($startDate, $endDate, $request->type);

    //     $response['dayWiseTotalEnquiryCounts'] = ['date' => [], 'count' => []];

    //     if ($request->interval == null || $request->interval == 'last_7_days' || $request->interval == 'this_month' || $request->interval == 'last_month' || $request->interval == 'last_3_month') {
    //         for ($date = Carbon::parse($startDate); $date->lte(Carbon::parse($endDate)); $date->addDay()) {
    //             array_push($response['dayWiseTotalEnquiryCounts']['date'], $date->format('Y-m-d'));
    //             $totalCount = Common::getEnquiryDateCount($date->format('Y-m-d'), $request->type);
    //             array_push($response['dayWiseTotalEnquiryCounts']['count'], $totalCount);
    //         }
    //     }

    //     return response()->json($response);
    // }
}
