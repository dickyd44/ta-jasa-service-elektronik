<?php

namespace App\Http\Controllers;

use App\Models\ServiceOrder;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $items = ServiceOrder::orderBy('created_at', 'desc')->get();
        return view('pages.report.index', [
            'items' => $items,
        ]);
    }
}
