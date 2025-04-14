<?php

namespace App\Helpers;

use App\Models\Enquiry;
use App\Models\Menu;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

/**
 * Write code on Method
 *
 * @return response()
 */

class Common
{
    public static function getEnquiryCount(
        $startDate = null,
        $endDate = null,
        $type = null,
    ) {
        return Enquiry::query()
            ->when($startDate, function ($query) use ($startDate) {
                $query->whereDate('created_at', '>=', $startDate);
            })
            ->when($endDate, function ($query) use ($endDate) {
                $query->whereDate('created_at', '<=', $endDate);
            })
            ->when($type, function ($query) use ($type) {
                $query->where('type', $type);
            })
            ->count();
    }

    static function getEnquiryDateCount($date = null, $type = null)
    {
        $query = Enquiry::query();
        if ($date) {
            $query->whereDate('created_at',  $date);
        }
        if ($type) {
            $query->where('type', $type);
        }

        return $query->count();
    }

    public static function getEnquiryCountCommon(
        $startDate = null,
        $endDate = null
    ) {
        return Enquiry::query()
            ->when($startDate, function ($query) use ($startDate) {
                $query->whereDate('created_at', '>=', $startDate);
            })
            ->when($endDate, function ($query) use ($endDate) {
                $query->whereDate('created_at', '<=', $endDate);
            });
    }
}
