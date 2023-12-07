<?php

namespace App\Http\Controllers;

use App\Models\ServiceOrder;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $items = ServiceOrder::orderByRaw('status="PENDING" desc')->orderBy('created_at', 'desc')->get();
        $changes = ['SUCCESS', 'PENDING'];

        $totalProgress = ServiceOrder::where('status', 'PROGRESS')->count();
        $totalSuccess = ServiceOrder::where('status', 'SUCCESS')->count();
        $totalPending = ServiceOrder::where('status', 'PENDING')->count();
        $totalCustomer = ServiceOrder::all('id')->count();

        return view('pages.dashboard.index', [
            'totalProgress' => $totalProgress,
            'totalSuccess' => $totalSuccess,
            'totalPending' => $totalPending,
            'totalCustomer' => $totalCustomer,

            'items' => $items,
            'changes' => $changes,
        ]);
    }
}
