<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ServiceOrder;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class LandingPagesController extends Controller
{
    public function index()
    {
        $totalProgress = ServiceOrder::where('status', 'PROGRESS')->count();
        $totalSuccess = ServiceOrder::where('status', 'SUCCESS')->count();
        $totalPending = ServiceOrder::where('status', 'PENDING')->count();
        $totalCustomer = ServiceOrder::all('id')->count();

        $totalUser = User::all('id')->count();

        return view('pages.landing-pages.index', [
            'totalProgress' => $totalProgress,
            'totalSuccess' => $totalSuccess,
            'totalPending' => $totalPending,
            'totalCustomer' => $totalCustomer,

            'totalUser' => $totalUser,
        ]);
    }
}
