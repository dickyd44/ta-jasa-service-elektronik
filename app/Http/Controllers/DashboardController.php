<?php

namespace App\Http\Controllers;

use App\Models\ServiceOrder;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProgress = ServiceOrder::where('status', 'ON PROGRESS')->count();
        $totalSuccess = ServiceOrder::where('status', 'SUCCESS')->count();
        $totalPending = ServiceOrder::where('status', 'PENDING')->count();
        $totalCustomer = ServiceOrder::all('id')->count();

        return view('pages.dashboard.index', [
            'totalProgress' => $totalProgress,
            'totalSuccess' => $totalSuccess,
            'totalPending' => $totalPending,
            'totalCustomer' => $totalCustomer,
        ]);
    }
}
