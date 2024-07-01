<?php

namespace App\Http\Controllers;

use App\Exports\ExportSubScriptionReport;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function subscriptionReport(Request $request)
    {
        $userId =  isset($request->user_id) ? $request->user_id : 'all';
        $customers = User::role('customer')->get();
        return view('admin.reports.subscription-report', [
            'customers' => $customers,
            'userId' => $userId
        ]);
    }

    // public function subscriptionReportExport(){
    //     ini_set('memory_limit', '-1');
    //     $export = new ExportSubScriptionReport();
    //     return Excel::download($export, 'UsersReport.xlsx');
    // }

    
}
