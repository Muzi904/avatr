<?php

namespace App\Exports;

use App\Models\Enquiry;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Events\AfterSheet;

class EnquiryExport implements FromCollection, WithHeadings, WithStrictNullComparison, ShouldAutoSize, WithEvents
{
    protected $request;
    public function __construct($request)
    {
        $this->request = $request;
    }

    public function collection()
    {
        $request = $this->request;
        $data = Enquiry::query();

        if ($request->from_date) {
            $data = $data->whereDate('enquiries.created_at', '>=', $request->from_date);
        }
        if ($request->to_date) {
            $data = $data->whereDate('enquiries.created_at', '<=', $request->to_date);
        }
        if ($request->type) {
            $data = $data->where('type', 'LIKE', '%' . $request->type . '%');
        }
        $data = $data->select('enquiries.*')->orderBy('enquiries.id', 'desc')->get();

        $output = [];

        foreach ($data as $key => $value) {

            $output[] = [
                $key + 1,
                $value->enq_no,
                $value->type ? ucfirst($value->type) : '',
                $value->model ? ucfirst($value->model) : '',
                $value->name,
                $value->email,
                $value->phone_number,
                $value->language ? ucfirst($value->language) : '',
                $value->nationality ? ucfirst($value->nationality) : '',
                $value->subject,
                $value->message,
                $value->date ? Carbon::parse($value->date)->format('d/m/Y') : '',
                $value->created_at ? Carbon::parse($value->created_at)->format('d/m/Y h:i A') : '',

            ];
        }

        return collect($output);
    }

    public function headings(): array
    {
        return [
            'SL.NO',
            'ENQ. NO',
            'TYPE',
            'MODEL',
            'NAME',
            'EMAIL',
            'PHONE NUMBER',
            'LANGUAGE',
            'NATIONALITY',
            'SUBJECT',
            'MESSAGE',
            'TESTDRIVE DATE',
            'CREATED ON'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {
                $cellRange = 'A1:M1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(10)->setBold(2);
            },
        ];
    }
}
